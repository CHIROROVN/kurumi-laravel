@extends('frontend.frontend')

@section('content')
<!--Content -->

<section class="order-child clear" id="contact">
  <div class="container">
    <h1 class="title-content"><img src="{{ asset('') }}public/frontend/image/order/title-com.png" alt="" /></h1>

    <!-- form -->
    {!! Form::open(array('route' => 'frontend.order.move_com.index', 'enctype'=>'multipart/form-data')) !!}
    <div class="content">
      <ul class="breadcrum-step">
        <li><a href="" title=""><img src="{{ asset('') }}public/frontend/image/order/text1-frame02.png" alt="" /></a></li>
        <li><a href="" title=""><img src="{{ asset('') }}public/frontend/image/order/text2-normal-frame02.png" alt="" /></a></li>
        <li><a href="" title=""><img src="{{ asset('') }}public/frontend/image/order/text3-normal-frame02.png" alt="" /></a></li>
      </ul>
      <div class="text-message">※ は必須項目です。</div>
      <h3>お申込みサーバー情報</h3>

      <table class="form-input">

        <!-- Application server information -->
        <!-- app_plan_name -->
        <tr>
          <td class="title"><span>※ </span>お申込みプラン名</td>
          <td>
            <select name="app_plan_name">
              @if ( isset($back['app_plan_name']) && $back['app_plan_name'] == 1 )
              <option value="1" selected="">おてがるプラン</option>
              @elseif ( old('app_plan_name') == 1 )
              <option value="1" selected="">おてがるプラン</option>
              @else
              <option value="1">おてがるプラン</option>
              @endif
              
              @if ( isset($back['app_plan_name']) && $back['app_plan_name'] == 2 )
              <option value="2" selected="">しっかりプラン</option>
              @elseif ( old('app_plan_name') == 2 )
              <option value="2" selected="">しっかりプラン</option>
              @else
              <option value="2">しっかりプラン</option>
              @endif
            </select>
            @if ($errors->first('app_plan_name'))<span class="error-input">{!! $errors->first('app_plan_name') !!}</span>@endif
          </td>
        </tr>

        <!-- app_domain_name -->
        <tr>
          <td class="title"><span>※ </span>ドメイン名</td>
          <td>
            @if ( isset($back['app_domain_name']) )
            <input type="text" name="app_domain_name" value="{{ $back['app_domain_name'] }}" />
            @else
            <input type="text" name="app_domain_name" value="{{ old('app_domain_name') }}" />
            @endif
            @if ($errors->first('app_domain_name'))<span class="error-input">{!! $errors->first('app_domain_name') !!}</span>@endif
          </td>
        </tr>

        <!-- app_service_start_date -->
        <tr>
          <td class="title"><span>※ </span>サービス開始希望日</td>
          <td>
            <div>
              @if ( isset($back['app_service_start_date']) && $back['app_service_start_date'] == 1 )
              <input type="radio" name="app_service_start_date" value="1" checked="" /> 希望なし（お申込みの翌営業日より2～3営業日目にサービス開始） 
              @elseif ( old('app_service_start_date') == 1 )
              <input type="radio" name="app_service_start_date" value="1" checked="" /> 希望なし（お申込みの翌営業日より2～3営業日目にサービス開始） 
              @else
              <input type="radio" name="app_service_start_date" value="1" /> 希望なし（お申込みの翌営業日より2～3営業日目にサービス開始） 
              @endif
            </div>
            <div>
              @if ( isset($back['app_service_start_date']) && $back['app_service_start_date'] == 2 )
              <input type="radio" name="app_service_start_date" value="2" checked="" /> 希望あり 
              @elseif ( old('app_service_start_date') == 2 )
              <input type="radio" name="app_service_start_date" value="2" checked="" /> 希望あり 
              @else
              <input type="radio" name="app_service_start_date" value="2" /> 希望あり
              @endif
            </div>
            @if ($errors->first('app_service_start_date'))<span class="error-input">{!! $errors->first('app_service_start_date') !!}</span>@endif
          </td>
        </tr>
        
        <!-- app_payment_method -->
        <tr>
          <td class="title"><span>※ </span>お支払い方法</td>
          <td>
            <select class="input-xs" name="app_payment_method_1">
              @if ( isset($back['app_payment_method_1']) && $back['app_payment_method_1'] == 1 )
              <option value="1" selected="">月払い</option>
              @elseif ( old('app_payment_method_1') == 1 )
              <option value="1" selected="">月払い</option>
              @else
              <option value="1">月払い</option>
              @endif

              @if ( isset($back['app_payment_method_1']) && $back['app_payment_method_1'] == 2 )
              <option value="2" selected="">年払い</option>
              @elseif ( old('app_payment_method_1') == 2 )
              <option value="2" selected="">年払い</option>
              @else
              <option value="2">年払い</option>
              @endif
            </select>
            <select class="input-sm" name="app_payment_method_2">
              @if ( isset($back['app_payment_method_2']) && $back['app_payment_method_2'] == 1 )
              <option value="1" selected="">請求書払い（振込手数料はお客様負担）</option>
              @elseif ( old('app_payment_method_2') == 1 )
              <option value="1" selected="">請求書払い（振込手数料はお客様負担）</option>
              @else
              <option value="1">請求書払い（振込手数料はお客様負担）</option>
              @endif
              
              @if ( isset($back['app_payment_method_2']) && $back['app_payment_method_2'] == 2 )
              <option value="2" selected="">クレジットカード払い</option>
              @elseif ( old('app_payment_method_2') == 2 )
              <option value="2" selected="">クレジットカード払い</option>
              @else
              <option value="2">クレジットカード払い</option>
              @endif
            </select>
          </td>
        </tr>

        <!-- app_option -->
        <tr>
          <td class="title">オプション</td>
          <td>
            @if ( isset($back['app_option']) )
            <input type="text" name="app_option" value="{{ $back['app_option'] }}" />
            @else
            <input type="text" name="app_option" value="{{ old('app_option') }}" />
            @endif
            @if ($errors->first('app_option'))<span class="error-input">{!! $errors->first('app_option') !!}</span>@endif
          </td>
        </tr>

        <!-- app_generation -->
        <tr>
          <td class="title"><span>※ </span>外部バックアップ世代数追加<br />（1世代あたり）</td>
          <td>
            <select name="app_generation" class="input-sm" >
              <option value="">不要</option>
              @if ( isset($back['app_generation']) && $back['app_generation'] == 1 )
              <option value="1" selected="">1</option>
              @elseif ( old('app_generation') == 1 )
              <option value="1" selected="">1</option>
              @else
              <option value="1">1</option>
              @endif
              @if ( isset($back['app_generation']) && $back['app_generation'] == 2 )
              <option value="2" selected="">2</option>
              @elseif ( old('app_generation') == 2 )
              <option value="2" selected="">2</option>
              @else
              <option value="2">2</option>
              @endif
              @if ( isset($back['app_generation']) && $back['app_generation'] == 3 )
              <option value="3" selected="">3</option>
              @elseif ( old('app_generation') == 3 )
              <option value="3" selected="">3</option>
              @else
              <option value="3">3</option>
              @endif
              @if ( isset($back['app_generation']) && $back['app_generation'] == 4 )
              <option value="4" selected="">4</option>
              @elseif ( old('app_generation') == 4 )
              <option value="4" selected="">4</option>
              @else
              <option value="4">4</option>
              @endif
              @if ( isset($back['app_generation']) && $back['app_generation'] == 5 )
              <option value="5" selected="">5</option>
              @elseif ( old('app_generation') == 5 )
              <option value="5" selected="">5</option>
              @else
              <option value="5">5</option>
              @endif
              @if ( isset($back['app_generation']) && $back['app_generation'] == 6 )
              <option value="6" selected="">6</option>
              @elseif ( old('app_generation') == 6 )
              <option value="6" selected="">6</option>
              @else
              <option value="6">6</option>
              @endif
              @if ( isset($back['app_generation']) && $back['app_generation'] == 7 )
              <option value="7" selected="">7</option>
              @elseif ( old('app_generation') == 7 )
              <option value="7" selected="">7</option>
              @else
              <option value="7">7</option>
              @endif
              @if ( isset($back['app_generation']) && $back['app_generation'] == 8 )
              <option value="8" selected="">8</option>
              @elseif ( old('app_generation') == 8 )
              <option value="8" selected="">8</option>
              @else
              <option value="8">8</option>
              @endif
              @if ( isset($back['app_generation']) && $back['app_generation'] == 9 )
              <option value="9" selected="">9</option>
              @elseif ( old('app_generation') == 9 )
              <option value="9" selected="">9</option>
              @else
              <option value="9">9</option>
              @endif
              @if ( isset($back['app_generation']) && $back['app_generation'] == 10 )
              <option value="10" selected="">10</option>
              @elseif ( old('app_generation') == 10 )
              <option value="10" selected="">10</option>
              @else
              <option value="10">10</option>
              @endif
            </select> 世代
            @if ($errors->first('app_generation'))<span class="error-input">{!! $errors->first('app_generation') !!}</span>@endif
          </td>
        </tr>

        <!-- app_individual -->
        <tr>
          <td class="title">IPアドレス追加 (1個あたり)<br />※最大合計3個</td>
          <td>
            <select name="app_individual" class="input-sm">
              <option value="">不要</option>
              @if ( isset($back['app_individual']) && $back['app_individual'] == 1 )
              <option value="1" selected="">1</option>
              @elseif ( old('app_individual') == 1 )
              <option value="1" selected="">1</option>
              @else
              <option value="1">1</option>
              @endif
              @if ( isset($back['app_individual']) && $back['app_individual'] == 2 )
              <option value="2" selected="">2</option>
              @elseif ( old('app_individual') == 2 )
              <option value="2" selected="">2</option>
              @else
              <option value="2">2</option>
              @endif
            </select>  個
          </td>
        </tr>

        <!-- app_plesk -->
        <tr>
          <td class="title">Plesk Web Pro Editionへの変更</td>
          <td>
            <select name="app_plesk">
              <option value="">不要</option>
              @if ( isset($back['app_plesk']) && $back['app_plesk'] == 1 )
              <option value="1" selected="">Plesk Web Pro Editionへグレードアップ</option>
              @elseif ( old('app_plesk') == 1 )
              <option value="1" selected="">Plesk Web Pro Editionへグレードアップ</option>
              @else
              <option value="1">Plesk Web Pro Editionへグレードアップ</option>
              @endif
            </select>
          </td>
        </tr>

        <!-- app_waf -->
        <tr>
          <td class="title">WAF追加</td>
          <td>
            <select name="app_waf">
              <option value="">不要</option>
              @if ( isset($back['app_waf']) && $back['app_waf'] == 1 )
              <option value="1" selected="">WAF追加</option>
              @elseif ( old('app_waf') == 1 )
              <option value="1" selected="">WAF追加</option>
              @else
              <option value="1">WAF追加</option>
              @endif
            </select>
          </td>
        </tr>
      </table>
      
      <!-- Domain transfer information -->
      <h3>ドメイン移管情報</h3>
       <table class="form-input">
        <!-- domain_transfe -->
        <tr>
          <td class="title"><span>※ </span>移管元事業者名</td>
          <td>
            @if ( isset($back['domain_transfe']) )
            <input type="text" name="domain_transfe" value="{{ $back['domain_transfe'] }}" />
            @else
            <input type="text" name="domain_transfe" value="{{ old('domain_transfe') }}" />
            @endif
            @if ($errors->first('domain_transfe'))<span class="error-input">{!! $errors->first('domain_transfe') !!}</span>@endif
          </td>
        </tr>

        <!-- domain_owner -->
        <tr>
          <td class="title"><span>※ </span>ドメイン所有者</td>
          <td>
            @if ( isset($back['domain_owner']) )
            <input type="text" name="domain_owner" value="{{ $back['domain_owner'] }}" />
            @else
            <input type="text" name="domain_owner" value="{{ old('domain_owner') }}" />
            @endif
            @if ($errors->first('domain_owner'))<span class="error-input">{!! $errors->first('domain_owner') !!}</span>@endif
          </td>
        </tr>

        <!-- domain_transfer_work -->
        <tr>
          <td class="title"><span>※ </span>移管作業日</td>
          <td>
            <!-- domain_transfer_work_year -->
            <?php
            $yearNow = date('Y');
            $yearNext = $yearNow + 1;
            ?>
            <select name="domain_transfer_work_year" id="year" class="cls-year">
              @if ( isset($back['domain_transfer_work_year']) && $back['domain_transfer_work_year'] == $yearNow )
              <option value="{{ $yearNow }}" selected="">{{ $yearNow }}</option>
              @elseif ( old('domain_transfer_work_year') == $yearNow )
              <option value="{{ $yearNow }}" selected="">{{ $yearNow }}</option>
              @else
              <option value="{{ $yearNow }}" >{{ $yearNow }}</option>
              @endif
              @if ( isset($back['domain_transfer_work_year']) && $back['domain_transfer_work_year'] == $yearNext )
              <option value="{{ $yearNext }}" selected="">{{ $yearNext }}</option>
              @elseif ( old('domain_transfer_work_year') == $yearNext )
              <option value="{{ $yearNext }}" selected="">{{ $yearNext }}</option>
              @else
              <option value="{{ $yearNext }}">{{ $yearNext }}</option>
              @endif
            </select> 年
            <!-- domain_transfer_work_month -->
            <select name="domain_transfer_work_month" id="month" class="cls-date">
              @for ( $i = 1; $i <= 12; $i++ )
                @if ( isset($back['domain_transfer_work_month']) && $back['domain_transfer_work_month'] == $i )
                <option value="{{ Convert2Digit($i) }}" selected="">{{ Convert2Digit($i) }}</option>
                @elseif ( old('domain_transfer_work_month') == $i )
                <option value="{{ Convert2Digit($i) }}" selected="">{{ Convert2Digit($i) }}</option>
                @else
                <option value="{{ Convert2Digit($i) }}">{{ Convert2Digit($i) }}</option>
                @endif
              @endfor
            </select> 月
            <!-- domain_transfer_work_day -->
            <select name="domain_transfer_work_day" class="cls-date">
              @for ( $i = 1; $i <= 31; $i++ )
                @if ( isset($back['domain_transfer_work_day']) && $back['domain_transfer_work_day'] == Convert2Digit($i) )
                <option value="{{ Convert2Digit($i) }}" selected="">{{ Convert2Digit($i) }}</option>
                @elseif ( old('domain_transfer_work_day') == Convert2Digit($i) )
                <option value="{{ Convert2Digit($i) }}" selected="">{{ Convert2Digit($i) }}</option>
                @else
                <option value="{{ Convert2Digit($i) }}">{{ Convert2Digit($i) }}</option>
                @endif
              @endfor
              </select> 日
          </td>
        </tr>

        <!-- domain_authcode -->
        <tr>
          <td class="title"><span>※ </span>AuthCode</td>
          <td>
            @if ( isset($back['domain_authcode']) )
            <input type="text" name="domain_authcode" value="{{ $back['domain_authcode'] }}" />
            @else
            <input type="text" name="domain_authcode" value="{{ old('domain_authcode') }}" />
            @endif
            @if ($errors->first('domain_authcode'))<span class="error-input">{!! $errors->first('domain_authcode') !!}</span>@endif
          </td>
        </tr>

        <!-- domain_organization_name -->
        <tr>
          <td class="title"><span>※ </span>組織名（英語）</td>
          <td>
            @if ( isset($back['domain_organization_name']) )
            <input type="text" name="domain_organization_name" value="{{ $back['domain_organization_name'] }}" />
            @else
            <input type="text" name="domain_organization_name" value="{{ old('domain_organization_name') }}" />
            @endif
            @if ($errors->first('domain_organization_name'))<span class="error-input">{!! $errors->first('domain_organization_name') !!}</span>@endif
          </td>
        </tr>

        <!-- domain_owner_name -->
        <tr>
          <td class="title"><span>※ </span>所有者名</td>
          <td>
            @if ( isset($back['domain_owner_name']) )
            <input type="text" name="domain_owner_name" value="{{ $back['domain_owner_name'] }}" />
            @else
            <input type="text" name="domain_owner_name" value="{{ old('domain_owner_name') }}" />
            @endif
            @if ($errors->first('domain_owner_name'))<span class="error-input">{!! $errors->first('domain_owner_name') !!}</span>@endif
          </td>
        </tr>

        <!-- domain_department_name -->
        <tr>
          <td class="title"><span>※ </span>部署名</td>
          <td>
            @if ( isset($back['domain_department_name']) )
            <input type="text" name="domain_department_name" value="{{ $back['domain_department_name'] }}" />
            @else
            <input type="text" name="domain_department_name" value="{{ old('domain_department_name') }}" />
            @endif
            @if ($errors->first('domain_department_name'))<span class="error-input">{!! $errors->first('domain_department_name') !!}</span>@endif
          </td>
        </tr>

        <!-- domain_title -->
        <tr>
          <td class="title">役職名</td>
          <td>
            @if ( isset($back['domain_title']) )
            <input type="text" name="domain_title" value="{{ $back['domain_title'] }}" />
            @else
            <input type="text" name="domain_title" value="{{ old('domain_title') }}" />
            @endif
            @if ($errors->first('domain_title'))<span class="error-input">{!! $errors->first('domain_title') !!}</span>@endif
          </td>
        </tr>

        <!-- domain_youraddress_english -->
        <tr>
          <td class="title"><span>※ </span>ご住所（英語）</td>
          <td>
            @if ( isset($back['domain_youraddress_english']) )
            <input type="text" name="domain_youraddress_english" value="{{ $back['domain_youraddress_english'] }}" />
            @else
            <input type="text" name="domain_youraddress_english" value="{{ old('domain_youraddress_english') }}" />
            @endif
            @if ($errors->first('domain_youraddress_english'))<span class="error-input">{!! $errors->first('domain_youraddress_english') !!}</span>@endif
          </td>
        </tr>

        <!-- domain_phone -->
        <tr>
          <td class="title"><span>※ </span>電話番号（ハイフンを除く）</td>
          <td>
            @if ( isset($back['domain_phone']) )
            <input type="text" name="domain_phone" value="{{ $back['domain_phone'] }}" />
            @else
            <input type="text" name="domain_phone" value="{{ old('domain_phone') }}" />
            @endif
            @if ($errors->first('domain_phone'))<span class="error-input">{!! $errors->first('domain_phone') !!}</span>@endif
          </td>
        </tr>

        <!-- domain_fax -->
        <tr>
          <td class="title">FAX</td>
          <td>
            @if ( isset($back['domain_fax']) )
            <input type="text" name="domain_fax" value="{{ $back['domain_fax'] }}" />
            @else
            <input type="text" name="domain_fax" value="{{ old('domain_fax') }}" />
            @endif
            @if ($errors->first('domain_fax'))<span class="error-input">{!! $errors->first('domain_fax') !!}</span>@endif
          </td>
        </tr>

        <!-- domain_email -->
        <tr>
          <td class="title"><span>※ </span>メールアドレス</td>
          <td>
            @if ( isset($back['domain_email']) )
            <input type="text" name="domain_email" value="{{ $back['domain_email'] }}" />
            @else
            <input type="text" name="domain_email" value="{{ old('domain_email') }}" />
            @endif
            @if ($errors->first('domain_email'))<span class="error-input">{!! $errors->first('domain_email') !!}</span>@endif
          </td>
        </tr>
      </table>
      
      <!-- SSL registration information -->
      <h3>SSL登録情報</h3>
       <table class="form-input">
        <!-- ssl_common_name -->
        <tr>
          <td class="title"><span>※ </span>コモンネーム</td>
          <td>
            @if ( isset($back['ssl_common_name']) )
            <input type="text" name="ssl_common_name" value="{{ $back['ssl_common_name'] }}" />
            @else
            <input type="text" name="ssl_common_name" value="{{ old('ssl_common_name') }}" />
            @endif
            @if ($errors->first('ssl_common_name'))<span class="error-input">{!! $errors->first('ssl_common_name') !!}</span>@endif
          </td>
        </tr>

        <!-- ssl_organization_name_japan  -->
        <tr>
          <td class="title"><span>※ </span>組織名（日本語）</td>
          <td>
            @if ( isset($back['ssl_organization_name_japan']) )
            <input type="text" name="ssl_organization_name_japan" value="{{ $back['ssl_organization_name_japan'] }}" />
            @else
            <input type="text" name="ssl_organization_name_japan" value="{{ old('ssl_organization_name_japan') }}" />
            @endif
            @if ($errors->first('ssl_organization_name_japan'))<span class="error-input">{!! $errors->first('ssl_organization_name_japan') !!}</span>@endif
          </td>
        </tr>

        <!-- ssl_organization_name_english -->
        <tr>
          <td class="title"><span>※ </span>組織名（英語）</td>
          <td>
            @if ( isset($back['ssl_organization_name_english']) )
            <input type="text" name="ssl_organization_name_english" value="{{ $back['ssl_organization_name_english'] }}" />
            @else
            <input type="text" name="ssl_organization_name_english" value="{{ old('ssl_organization_name_english') }}" />
            @endif
            @if ($errors->first('ssl_organization_name_english'))<span class="error-input">{!! $errors->first('ssl_organization_name_english') !!}</span>@endif
          </td>
        </tr>

        <!-- ssl_county_name_japan -->
        <tr>
          <td class="title"><span>※ </span>都道府県・市区郡名（日本語）</td>
          <td>
            @if ( isset($back['ssl_county_name_japan']) )
            <input type="text" name="ssl_county_name_japan" value="{{ $back['ssl_county_name_japan'] }}" />
            @else
            <input type="text" name="ssl_county_name_japan" value="{{ old('ssl_county_name_japan') }}" />
            @endif
            @if ($errors->first('ssl_county_name_japan'))<span class="error-input">{!! $errors->first('ssl_county_name_japan') !!}</span>@endif
          </td>
        </tr>

        <!-- ssl_county_name_english -->
        <tr>
          <td class="title"><span>※ </span>都道府県・市区郡名（英語）</td>
          <td>
            @if ( isset($back['ssl_county_name_english']) )
            <input type="text" name="ssl_county_name_english" value="{{ $back['ssl_county_name_english'] }}" />
            @else
            <input type="text" name="ssl_county_name_english" value="{{ old('ssl_county_name_english') }}" />
            @endif
            @if ($errors->first('ssl_county_name_english'))<span class="error-input">{!! $errors->first('ssl_county_name_english') !!}</span>@endif
          </td>
        </tr>

        <!-- ssl_name_person -->
        <tr>
          <td class="title"><span>※ </span>担当者名</td>
          <td>
            @if ( isset($back['ssl_name_person']) )
            <input type="text" name="ssl_name_person" value="{{ $back['ssl_name_person'] }}" />
            @else
            <input type="text" name="ssl_name_person" value="{{ old('ssl_name_person') }}" />
            @endif
            @if ($errors->first('ssl_name_person'))<span class="error-input">{!! $errors->first('ssl_name_person') !!}</span>@endif
          </td>
        </tr>

        <!-- ssl_phone_number -->
        <tr>
          <td class="title"><span>※ </span>電話番号（ハイフンを除く）</td>
          <td>
            @if ( isset($back['ssl_phone_number']) )
            <input type="text" name="ssl_phone_number" value="{{ $back['ssl_phone_number'] }}" />
            @else
            <input type="text" name="ssl_phone_number" value="{{ old('ssl_phone_number') }}" />
            @endif
            @if ($errors->first('ssl_phone_number'))<span class="error-input">{!! $errors->first('ssl_phone_number') !!}</span>@endif
          </td>
        </tr>

        <!-- ssl_fax -->
        <tr>
          <td class="title">FAX</td>
          <td>
            @if ( isset($back['ssl_fax']) )
            <input type="text" name="ssl_fax" value="{{ $back['ssl_fax'] }}" />
            @else
            <input type="text" name="ssl_fax" value="{{ old('ssl_fax') }}" />
            @endif
            @if ($errors->first('ssl_fax'))<span class="error-input">{!! $errors->first('ssl_fax') !!}</span>@endif
          </td>
        </tr>

        <!-- ssl_email_address -->
        <tr>
          <td class="title">受信可能メールアドレス</td>
          <td>
            <div class="row-radio">
              <div class="input-radio">
                @if ( isset($back['ssl_email_address']) && $back['ssl_email_address'] == 1 )
                <input name="ssl_email_address" type="radio" value="1" checked="">
                @elseif ( old('type_message') == 1 )
                <input name="ssl_email_address" type="radio" value="1" checked="">
                @else
                <input name="ssl_email_address" type="radio" value="1">
                @endif
              </div>
              <div>
                admin@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください 
              </div>
            </div>
            <div class="row-radio">
              <div class="input-radio">
                @if ( isset($back['ssl_email_address']) && $back['ssl_email_address'] == 2 )
                <input name="ssl_email_address" type="radio" value="2" checked="">
                @elseif ( old('ssl_email_address') == 2 )
                <input name="ssl_email_address" type="radio" value="2" checked="">
                @else
                <input name="ssl_email_address" type="radio" value="2">
                @endif
              </div>
              <div>
                administrator@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください
              </div>
            </div>
            <div class="row-radio">
              <div class="input-radio">
                @if ( isset($back['ssl_email_address']) && $back['ssl_email_address'] == 3 )
                <input name="ssl_email_address" type="radio" value="3" checked="">
                @elseif ( old('ssl_email_address') == 3 )
                <input name="ssl_email_address" type="radio" value="3" checked="">
                @else
                <input name="ssl_email_address" type="radio" value="3">
                @endif
              </div>
              <div>
                hostmaster@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください
              </div>
            </div>
            <div class="row-radio">
              <div class="input-radio">
                @if ( isset($back['ssl_email_address']) && $back['ssl_email_address'] == 4 )
                <input name="ssl_email_address" type="radio" value="4" checked="">
                @elseif ( old('ssl_email_address') == 4 )
                <input name="ssl_email_address" type="radio" value="4" checked="">
                @else
                <input name="ssl_email_address" type="radio" value="4">
                @endif
              </div>
              <div>
                webmaster@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください
              </div>
            </div>
            <div class="row-radio">
              <div class="input-radio">
                @if ( isset($back['ssl_email_address']) && $back['ssl_email_address'] == 5 )
                <input name="ssl_email_address" type="radio" value="5" checked="">
                @elseif ( old('ssl_email_address') == 5 )
                <input name="ssl_email_address" type="radio" value="5" checked="">
                @else
                <input name="ssl_email_address" type="radio" value="5">
                @endif
              </div>
              <div>
                postmaster@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください 
              </div>
            </div>
            <div class="row-radio">
              <div class="input-radio">
                @if ( isset($back['ssl_email_address']) && $back['ssl_email_address'] == 6 )
                <input name="ssl_email_address" type="radio" value="6" checked="">
                @elseif ( old('ssl_email_address') == 6 )
                <input name="ssl_email_address" type="radio" value="6" checked="">
                @else
                <input name="ssl_email_address" type="radio" value="6">
                @endif
              </div>
              <div>
                未使用ドメインにつきお任せ  
              </div>
            </div>
            @if ($errors->first('ssl_email_address'))<span class="error-input">{!! $errors->first('ssl_email_address') !!}</span>@endif
          </td>
        </tr>
      </table>
      
      <!-- For policyholders -->
      <h3>ご契約者について</h3>
       <table class="form-input">
        <!-- policyholders_organization_name -->
        <tr>
          <td class="title"><span>※ </span>組織名</td>
          <td>
            @if ( isset($back['policyholders_organization_name']) )
            <input type="text" name="policyholders_organization_name" value="{{ $back['policyholders_organization_name'] }}" />
            @else
            <input type="text" name="policyholders_organization_name" value="{{ old('policyholders_organization_name') }}" />
            @endif
            @if ($errors->first('policyholders_organization_name'))<span class="error-input">{!! $errors->first('policyholders_organization_name') !!}</span>@endif
          </td>
        </tr>

        <!-- policyholders_representative_name -->
        <tr>
          <td class="title"><span>※ </span>代表者名</td>
          <td>
            @if ( isset($back['policyholders_representative_name']) )
            <input type="text" name="policyholders_representative_name" value="{{ $back['policyholders_representative_name'] }}" />
            @else
            <input type="text" name="policyholders_representative_name" value="{{ old('policyholders_representative_name') }}" />
            @endif
            @if ($errors->first('policyholders_representative_name'))<span class="error-input">{!! $errors->first('policyholders_representative_name') !!}</span>@endif
          </td>
        </tr>

        <!-- policyholders_title -->
        <tr>
          <td class="title">役職名</td>
          <td>
            @if ( isset($back['policyholders_title']) )
            <input type="text" name="policyholders_title" value="{{ $back['policyholders_title'] }}" />
            @else
            <input type="text" name="policyholders_title" value="{{ old('policyholders_title') }}" />
            @endif
            @if ($errors->first('policyholders_title'))<span class="error-input">{!! $errors->first('policyholders_title') !!}</span>@endif
          </td>
        </tr>

        <!-- policyholders_name -->
        <tr>
          <td class="title"><span>※ </span>氏名</td>
          <td>
            @if ( isset($back['policyholders_name']) )
            <input type="text" name="policyholders_name" value="{{ $back['policyholders_name'] }}" />
            @else
            <input type="text" name="policyholders_name" value="{{ old('policyholders_name') }}" />
            @endif
            @if ($errors->first('policyholders_name'))<span class="error-input">{!! $errors->first('policyholders_name') !!}</span>@endif
          </td>
        </tr>

        <!-- policyholders_location -->
        <tr>
          <td class="title">所在地</td>
          <td>
            @if ( isset($back['policyholders_location']) )
            <input type="text" name="policyholders_location" value="{{ $back['policyholders_location'] }}" />
            @else
            <input type="text" name="policyholders_location" value="{{ old('policyholders_location') }}" />
            @endif
            @if ($errors->first('policyholders_location'))<span class="error-input">{!! $errors->first('policyholders_location') !!}</span>@endif
          </td>
        </tr>
      </table>
      
      <!-- The person in charge -->
      <h3>ご担当者について</h3>
       <table class="form-input">
        <!-- person_organization_name -->
        <tr>
          <td class="title"><span>※ </span>組織名</td>
          <td>
            @if ( isset($back['person_organization_name']) )
            <input type="text" name="person_organization_name" value="{{ $back['person_organization_name'] }}" />
            @else
            <input type="text" name="person_organization_name" value="{{ old('person_organization_name') }}" />
            @endif
            @if ($errors->first('person_organization_name'))<span class="error-input">{!! $errors->first('person_organization_name') !!}</span>@endif
          </td>
        </tr>

        <!-- person_name -->
        <tr>
          <td class="title"><span>※ </span>氏名</td>
          <td>
            @if ( isset($back['person_name']) )
            <input type="text" name="person_name" value="{{ $back['person_name'] }}" />
            @else
            <input type="text" name="person_name" value="{{ old('person_name') }}" />
            @endif
            @if ($errors->first('person_name'))<span class="error-input">{!! $errors->first('person_name') !!}</span>@endif
          </td>
        </tr>

        <!-- person_department_name -->
        <tr>
          <td class="title"><span>※ </span>部署名</td>
          <td>
            @if ( isset($back['person_department_name']) )
            <input type="text" name="person_department_name" value="{{ $back['person_department_name'] }}" />
            @else
            <input type="text" name="person_department_name" value="{{ old('person_department_name') }}" />
            @endif
            @if ($errors->first('person_department_name'))<span class="error-input">{!! $errors->first('person_department_name') !!}</span>@endif
          </td>
        </tr>

        <!-- person_title -->
        <tr>
          <td class="title">役職名</td>
          <td>
            @if ( isset($back['person_title']) )
            <input type="text" name="person_title" value="{{ $back['person_title'] }}" />
            @else
            <input type="text" name="person_title" value="{{ old('person_title') }}" />
            @endif
            @if ($errors->first('person_title'))<span class="error-input">{!! $errors->first('person_title') !!}</span>@endif
          </td>
        </tr>

        <!-- person_your_address -->
        <tr>
          <td class="title"><span>※ </span>ご住所</td>
          <td>
             〒 
            @if ( isset($back['person_your_address_1']) )
            <input type="text" class="input-xs" name="person_your_address_1" value="{{ $back['person_your_address_1'] }}" />
            @else
            <input type="text" class="input-xs" name="person_your_address_1" value="{{ old('person_your_address_1') }}" />
            @endif
             住所 
            @if ( isset($back['person_your_address_2']) )
            <input type="text" name="person_your_address_2" value="{{ $back['person_your_address_2'] }}" style="width:400px!important;" />
            @else
            <input type="text" name="person_your_address_2" value="{{ old('person_your_address_2') }}" style="width:400px!important;" />
            @endif
            @if ($errors->first('person_your_address_1'))<span class="error-input">{!! $errors->first('person_your_address_1') !!}</span>@endif
            @if ($errors->first('person_your_address_2'))<span class="error-input">{!! $errors->first('person_your_address_2') !!}</span>@endif
          </td>
        </tr>

        <!-- person_tel -->
        <tr>
          <td class="title"><span>※ </span>連絡先TEL（ハイフンを除く）</td>
          <td>
            @if ( isset($back['person_tel']) )
            <input type="text" name="person_tel" value="{{ $back['person_tel'] }}" />
            @else
            <input type="text" name="person_tel" value="{{ old('person_tel') }}" />
            @endif
            @if ($errors->first('person_tel'))<span class="error-input">{!! $errors->first('person_tel') !!}</span>@endif
          </td>
        </tr>

        <!-- person_fax -->
        <tr>
          <td class="title">連絡先FAX</td>
          <td>
            @if ( isset($back['person_fax']) )
            <input type="text" name="person_fax" value="{{ $back['person_fax'] }}" />
            @else
            <input type="text" name="person_fax" value="{{ old('person_fax') }}" />
            @endif
            @if ($errors->first('person_fax'))<span class="error-input">{!! $errors->first('person_fax') !!}</span>@endif
          </td>
        </tr>

        <!-- person_email -->
        <tr>
          <td class="title"><span>※ </span>連絡先メールアドレス</td>
          <td>
            @if ( isset($back['person_email']) )
            <input type="text" name="person_email" value="{{ $back['person_email'] }}" />
            @else
            <input type="text" name="person_email" value="{{ old('person_email') }}" />
            @endif
            @if ($errors->first('person_email'))<span class="error-input">{!! $errors->first('person_email') !!}</span>@endif
          </td>
        </tr>
      </table>
      
      <!-- Remarks -->
      <h3>備考</h3>
       <table class="form-input">
        <tr>
          <td class="title">備考</td>
          <td>
            @if ( isset($back['remarks']) )
            <input type="text" name="remarks" value="{{ $back['remarks'] }}" />
            @else
            <input type="text" name="remarks" value="{{ old('remarks') }}" />
            @endif
            @if ($errors->first('remarks'))<span class="error-input">{!! $errors->first('remarks') !!}</span>@endif
          </td>
        </tr>
      </table>
      <div class="box-submit">
        <input value="送信" type="submit" class="bt-submit" name="save" />
      <div>
    </div>
    </form>
    <!-- end form -->
  </div>
</section>

<!-- End content --> 
@endsection