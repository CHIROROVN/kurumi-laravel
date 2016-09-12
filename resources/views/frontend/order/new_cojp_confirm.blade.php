@extends('frontend.frontend')

@section('content')
<!--Content -->
<section class="order-child clear" id="contact">
  <div class="container">
  	<h1 class="title-content"><img src="../image/order/title-new-cojp.png" alt="" /></h1>
    <div class="content">
      <h3>お申込みサーバー情報</h3>
      <table class="form-input">
        <tr>
          <td class="title"><span> </span>お申込みプラン名</td>
          <td>
            {{$new_cojp->plan}}
          </td>
        </tr>
        <tr>
          <td class="title"><span> </span>ドメイン名</td>
          <td>{{$new_cojp->domain}}</td>
        </tr>
        <tr>
          <td class="title"><span> </span>サービス開始希望日</td>
          <td>
            {{$new_cojp->service}}
          </td>
        </tr>
        
        <tr>
          <td class="title"><span> </span>お支払い方法</td>
          <td>
          	{{$new_cojp->paymonth}} <br />
           {{$new_cojp->payinvoice}}
          </td>
        </tr>
        <tr>
          <td class="title">オプション</td>
          <td>{{$new_cojp->option}}</td>
        </tr>
        <tr>
          <td class="title"><span> </span>外部バックアップ世代数追加<br />（1世代あたり）</td>
          <td>
          	{{$new_cojp->generation}} 世代
          </td>
        </tr>
        <tr>
          <td class="title">IPアドレス追加 (1個あたり)<br />最大合計3個</td>
          <td>
          	{{$new_cojp->individual}} 個
          </td>
        </tr>
        <tr>
          <td class="title">Plesk Web Pro Editionへの変更</td>
          <td>
          	{{$new_cojp->plesk}}
          </td>
        </tr>
        <tr>
          <td class="title">WAF追加</td>
          <td>
            {{$new_cojp->waf}}
          </td>
        </tr>
      </table>
 	  
      
      <h3>ドメイン登録情報</h3>
       <table class="form-input">
        <tr>
          <td class="title"><span> </span>組織名（日本語）</td>
          <td>{{$new_cojp->organization_jp}}</td>
        </tr>
        <tr>
          <td class="title"><span> </span>組織名（ふりがな）</td>
          <td>{{$new_cojp->furigana}}</td>
        </tr>
        <tr>
          <td class="title"><span> </span>組織名（英語）</td>
          <td>{{$new_cojp->organization_en}}</td>
        </tr>
        <tr>
          <td class="title"><span> </span>郵便番号</td>
          <td>{{$new_cojp->postal_code}}</td>
        </tr>
        <tr>
          <td class="title"><span> </span>ご住所（日本語）</td>
          <td>{{$new_cojp->address_jp}}</td>
        </tr>
        <tr>
          <td class="title"><span> </span>ご住所（英語）</td>
          <td>{{$new_cojp->address_en}}</td>
        </tr>
        <tr>
          <td class="title"><span> </span>登記年月日</td>
          <td>{{$new_cojp->regist_date}}</td>
        </tr>
        <tr>
          <td class="title"><span> </span>登記地住所</td>
          <td>{{$new_cojp->regist_land_address}}</td>
        </tr>
        <tr>
          <td class="title"><span> </span>代表者名（日本語）</td>
          <td>{{$new_cojp->representative_jp}}</td>
        </tr><tr>
          <td class="title"><span> </span>代表者名（英語） </td>
          <td>{{$new_cojp->representative_en}}</td>
        </tr>
        <tr>
          <td class="title"><span> </span>代表者方肩書</td>
          <td>{{$new_cojp->representative_title}}</td>
        </tr>
        <tr>
          <td class="title"><span> </span>ドメイン登録担当者</td>
          <td>
            {{$new_cojp->domain_person_regist}}
          </td>
        </tr>
        <tr>
          <td class="title"><span> </span>ドメイン登録担当者氏名（日本語）</td>
          <td>{{$new_cojp->domain_person_jp}}</td>
        </tr>
        <tr>
          <td class="title"><span> </span>ドメイン登録担当者氏名（英語）</td>
          <td>{{$new_cojp->domain_person_en}}</td>
        </tr>
        <tr>
          <td class="title"><span> </span>会社名・組織名</td>
          <td>{{$new_cojp->company_name}}</td>
        </tr>
        <tr>
          <td class="title"><span> </span>ご住所</td>
          <td>{{$new_cojp->your_address}}</td>
        </tr>
        <tr>
          <td class="title"><span> </span>部署名</td>
          <td>{{$new_cojp->department}}</td>
        </tr>
        <tr>
          <td class="title"><span> </span>役職名</td>
          <td>{{$new_cojp->domain_title}}</td>
        </tr>
        <tr>
          <td class="title"><span> </span>電話番号</td>
          <td>{{$new_cojp->domain_phone}}</td>
        </tr>
        <tr>
          <td class="title">FAX</td>
          <td>{{$new_cojp->domain_fax}}</td>
        </tr>
        <tr>
          <td class="title"><span> </span>メールアドレス</td>
          <td>{{$new_cojp->domain_email}}</td>
        </tr>
        <tr>
          <td class="title"><span> </span>DNSサーバー</td>
          <td>
            {{$new_cojp->dns_server}}
          </td>
        </tr>
      </table>
      
      <h3>SSL登録情報</h3>
       <table class="form-input">
        <tr>
          <td class="title"><span> </span>コモンネーム</td>
          <td>{{$new_cojp->common_name}}</td>
        </tr>
        <tr>
          <td class="title"><span> </span>組織名（日本語）</td>
          <td>
          	 {{$new_cojp->organization_name_jp}}
          </td>
        </tr>
        <tr>
          <td class="title"><span> </span>組織名（英語）</td>
          <td>
          	 {{$new_cojp->organization_name_en}}
          </td>
        </tr>
        <tr>
          <td class="title"><span> </span>都道府県・市区郡名（日本語）</td>
          <td>
          	 {{$new_cojp->prefectures_jp}}
          </td>
        </tr>
        <tr>
          <td class="title"><span> </span>都道府県・市区郡名（英語）</td>
          <td>
          	 {{$new_cojp->prefectures_en}}
          </td>
        </tr>
        <tr>
          <td class="title"><span> </span>担当者名</td>
          <td>
          	 {{$new_cojp->name_person_charge}}
          </td>
        </tr>
        <tr>
          <td class="title"><span> </span>電話番号</td>
          <td>
          	 {{$new_cojp->phone_number}}
          </td>
        </tr>
        <tr>
          <td class="title">FAX</td>
          <td>
          	 {{$new_cojp->ssl_fax}}
          </td>
        </tr>
        <tr>
          <td class="title">受信可能メールアドレス</td>
          <td>
            {{$new_cojp->receive_mail_addrs}}
          </td>
        </tr>
      </table>
      
      <h3>ご契約者について</h3>
       <table class="form-input">
      
        <tr>
          <td class="title"><span> </span>ご契約者情報</td>
          <td>
            {{$new_cojp->policy_contract_info}}
          </td>
        </tr>
        <tr>
          <td class="title"><span> </span>組織名</td>
          <td>{{$new_cojp->policy_organization_name}}</td>
        </tr>
        <tr>
          <td class="title"><span> </span>代表者名</td>
          <td>
          	 {{$new_cojp->policy_representative_name}}
          </td>
        </tr>
        <tr>
          <td class="title">役職名</td>
          <td>
          	 {{$new_cojp->policy_title}}
          </td>
        </tr>
        <tr>
          <td class="title"><span> </span>氏名</td>
          <td>
          	 {{$new_cojp->policy_name}}
          </td>
        </tr>
        <tr>
          <td class="title">所在地</td>
          <td>
          	 {{$new_cojp->location}}
          </td>
        </tr>
      </table>
      
      <h3>ご担当者について</h3>
       <table class="form-input">
          <tr>
          <td class="title"><span> </span>ご担当者情報</td>
          <td>
            {{$new_cojp->person_charge_info}}
          </td>
        </tr>
        <tr>
          <td class="title"><span> </span>組織名</td>
          <td>{{$new_cojp->person_charge_organization_name}}</td>
        </tr>
        <tr>
          <td class="title"><span> </span>氏名</td>
          <td>
          	 {{$new_cojp->person_charge_name}}
          </td>
        </tr>
        <tr>
          <td class="title"><span> </span>部署名</td>
          <td>
          	 {{$new_cojp->person_charge_dept_name}}
          </td>
        </tr>
        <tr>
          <td class="title">役職名</td>
          <td>
          	 {{$new_cojp->person_charge_title}}
          </td>
        </tr>
        <tr>
          <td class="title"><span> </span>ご住所</td>
          <td>
          	 〒 {{$new_cojp->person_charge_zipcode}} <br />
             住所 {{$new_cojp->person_charge_your_addrs}}
          </td>
        </tr>
        <tr>
          <td class="title"><span> </span>連絡先TEL</td>
          <td>
          	 {{$new_cojp->person_charge_tel}}
          </td>
        </tr>
        <tr>
          <td class="title">連絡先FAX</td>
          <td>
          	 {{$new_cojp->person_charge_fax}}
          </td>
        </tr>
        <tr>
          <td class="title"><span> </span>連絡先メールアドレス</td>
          <td>
          	 {{$new_cojp->person_charge_email_addrs}}
          </td>
        </tr>
      </table>
      
      <h3>備考</h3>
       <table class="form-input">
        <tr>
          <td class="title">備考</td>
          <td>{{$new_cojp->remark}}</td>
        </tr>
      </table>
      <div class="box-submit">
        <input value="送信" type="button" class="bt-submit" onclick="location.href='{{route('frontend.order.new_cojp_sent')}}'" />
      <div>
    </div>
  </div>
</section>
<!-- End content -->
@endsection