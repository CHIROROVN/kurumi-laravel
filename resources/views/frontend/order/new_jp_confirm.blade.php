@extends('frontend.frontend')

@section('content')
<!--Content -->
<section class="order-child clear" id="contact">
  <div class="container">
    <h1 class="title-content"><img src="{{ asset('') }}public/frontend/image/order/title-new-jp.png" alt="" /></h1>
    <div class="content">
          <ul class="breadcrum-step">
        <li><a href="" title=""><img src="{{ asset('') }}public/frontend/image/order/text1-normal-frame02.png" alt="" /></a></li>
        <li><a href="" title=""><img src="{{ asset('') }}public/frontend/image/order/text2-frame02.png" alt="" /></a></li>
        <li><a href="" title=""><img src="{{ asset('') }}public/frontend/image/order/text3-normal-frame02.png" alt="" /></a></li>
      </ul>
      <div class="text-message">&nbsp;&nbsp;&nbsp;</div>
      <h3>お申込みサーバー情報</h3>
      <table class="form-input">
        <tr>
          <td class="title"><span></span>お申込みプラン名</td>
          <td>
              {{$new_jp->plan}}
          </td>
        </tr>
        <tr>
          <td class="title"><span></span>ドメイン名</td>
          <td>{{$new_jp->domain}}</td>
        </tr>
        <tr>
          <td class="title"><span></span>サービス開始希望日</td>
          <td>
            {{$new_jp->service}}
          </td>
        </tr>
        
        <tr>
          <td class="title"><span></span>お支払い方法</td>
          <td>
            {{$new_jp->paymonth}} {{$new_jp->payinvoice}}
          </td>
        </tr>
        <tr>
          <td class="title">オプション</td>
          <td>{{$new_jp->option}}</td>
        </tr>
        <tr>
          <td class="title"><span></span>外部バックアップ世代数追加<br />（1世代あたり）</td>
          <td>
            {{$new_jp->generation}} 世代
          </td>
        </tr>
        <tr>
          <td class="title">IPアドレス追加 (1個あたり)<br />※最大合計3個</td>
          <td>
            {{$new_jp->individual}}  個
          </td>
        </tr>
        <tr>
          <td class="title">Plesk Web Pro Editionへの変更</td>
          <td>
            {{$new_jp->plesk}}
          </td>
        </tr>
        <tr>
          <td class="title">WAF追加</td>
          <td>
            {{$new_jp->waf}}
          </td>
        </tr>
      </table>
      
      <h3>ドメイン登録情報</h3>
       <table class="form-input">
        <tr>
          <td class="title"><span></span>組織名（日本語）</td>
          <td>{{$new_jp->dns_organization_jp}}</td>
        </tr>
        <tr>
          <td class="title"><span></span>組織名（英語）</td>
          <td>{{$new_jp->dns_organization_en}}</td>
        </tr>
        <tr>
          <td class="title"><span></span>登録担当者名</td>
          <td>{{$new_jp->dns_owner_name}}</td>
        </tr>
        <tr>
          <td class="title"><span></span>部署名</td>
          <td>{{$new_jp->dns_dept_name}}</td>
        </tr>
        <tr>
          <td class="title">役職名</td>
          <td>{{$new_jp->dns_title}}</td>
        </tr>
        <tr>
          <td class="title"><span></span>ご住所（日本語）</td>
          <td>{{$new_jp->dns_addrs_jp}}</td>
        </tr>
        <tr>
          <td class="title"><span></span>ご住所（英語）</td>
          <td>{{$new_jp->dns_addrs_en}}</td>
        </tr>
        <tr>
          <td class="title">FAX</td>
          <td>{{$new_jp->dns_fax}}</td>
        </tr>
        <tr>
          <td class="title"><span></span>メールアドレス</td>
          <td>{{$new_jp->dns_email_addrs}}</td>
        </tr>
        <tr>
          <td class="title"><span></span>公開連絡先</td>
          <td>
            {{$new_jp->public_contact}}
          </td>
        </tr>
        <tr>
          <td class="title"><span></span>DNSサーバー</td>
          <td>
            @if($new_jp->dns_server == 1)
              チロロネットのDNSを利用する。
            @elseif($new_jp->dns_server == 2)
              @if(!empty($new_jp->dns_server_text3))
                {{$new_jp->dns_server_text3}} 
                @if(!empty($new_jp->dns_server_text4))<br />@endif
              @endif
              @if(!empty($new_jp->dns_server_text4))
                {{$new_jp->dns_server_text4}}
              @endif
            @endif
          </td>
        </tr>
      </table>
      
      <h3>SSL登録情報</h3>
       <table class="form-input">
        <tr>
          <td class="title"><span></span>コモンネーム</td>
          <td>{{$new_jp->common_name}}</td>
        </tr>
        <tr>
          <td class="title"><span></span>組織名（日本語）</td>
          <td>
             {{$new_jp->organization_name_jp}}
          </td>
        </tr>
        <tr>
          <td class="title"><span></span>組織名（英語）</td>
          <td>
             {{$new_jp->organization_name_en}}
          </td>
        </tr>
        <tr>
          <td class="title"><span></span>都道府県・市区郡名（日本語）</td>
          <td>
             {{$new_jp->prefectures_jp}}
          </td>
        </tr>
        <tr>
          <td class="title"><span></span>都道府県・市区郡名（英語）</td>
          <td>
             {{$new_jp->prefectures_en}}
          </td>
        </tr>
        <tr>
          <td class="title"><span></span>担当者名</td>
          <td>
             {{$new_jp->name_person_charge}}
          </td>
        </tr>
        <tr>
          <td class="title"><span></span>電話番号（ハイフンを除く）</td>
          <td>
             {{$new_jp->phone_number}}
          </td>
        </tr>
        <tr>
          <td class="title">FAX</td>
          <td>
             {{$new_jp->ssl_fax}}
          </td>
        </tr>
        <tr>
          <td class="title">受信可能メールアドレス</td>
          <td>
            {{$new_jp->receive_mail_addrs}}
          </td>
        </tr>
      </table>
      
      @if($new_jp->policy_contract_info == '以下に入力')
      <h3>ご契約者について</h3>
       <table class="form-input">
{{--         <tr>
          <td class="title"><span></span>ご契約者情報</td>
          <td>
            {{$new_jp->policy_contract_info}}
          </td>
        </tr> --}}
        <tr>
          <td class="title"><span></span>組織名</td>
          <td>{{$new_jp->policy_organization_name}}</td>
        </tr>
        <tr>
          <td class="title"><span></span>代表者名</td>
          <td>
             {{$new_jp->policy_representative_name}}
          </td>
        </tr>
        <tr>
          <td class="title">役職名</td>
          <td>
             {{$new_jp->policy_title}}
          </td>
        </tr>
        <tr>
          <td class="title"><span></span>氏名</td>
          <td>
             {{$new_jp->policy_name}}
          </td>
        </tr>
        <tr>
          <td class="title">所在地</td>
          <td>
             {{$new_jp->location}}
          </td>
        </tr>
      </table>
      @endif

      <h3>ご担当者について</h3>
       <table class="form-input">
       @if($new_jp->person_charge_info == '以下に入力')
{{--           <tr>
          <td class="title"><span></span>ご担当者情報</td>
          <td>
            {{$new_jp->person_charge_info}}
          </td>
        </tr> --}}
        <tr>
          <td class="title"><span></span>組織名</td>
          <td>{{$new_jp->person_charge_organization_name}}</td>
        </tr>
        <tr>
          <td class="title"><span></span>氏名</td>
          <td>
             {{$new_jp->person_charge_name}}
          </td>
        </tr>
        <tr>
          <td class="title"><span></span>部署名</td>
          <td>
             {{$new_jp->person_charge_dept_name}}
          </td>
        </tr>
        <tr>
          <td class="title">役職名</td>
          <td>
             {{$new_jp->person_charge_title}}
          </td>
        </tr>
        <tr>
          <td class="title"><span></span>ご住所</td>
          <td>
             〒 {{$new_jp->person_charge_zipcode}} <br />
             住所 {{$new_jp->person_charge_your_addrs}}
          </td>
        </tr>
        @endif
        <tr>
          <td class="title"><span></span>連絡先TEL（ハイフンを除く）</td>
          <td>
             {{$new_jp->person_charge_tel}}
          </td>
        </tr>
        <tr>
          <td class="title">連絡先FAX</td>
          <td>
             {{$new_jp->person_charge_fax}}
          </td>
        </tr>
        <tr>
          <td class="title"><span></span>連絡先メールアドレス</td>
          <td>
             {{$new_jp->person_charge_email_addrs}}
          </td>
        </tr>
      </table>
      
      <h3>備考</h3>
       <table class="form-input">
        <tr>
          <td class="title">備考</td>
          <td>{{$new_jp->remark}}</td>
        </tr>
      </table>
      <div class="box-submit">
        <input value="送信" type="button" class="bt-submit" onclick="location.href='{{route('frontend.order.new_jp_sent')}}'"/>
        <input value="戻る" type="button" class="btn-back" onclick="location.href='javascript:history.back()'" />
      <div>
    </div>
  </div>
</section>
<!-- End content -->
@endsection