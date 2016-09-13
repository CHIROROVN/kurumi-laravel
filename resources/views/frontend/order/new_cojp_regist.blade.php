@extends('frontend.frontend')

@section('content')
<!--Content -->
<section class="order-child clear" id="contact">
  <div class="container">
  <h1 class="title-content"><img src="{{ asset('') }}public/frontend/image/order/title-new-cojp.png" alt="" /></h1>
    <div class="content">
    {!! Form::open(array('route' => ['frontend.order.new_cojp_regist', 'method' => 'post', 'enctype'=>'multipart/form-data', 'accept-charset'=>'utf-8'])) !!}

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
          <div class="text-message">@if ($errors->first('plan')) ※{!! $errors->first('plan') !!} @endif</div></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>ドメイン名</td>
          <td><input type="text" name="domain" />
          <div class="text-message">@if ($errors->first('domain')) ※{!! $errors->first('domain') !!} @endif</div></td>
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
            <div class="text-message">@if ($errors->first('service')) ※{!! $errors->first('service') !!} @endif</div>

            <div style="margin-top:5px;">
              <select name="year" id="year" class="input-xs">
                <option value="2015" @if(old('year') == '2015') selected="" @endif >2015</option>
                <option value="2016" @if(old('year') == '2016') selected="" @endif >2016</option>
                <option value="2017" @if(old('year') == '2017') selected="" @endif >2017</option>
                <option value="2018" @if(old('year') == '2018') selected="" @endif >2018</option>
                <option value="2019" @if(old('year') == '2019') selected="" @endif >2019</option>

              </select> 年
              <select name="month" id="month" class="input-xs">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
              </select> 月
              <select name="days" class="input-xs">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select> 日
            </div>

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
          	<div class="text-message">@if ($errors->first('waf')) ※{!! $errors->first('waf') !!} @endif</div>
          </td>
        </tr>
      </table>
      
      <h3>ドメイン登録情報</h3>
       <table class="form-input">
        <tr>
          <td class="title"><span>※ </span>組織名（日本語）</td>
          <td><input type="text" name="organization_jp" value="{{old('organization_jp')}}" />
          <div class="text-message">@if ($errors->first('waf')) ※{!! $errors->first('waf') !!} @endif</div></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>組織名（ふりがな）</td>
          <td><input type="text" name="furigana" value="{{old('furigana')}}" />
          <div class="text-message">@if ($errors->first('furigana')) ※{!! $errors->first('furigana') !!} @endif</div></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>組織名（英語）</td>
          <td><input type="text" name="organization_en" value="{{old('organization_en')}}" />
          <div class="text-message">@if ($errors->first('organization_en')) ※{!! $errors->first('organization_en') !!} @endif</div></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>郵便番号</td>
          <td><input type="text" name="postal_code" value="{{old('postal_code')}}" />
          <div class="text-message">@if ($errors->first('postal_code')) ※{!! $errors->first('postal_code') !!} @endif</div></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>ご住所（日本語）</td>
          <td><input type="text" name="address_jp" value="{{old('address_jp')}}" />
          <div class="text-message">@if ($errors->first('address_jp')) ※{!! $errors->first('address_jp') !!} @endif</div></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>ご住所（英語）</td>
          <td><input type="text" name="address_en" value="{{old('address_en')}}" />
          <div class="text-message">@if ($errors->first('address_en')) ※{!! $errors->first('address_en') !!} @endif</div>
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>登記年月日</td>
          <td><input type="text" name="regist_date" value="{{old('regist_date')}}" />
          <div class="text-message">@if ($errors->first('regist_date')) ※{!! $errors->first('regist_date') !!} @endif</div></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>登記地住所</td>
          <td><input type="text" name="regist_land_address" value="{{old('regist_land_address')}}" />
          <div class="text-message">@if ($errors->first('regist_land_address')) ※{!! $errors->first('regist_land_address') !!} @endif</div></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>代表者名（日本語）</td>
          <td><input type="text" name="representative_jp" value="{{old('representative_jp')}}" />
			<div class="text-message">@if ($errors->first('representative_jp')) ※{!! $errors->first('representative_jp') !!} @endif </div>
          </td>
        </tr><tr>
          <td class="title"><span>※ </span>代表者名（英語） </td>
          <td><input type="text" name="representative_en" value="{{old('representative_en')}}" />
          <div class="text-message">@if ($errors->first('representative_en')) ※{!! $errors->first('representative_en') !!} @endif </div></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>代表者方肩書</td>
          <td><input type="text" name="representative_title" value="{{old('representative_title')}}" />
          <div class="text-message">@if ($errors->first('representative_title')) ※{!! $errors->first('representative_title') !!} @endif </div></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>ドメイン登録担当者</td>
          <td>
            <div>
              <input type="radio" name="domain_person_regist" value="上記登録者情報と同一"  @if(old('domain_person_regist') == '上記登録者情報と同一') checked="" @endif /> 上記登録者情報と同一 
            </div>
            <div>
              <input type="radio" name="domain_person_regist" value="以下に入力" @if(old('domain_person_regist') == '以下に入力') checked="" @endif /> 以下に入力 
            </div>
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>ドメイン登録担当者氏名（日本語）</td>
          <td><input type="text" name="domain_person_jp" value="{{old('domain_person_jp')}}" />
          <div class="text-message">@if ($errors->first('domain_person_jp')) ※{!! $errors->first('domain_person_jp') !!} @endif </div></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>ドメイン登録担当者氏名（英語）</td>
          <td><input type="text" name="domain_person_en" value="{{old('domain_person_en')}}" />
          <div class="text-message">@if ($errors->first('domain_person_en')) ※{!! $errors->first('domain_person_en') !!} @endif </div></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>会社名・組織名</td>
          <td><input type="text" name="company_name" value="{{old('company_name')}}" />
          <div class="text-message">@if ($errors->first('company_name')) ※{!! $errors->first('company_name') !!} @endif </div></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>ご住所</td>
          <td><input type="text" name="your_address" value="{{old('your_address')}}" />
          <div class="text-message">@if ($errors->first('your_address')) ※{!! $errors->first('your_address') !!} @endif </div></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>部署名</td>
          <td><input type="text" name="department" value="{{old('department')}}" />
          <div class="text-message">@if ($errors->first('department')) ※{!! $errors->first('department') !!} @endif </div></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>役職名</td>
          <td><input type="text" name="domain_title" value="{{old('domain_title')}}" />
          <div class="text-message">@if ($errors->first('domain_title')) ※{!! $errors->first('domain_title') !!} @endif </div></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>電話番号</td>
          <td><input type="text" name="domain_phone" value="{{old('domain_phone')}}" />
          <div class="text-message">@if ($errors->first('domain_phone')) ※{!! $errors->first('domain_phone') !!} @endif </div></td>
        </tr>
        <tr>
          <td class="title">FAX</td>
          <td><input type="text" name="domain_fax" value="{{old('domain_fax')}}" />
          <div class="text-message">@if ($errors->first('domain_title')) ※{!! $errors->first('domain_title') !!} @endif </div></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>メールアドレス</td>
          <td><input type="text" name="domain_email" value="{{old('domain_email')}}" />
          <div class="text-message">@if ($errors->first('domain_email')) ※{!! $errors->first('domain_email') !!} @endif </div>
          <div class="text-message">@if ($errors->first('domain_email')) ※{!! $errors->first('domain_email') !!} @endif </div></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>DNSサーバー</td>
          <td>
            <div>
              <input type="radio" name="dns_server" value="チロロネットのDNSを利用する"  @if(old('dns_server') == 'チロロネットのDNSを利用する') checked="" @endif /> チロロネットのDNSを利用する。 
            </div>
            <div>
              <input type="radio" name="dns_server" value="以下のDNSサーバーを利用する" @if(old('dns_server') == '以下のDNSサーバーを利用する') checked="" @endif /> 以下のDNSサーバーを利用する。 
            </div>

            <div class="mar-top10">
              <input type="radio" id="dns_server_chk1" value="1" name="dns_server" @if(old('dns_server') == '1') checked="" @endif />プライマリDNSサーバー
              <input type="text" name="dns_server_text1" class="input-smheight"　value="{{old('dns_server_text1')}}" />
            </div>
            <div class="mar-top10">
              <input type="radio" id="dns_server_chk2" value="2" name="dns_server" @if(old('dns_server') == '2') checked="" @endif /> セカンダリDNSサーバー
              <input type="text" name="dns_server_text2" class="input-smheight" value="{{old('dns_server_text2')}}" />
            </div>

            <div class="text-message">@if ($errors->first('dns_server')) ※{!! $errors->first('dns_server') !!} @endif </div>
          </td>
        </tr>
      </table>
      <h3>SSL登録情報</h3>
       <table class="form-input">
        <tr>
          <td class="title"><span>※ </span>コモンネーム</td>
          <td><input type="text" name="common_name"  value="{{old('common_name')}}" />
          <div class="text-message">@if ($errors->first('common_name')) ※{!! $errors->first('common_name') !!} @endif </div></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>組織名（日本語）</td>
          <td>
          	 <input type="text" name="organization_name_jp" value="{{old('organization_name_jp')}}" />
          	 <div class="text-message">@if ($errors->first('organization_name_jp')) ※{!! $errors->first('organization_name_jp') !!} @endif </div>
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>組織名（英語）</td>
          <td>
          	 <input type="text" name="organization_name_en" value="{{old('organization_name_en')}}" />
          	 <div class="text-message">@if ($errors->first('organization_name_en')) ※{!! $errors->first('organization_name_en') !!} @endif </div>
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>都道府県・市区郡名（日本語）</td>
          <td>
          	 <input type="text" name="prefectures_jp" value="{{old('prefectures_jp')}}" />
          	  <div class="text-message">@if ($errors->first('prefectures_jp')) ※{!! $errors->first('prefectures_jp') !!} @endif </div>
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>都道府県・市区郡名（英語）</td>
          <td>
          	 <input type="text" name="prefectures_en" value="{{old('prefectures_en')}}" />
          	 <div class="text-message">@if ($errors->first('prefectures_en')) ※{!! $errors->first('prefectures_en') !!} @endif </div>
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>担当者名</td>
          <td>
          	 <input type="text" name="name_person_charge" value="{{old('name_person_charge')}}" />
          	 <div class="text-message">@if ($errors->first('name_person_charge')) ※{!! $errors->first('name_person_charge') !!} @endif </div>
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>電話番号</td>
          <td>
          	 <input type="text" name="phone_number" />
          	 <div class="text-message">@if ($errors->first('phone_number')) ※{!! $errors->first('phone_number') !!} @endif </div>
          </td>
        </tr>
        <tr>
          <td class="title">FAX</td>
          <td>
          	 <input type="text" name="ssl_fax" value="{{old('ssl_fax')}}" />
          	 <div class="text-message">@if ($errors->first('ssl_fax')) ※{!! $errors->first('ssl_fax') !!} @endif </div>
          </td>
        </tr>
        <tr>
          <td class="title">受信可能メールアドレス</td>
          <td>
            <div class="row-radio">
              <div class="input-radio">
                <input name="receive_mail_addrs" type="radio" value="1" @if(old('receive_mail_addrs') == 1) checked="" @endif >
              </div>
              <div>
                admin@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください 
              </div>
            </div>
            <div class="row-radio">
              <div class="input-radio">
                <input name="receive_mail_addrs" type="radio" value="2" @if(old('receive_mail_addrs') == 2) checked="" @endif>
              </div>
              <div>
                administrator@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください
              </div>
            </div>
            <div class="row-radio">
              <div class="input-radio">
                <input name="receive_mail_addrs" type="radio" value="3" @if(old('receive_mail_addrs') == 3) checked="" @endif >
              </div>
              <div>
                hostmaster@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください
              </div>
            </div>
            <div class="row-radio">
              <div class="input-radio">
                <input name="receive_mail_addrs" type="radio" value="4" @if(old('receive_mail_addrs') == 4) checked="" @endif >
              </div>
              <div>
                webmaster@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください
              </div>
            </div>
            <div class="row-radio">
              <div class="input-radio">
                <input name="receive_mail_addrs" type="radio" value="5" @if(old('receive_mail_addrs') == 5) checked="" @endif >
              </div>
              <div>
                postmaster@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください 
              </div>
            </div>
            <div class="row-radio">
              <div class="input-radio">
                <input name="receive_mail_addrs" type="radio" value="6" @if(old('receive_mail_addrs') == 6) checked="" @endif >
              </div>
              <div>
                未使用ドメインにつきお任せ  
              </div>
            </div>
            <div class="text-message">@if ($errors->first('receive_mail_addrs')) ※{!! $errors->first('receive_mail_addrs') !!} @endif </div>
          </td>
        </tr>
      </table>
      
      <h3>ご契約者について</h3>
       <table class="form-input">
      
        <tr>
          <td class="title"><span>※ </span>ご契約者情報</td>
          <td>
            <div>
              <input type="radio" name="policy_contract_info" value="ドメイン登録情報と同一" @if(old('policy_contract_info') == 'ドメイン登録情報と同一') @endif /> ドメイン登録情報と同一 
            </div>
            <div>
              <input type="radio" name="policy_contract_info"  @if(old('policy_contract_info') == '以下に入力') checked="" @endif /> 以下に入力 
            </div>
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>組織名</td>
          <td><input type="text" name="policy_organization_name" value="{{old('policy_organization_name')}}" />
           <div class="text-message">@if ($errors->first('policy_organization_name')) ※{!! $errors->first('policy_organization_name') !!} @endif </div></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>代表者名</td>
          <td>
          	 <input type="text" name="policy_representative_name" value="{{old('policy_representative_name')}}" />
          	 <div class="text-message">@if ($errors->first('policy_representative_name')) ※{!! $errors->first('policy_representative_name') !!} @endif </div>
          </td>
        </tr>
        <tr>
          <td class="title">役職名</td>
          <td>
          	 <input type="text" name="policy_title" value="{{old('policy_title')}}" />
          	 <div class="text-message">@if ($errors->first('policy_title')) ※{!! $errors->first('policy_title') !!} @endif </div>
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>氏名</td>
          <td>
          	 <input type="text" name="policy_name" value="{{old('policy_name')}}" />
          	 <div class="text-message">@if ($errors->first('policy_name')) ※{!! $errors->first('policy_name') !!} @endif </div>
          </td>
        </tr>
        <tr>
          <td class="title">所在地</td>
          <td>
          	 <input type="text" name="location" value="{{old('location')}}" />
          	 <div class="text-message">@if ($errors->first('location')) ※{!! $errors->first('location') !!} @endif </div>
          </td>
        </tr>
      </table>
      
      <h3>ご担当者について</h3>
       <table class="form-input">
          <tr>
          <td class="title"><span>※ </span>ご担当者情報</td>
          <td>
            <div>
              <input type="radio" name="person_charge_info" value="ドメイン登録情報と同一" @if(old('person_charge_info') == 'ドメイン登録情報と同一') checked="" @endif /> ドメイン登録情報と同一
            </div>
            <div>
              <input type="radio" name="person_charge_info" value="以下に入力" @if(old('person_charge_info') == '以下に入力') checked="" @endif /> 以下に入力
            </div>
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>組織名</td>
          <td><input type="text" name="person_charge_organization_name" value="{{old('person_charge_organization_name')}}" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>氏名</td>
          <td>
          	 <input type="text" name="person_charge_name" value="{{old('person_charge_name')}}" />
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>部署名</td>
          <td>
          	 <input type="text" name="person_charge_dept_name" value="{{old('person_charge_dept_name')}}" />
          </td>
        </tr>
        <tr>
          <td class="title">役職名</td>
          <td>
          	 <input type="text" name="person_charge_title" value="{{old('person_charge_title')}}" />
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>ご住所</td>
          <td>
          	 〒 <input type="text" name="person_charge_zipcode" value="{{old('person_charge_zipcode')}}" class="input-xs"/>
             住所 <input name="person_charge_your_addrs" value="{{old('person_charge_your_addrs')}}" type="text" style="width:400px!important;">
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>連絡先TEL</td>
          <td>
          	 <input type="text" name="person_charge_tel" value="{{old('person_charge_tel')}}" />
          </td>
        </tr>
        <tr>
          <td class="title">連絡先FAX</td>
          <td>
          	 <input type="text" name="person_charge_fax" value="{{old('person_charge_fax')}}" />
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>連絡先メールアドレス</td>
          <td>
          	 <input type="text" name="person_charge_email_addrs" value="{{old('person_charge_email_addrs')}}" />
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
      </div>

      {!! Form::close() !!}
    </div>
  </div>
</section>
<!-- End content -->
@endsection