
@extends('frontend.frontend')

@section('content')
<!--Content -->
<section class="order-child clear" id="contact">
  <div class="container">
  	<h1 class="title-content"><img src="{{ asset('') }}public/frontend/image/order/title-new-jp.png" alt="" /></h1>
    <div class="content">
    {!! Form::open(array('route' => ['frontend.order.new_jp_regist', 'method' => 'post', 'enctype'=>'multipart/form-data', 'accept-charset'=>'utf-8'])) !!}
      <div class="text-message">※ は必須項目です。</div>
      <h3>お申込みサーバー情報</h3>
      <table class="form-input">
        <tr>
          <td class="title"><span>※ </span>お申込みプラン名</td>
          <td>
              <select name="plan">
                <option value="おてがるプラン" @if(old('plan') == 'おてがるプラン') selected="" @endif >おてがるプラン</option>
                <option value="しっかりプラン" @if(old('plan') == 'しっかりプラン') selected="" @endif >しっかりプラン</option>
              </select>
              @if ($errors->first('plan'))<span class="error-input">{!! $errors->first('plan') !!}</span>@endif</td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>ドメイン名</td>
          <td><input type="text" name="domain" value="{{old('domain')}}" />
          @if ($errors->first('domain'))<span class="error-input">{!! $errors->first('domain') !!}</span>@endif</td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>サービス開始希望日</td>
          <td>
            <div>
              <input type="radio" name="service" value="1" @if(old('service') == 1) checked="" @endif /> 希望なし（お申込みの翌営業日より2～3営業日目にサービス開始） 
            </div>
            <div>
              <input type="radio" name="service" value="2" @if(old('service') == 2) checked="" @endif /> 希望あり
            </div>
            @if ($errors->first('service'))<span class="error-input">{!! $errors->first('service') !!}</span>@endif
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>お支払い方法</td>
          <td>
            <select class="input-xs" name="paymonth">
              <option value="月払い" @if(old('paymonth') == '月払い') selected="" @endif >月払い</option>
              <option value="年払い" @if(old('paymonth') == '年払い') selected="" @endif >年払い</option>
            </select>
            <select class="input-sm" name="payinvoice">
            <option value="請求書払い（振込手数料はお客様負担）" @if(old('payinvoice') == '請求書払い（振込手数料はお客様負担）') selected="" @endif >請求書払い（振込手数料はお客様負担）</option>
              <option value="クレジットカード払い" @if(old('payinvoice') == 'クレジットカード払い') selected="" @endif >クレジットカード払い</option>
            </select>
          </td>
        </tr>
        <tr>
          <td class="title">オプション</td>
          <td><input type="text" name="option" value="{{old('option')}}" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>外部バックアップ世代数追加<br />（1世代あたり）</td>
          <td>
            <select name="generation" class="input-sm" >
                <option value="">不要</option>
                <option value="1" @if(old('generation') == 1) selected="" @endif>1</option>
                <option value="2" @if(old('generation') == 2) selected="" @endif>2</option>
                <option value="3" @if(old('generation') == 3) selected="" @endif>3</option>
                <option value="4" @if(old('generation') == 4) selected="" @endif>4</option>
                <option value="5" @if(old('generation') == 5) selected="" @endif>5</option>
                <option value="6" @if(old('generation') == 6) selected="" @endif>6</option>
                <option value="7" @if(old('generation') == 7) selected="" @endif>7</option>
                <option value="8" @if(old('generation') == 8) selected="" @endif>8</option>
                <option value="9" @if(old('generation') == 9) selected="" @endif>9</option>
                <option value="10" @if(old('generation') == 10) selected="" @endif>10</option>
            </select> 世代
            @if ($errors->first('generation'))<span class="error-input">{!! $errors->first('generation') !!}</span>@endif
          </td>
        </tr>
        <tr>
          <td class="title">IPアドレス追加 (1個あたり)<br />※最大合計3個</td>
          <td>
            <select name="individual" class="input-sm">
              <option value="">不要</option>
              <option value="1" @if(old('individual') == 1 ) selected="" @endif >1</option>
              <option value="2" @if(old('individual') == 2 ) selected="" @endif >2</option>
            </select>  個
            @if ($errors->first('individual'))<span class="error-input">{!! $errors->first('individual') !!}</span>@endif
          </td>
        </tr>
        <tr>
          <td class="title">Plesk Web Pro Editionへの変更</td>
          <td>
            <select name="plesk">
            <option value="" @if(old('plesk') == '') selected="" @endif>不要</option>
              <option value="Plesk Web Pro Editionへグレードアップ" @if(old('plesk') == 'Plesk Web Pro Editionへグレードアップ') selected="" @endif >Plesk Web Pro Editionへグレードアップ</option>
            </select>
          </td>
        </tr>
        <tr>
          <td class="title">WAF追加</td>
          <td>
            <select name="waf">
              <option value="" @if(old('waf') == '') selected="" @endif >不要</option>
              <option value="WAF追加" @if(old('waf') == 'WAF追加') selected="" @endif>WAF追加</option>
            </select>
            @if ($errors->first('waf'))<span class="error-input">{!! $errors->first('waf') !!}</span>@endif
          </td>
        </tr>
      </table>
      
      <h3>ドメイン登録情報</h3>
       <table class="form-input">
        <tr>
          <td class="title"><span>※ </span>組織名（日本語）</td>
          <td><input type="text" name="dns_organization_jp" value="{{old('dns_organization_jp')}}" />
          @if ($errors->first('dns_organization_jp'))<span class="error-input">{!! $errors->first('dns_organization_jp') !!}</span>@endif</td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>組織名（英語）</td>
          <td><input type="text" name="dns_organization_en" value="{{old('dns_organization_en')}}" />
          @if ($errors->first('dns_organization_en'))<span class="error-input">{!! $errors->first('dns_organization_en') !!}</span>@endif</td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>登録担当者名</td>
          <td><input type="text" name="dns_owner_name" value="{{old('dns_owner_name')}}" />
          @if ($errors->first('dns_owner_name'))<span class="error-input">{!! $errors->first('dns_owner_name') !!}</span>@endif</td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>部署名</td>
          <td><input type="text" name="dns_dept_name" value="{{old('dns_dept_name')}}" />
          @if ($errors->first('dns_dept_name'))<span class="error-input">{!! $errors->first('dns_dept_name') !!}</span>@endif</td>
        </tr>
        <tr>
          <td class="title">役職名</td>
          <td><input type="text" name="dns_title" value="{{old('dns_titles')}}" />
          @if ($errors->first('dns_titles'))<span class="error-input">{!! $errors->first('dns_titles') !!}</span>@endif</td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>ご住所（日本語）</td>
          <td><input type="text" name="dns_addrs_jp" value="{{old('dns_addrs_jp')}}" />
          @if ($errors->first('dns_addrs_jp'))<span class="error-input">{!! $errors->first('dns_addrs_jp') !!}</span>@endif</td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>ご住所（英語）</td>
          <td><input type="text" name="dns_addrs_en" value="{{old('dns_addrs_en')}}" />
          @if ($errors->first('dns_addrs_en'))<span class="error-input">{!! $errors->first('dns_addrs_en') !!}</span>@endif</td>
        </tr>
        <tr>
          <td class="title">FAX</td>
          <td><input type="text" name="dns_fax" value="{{old('dns_fax')}}" />
          @if ($errors->first('dns_fax'))<span class="error-input">{!! $errors->first('dns_fax') !!}</span>@endif</td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>メールアドレス</td>
          <td><input type="text" name="dns_email_addrs" value="{{old('dns_email_addrs')}}" />
          @if ($errors->first('dns_email_addrs'))<span class="error-input">{!! $errors->first('dns_email_addrs') !!}</span>@endif</td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>公開連絡先</td>
          <td>
            <div>
              <input type="radio" name="public_contact" value="チロロネットを窓口として公開する" @if(old('dns_server') == 'チロロネットを窓口として公開する') checked="" @endif /> チロロネットを窓口として公開する 
            </div>
            <div>
              <input type="radio" name="public_contact" value="上記ドメイン登録者を窓口として公開する" @if(old('dns_server') == '上記ドメイン登録者を窓口として公開する') checked="" @endif /> 上記ドメイン登録者を窓口として公開する
            </div>
            <div>
              <input type="radio" name="public_contact" value="ご契約ご担当者を窓口として公開する"  @if(old('dns_server') == 'ご契約ご担当者を窓口として公開する') checked="" @endif /> ご契約ご担当者を窓口として公開する
            </div>
            @if ($errors->first('public_contact'))<span class="error-input">{!! $errors->first('public_contact') !!}</span>@endif
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>DNSサーバー</td>
          <td>
            <div>
              <input type="radio" name="dns_server" value="チロロネットのDNSを利用する" @if(old('dns_server') == 'チロロネットのDNSを利用する') checked="" @endif  /> チロロネットのDNSを利用する
            </div>
            <div>
              <input type="radio" name="dns_server" value="以下のDNSサーバーを利用する" @if(old('dns_server') == '以下のDNSサーバーを利用する') checked="" @endif /> 以下のDNSサーバーを利用する
            </div>
            @if ($errors->first('dns_server'))<span class="error-input">{!! $errors->first('dns_server') !!}</span>@endif
          </td>
        </tr>
      </table>
      
      <h3>SSL登録情報</h3>
       <table class="form-input">
        <tr>
          <td class="title"><span>※ </span>コモンネーム</td>
          <td><input type="text" name="common_name"  value="{{old('common_name')}}" />
          @if ($errors->first('common_name'))<span class="error-input">{!! $errors->first('common_name') !!}</span>@endif</td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>組織名（日本語）</td>
          <td>
             <input type="text" name="organization_name_jp" value="{{old('organization_name_jp')}}" />
             @if ($errors->first('organization_name_jp'))<span class="error-input">{!! $errors->first('organization_name_jp') !!}</span>@endif
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>組織名（英語）</td>
          <td>
             <input type="text" name="organization_name_en" value="{{old('organization_name_en')}}" />
             @if ($errors->first('organization_name_en'))<span class="error-input">{!! $errors->first('organization_name_en') !!}</span>@endif
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>都道府県・市区郡名（日本語）</td>
          <td>
             <input type="text" name="prefectures_jp" value="{{old('prefectures_jp')}}" />
              @if ($errors->first('prefectures_jp'))<span class="error-input">{!! $errors->first('prefectures_jp') !!}</span>@endif
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>都道府県・市区郡名（英語）</td>
          <td>
             <input type="text" name="prefectures_en" value="{{old('prefectures_en')}}" />
             @if ($errors->first('prefectures_en'))<span class="error-input">{!! $errors->first('prefectures_en') !!}</span>@endif
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>担当者名</td>
          <td>
             <input type="text" name="name_person_charge" value="{{old('name_person_charge')}}" />
             @if ($errors->first('name_person_charge'))<span class="error-input">{!! $errors->first('name_person_charge') !!}</span>@endif
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>電話番号</td>
          <td>
             <input type="text" name="phone_number" value="{{old('phone_number')}}" />
             @if ($errors->first('name_person_charge'))<span class="error-input">{!! $errors->first('name_person_charge') !!}</span>@endif
          </td>
        </tr>
        <tr>
          <td class="title">FAX</td>
          <td>
             <input type="text" name="ssl_fax" value="{{old('ssl_fax')}}" />
             @if ($errors->first('ssl_fax'))<span class="error-input">{!! $errors->first('ssl_fax') !!}</span>@endif
          </td>
        </tr>
        <tr>
          <td class="title">受信可能メールアドレス</td>
          <?php $ssl_mail_arr = array(
        '1' => '
admin@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください',
        '2' => 'administrator@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください',
        '3' => 'hostmaster@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください',
        '4' => 'webmaster@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください',
        '5' => 'postmaster@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください',
        '6' => '未使用ドメインにつきお任せ'
      );?>

          <td>
            <div class="row-radio">
              <div class="input-radio">
                <input name="receive_mail_addrs" type="radio" value="<?php echo $ssl_mail_arr[1];?>" @if(old('receive_mail_addrs') == $ssl_mail_arr[1]) checked="" @endif >
              </div>
              <div>
                admin@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください 
              </div>
            </div>
            <div class="row-radio">
              <div class="input-radio">
                <input name="receive_mail_addrs" type="radio" value="<?php echo $ssl_mail_arr[2];?>" @if(old('receive_mail_addrs') == $ssl_mail_arr[2]) checked="" @endif>
              </div>
              <div>
                administrator@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください
              </div>
            </div>
            <div class="row-radio">
              <div class="input-radio">
                <input name="receive_mail_addrs" type="radio" value="<?php echo $ssl_mail_arr[3];?>" @if(old('receive_mail_addrs') == $ssl_mail_arr[3]) checked="" @endif >
              </div>
              <div>
                hostmaster@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください
              </div>
            </div>
            <div class="row-radio">
              <div class="input-radio">
                <input name="receive_mail_addrs" type="radio" value="<?php echo $ssl_mail_arr[4];?>" @if(old('receive_mail_addrs') == $ssl_mail_arr[4]) checked="" @endif >
              </div>
              <div>
                webmaster@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください
              </div>
            </div>
            <div class="row-radio">
              <div class="input-radio">
                <input name="receive_mail_addrs" type="radio" value="<?php echo $ssl_mail_arr[5];?>" @if(old('receive_mail_addrs') == $ssl_mail_arr[5]) checked="" @endif >
              </div>
              <div>
                postmaster@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください 
              </div>
            </div>
            <div class="row-radio">
              <div class="input-radio">
                <input name="receive_mail_addrs" type="radio" value="<?php echo $ssl_mail_arr[6];?>" @if(old('receive_mail_addrs') == $ssl_mail_arr[6]) checked="" @endif >
              </div>
              <div>
                未使用ドメインにつきお任せ  
              </div>
            </div>
            @if ($errors->first('receive_mail_addrs'))<span class="error-input">{!! $errors->first('receive_mail_addrs') !!}</span>@endif
          </td>
        </tr>
      </table>
      
      <h3>ご契約者について</h3>
       <table class="form-input">
      
        <tr>
          <td class="title"><span>※ </span>ご契約者情報</td>
          <td>
            <div>
              <input type="radio" id="contract_disallow" name="policy_contract_info" value="ドメイン登録情報と同一" @if(old('policy_contract_info') == 'ドメイン登録情報と同一') checked="" @else checked="" @endif /> ドメイン登録情報と同一 
            </div>
            <div>
              <input type="radio" id="contract_allow" name="policy_contract_info" value="以下に入力"  @if(old('policy_contract_info') == '以下に入力') checked="" @endif /> 以下に入力 
            </div>
            @if ($errors->first('policy_contract_info'))<span class="error-input">{!! $errors->first('policy_contract_info') !!}</span>@endif
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>組織名</td>
          <td><input type="text" name="policy_organization_name" value="{{old('policy_organization_name')}}" class="contract-status" />
          @if ($errors->first('policy_organization_name'))<span class="error-input">{!! $errors->first('policy_organization_name') !!}</span>@endif</td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>代表者名</td>
          <td>
             <input type="text" name="policy_representative_name" value="{{old('policy_representative_name')}}" class="contract-status"/>
             @if ($errors->first('policy_representative_name'))<span class="error-input">{!! $errors->first('policy_representative_name') !!}</span>@endif
          </td>
        </tr>
        <tr>
          <td class="title">役職名</td>
          <td>
             <input type="text" name="policy_title" value="{{old('policy_title')}}" class="contract-status"/>
             @if ($errors->first('policy_title'))<span class="error-input">{!! $errors->first('policy_title') !!}</span>@endif
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>氏名</td>
          <td>
             <input type="text" name="policy_name" value="{{old('policy_name')}}" class="contract-status"/>
             @if ($errors->first('policy_name'))<span class="error-input">{!! $errors->first('policy_name') !!}</span>@endif
          </td>
        </tr>
        <tr>
          <td class="title">所在地</td>
          <td>
             <input type="text" name="location" value="{{old('location')}}" class="contract-status"/>
             @if ($errors->first('location'))<span class="error-input">{!! $errors->first('location') !!}</span>@endif
          </td>
        </tr>
      </table>
      
      <h3>ご担当者について</h3>
       <table class="form-input">
          <tr>
          <td class="title"><span>※ </span>ご担当者情報</td>
          <td>
            <div>
              <input type="radio" id="person_disallow" name="person_charge_info" value="ドメイン登録情報と同一" @if(old('person_charge_info') == 'ドメイン登録情報と同一') checked="" @else checked="" @endif /> ドメイン登録情報と同一
            </div>
            <div>
              <input type="radio" id="person_allow" name="person_charge_info" value="以下に入力" @if(old('person_charge_info') == '以下に入力') checked="" @endif /> 以下に入力
            </div>
            @if ($errors->first('person_charge_info'))<span class="error-input">{!! $errors->first('person_charge_info') !!}</span>@endif
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>組織名</td>
          <td><input type="text" name="person_charge_organization_name" value="{{old('person_charge_organization_name')}}" class="person-status" />
             @if ($errors->first('person_charge_organization_name'))<span class="error-input">{!! $errors->first('person_charge_organization_name') !!}</span>@endif
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>氏名</td>
          <td>
             <input type="text" name="person_charge_name" value="{{old('person_charge_name')}}" class="person-status"/>
             @if ($errors->first('person_charge_name'))<span class="error-input">{!! $errors->first('person_charge_name') !!}</span>@endif
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>部署名</td>
          <td>
             <input type="text" name="person_charge_dept_name" value="{{old('person_charge_dept_name')}}" class="person-status"/>
             @if ($errors->first('person_charge_dept_name'))<span class="error-input">{!! $errors->first('person_charge_dept_name') !!}</span>@endif
          </td>
        </tr>
        <tr>
          <td class="title">役職名</td>
          <td>
             <input type="text" name="person_charge_title" value="{{old('person_charge_title')}}" class="person-status"/>
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>ご住所</td>
          <td>
             〒 <input type="text" name="person_charge_zipcode" value="{{old('person_charge_zipcode')}}" class="input-xs person-status"/>
             住所 <input name="person_charge_your_addrs" value="{{old('person_charge_your_addrs')}}" type="text" style="width:400px!important;" class="person-status">
             @if ($errors->first('person_charge_zipcode'))<span class="error-input">{!! $errors->first('person_charge_zipcode') !!}</span>@endif
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>連絡先TEL</td>
          <td>
             <input type="text" name="person_charge_tel" value="{{old('person_charge_tel')}}" />
             @if ($errors->first('person_charge_tel'))<span class="error-input">{!! $errors->first('person_charge_tel') !!}</span>@endif
          </td>
        </tr>
        <tr>
          <td class="title">連絡先FAX</td>
          <td>
             <input type="text" name="person_charge_fax" value="{{old('person_charge_fax')}}" />
             @if ($errors->first('person_charge_fax'))<span class="error-input">{!! $errors->first('person_charge_fax') !!}</span>@endif
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>連絡先メールアドレス</td>
          <td>
             <input type="text" name="person_charge_email_addrs" value="{{old('person_charge_email_addrs')}}" />
             @if ($errors->first('person_charge_email_addrs'))<span class="error-input">{!! $errors->first('person_charge_email_addrs') !!}</span>@endif
          </td>
        </tr>
      </table>
      
      <h3>備考</h3>
       <table class="form-input">
        <tr>
          <td class="title">備考</td>
          <td><input type="text" name="remark" value="{{old('remark')}}" /></td>
        </tr>
      </table>
      <div class="box-submit">
        <input value="送信" type="submit" class="bt-submit"/>
      <div>
    {!! Form::close() !!}
    </div>
  </div>
</section>

<script  type="text/javascript">
$( document ).ready(function() {

//Check radio group
    if($('#contract_allow').is(':checked')){
       $('input.contract-status').attr('disabled', false);
    }else{
       $('input.contract-status').attr('disabled', true);
    }

    if($('#person_allow').is(':checked')){
       $('input.person-status').attr('disabled', false);
    }else{
       $('input.person-status').attr('disabled', true);
    }

});

$('#contract_allow').click(function(event) {
    $('input.contract-status').attr('disabled', false);
  });

$('#contract_disallow').click(function(event) {
  $('input.contract-status').attr('disabled', true);
});

$('#person_allow').click(function(event) {
    $('input.person-status').attr('disabled', false);
  });

$('#person_disallow').click(function(event) {
  $('input.person-status').attr('disabled', true);
});


</script>
<!-- End content -->
@endsection