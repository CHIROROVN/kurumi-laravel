@extends('frontend.frontend')

@section('content')
<!--Content -->

<section class="order-child clear" id="contact">
  <div class="container">
    <h1 class="title-content"><img src="{{ asset('') }}public/frontend/image/order/title-com.png" alt="" /></h1>
    <div class="content">
      <ul class="breadcrum-step">
        <li><a href="" title=""><img src="{{ asset('') }}public/frontend/image/order/text1-normal-frame02.png" alt="" /></a></li>
        <li><a href="" title=""><img src="{{ asset('') }}public/frontend/image/order/text2-frame02.png" alt="" /></a></li>
        <li><a href="" title=""><img src="{{ asset('') }}public/frontend/image/order/text3-normal-frame02.png" alt="" /></a></li>
      </ul>
      <div class="text-message">&nbsp;&nbsp;&nbsp;</div>
      <h3>お申込みサーバー情報</h3>
      <table class="form-input">
      
        <!-- Application server information -->
        <!-- app_plan_name -->
        <tr>
          <td class="title">お申込みプラン名</td>
          <td>
            @if ( $confirmData['app_plan_name'] == 1 )
            おてがるプラン
            @else
            しっかりプラン
            @endif
          </td>
        </tr>

        <!-- app_domain_name -->
        <tr>
          <td class="title">ドメイン名</td>
          <td>{{ $confirmData['app_domain_name'] }}</td>
        </tr>

        <!-- app_service_start_date -->
        <tr>
          <td class="title">サービス開始希望日</td>
          <td>
            @if ( $confirmData['app_service_start_date'] == 1 )
            希望なし（お申込みの翌営業日より2～3営業日目にサービス開始）
            @else
            希望あり
            @endif
            <div>
          </td>
        </tr>
        
        <!-- app_payment_method -->
        <tr>
          <td class="title">お支払い方法</td>
          <td>
            @if ( $confirmData['app_payment_method_1'] == 1 )
            月払い
            @else
            年払い
            @endif
            @if ( $confirmData['app_payment_method_2'] == 1 )
            請求書払い（振込手数料はお客様負担）
            @else
            クレジットカード払い
            @endif
          </td>
        </tr>

        <!-- app_option -->
        <tr>
          <td class="title">オプション</td>
          <td>{{ $confirmData['app_option'] }}</td>
        </tr>

        <!-- app_generation -->
        <tr>
          <td class="title">外部バックアップ世代数追加<br />（1世代あたり）</td>
          <td>
            @if ( $confirmData['app_generation'] == 1 )
            1
            @elseif ( $confirmData['app_generation'] == 2 )
            2
            @elseif ( $confirmData['app_generation'] == 3 )
            3
            @elseif ( $confirmData['app_generation'] == 4 )
            4
            @elseif ( $confirmData['app_generation'] == 5 )
            5
            @elseif ( $confirmData['app_generation'] == 6 )
            6
            @elseif ( $confirmData['app_generation'] == 7 )
            7
            @elseif ( $confirmData['app_generation'] == 8 )
            8
            @elseif ( $confirmData['app_generation'] == 9 )
            9
            @elseif ( $confirmData['app_generation'] == 10 )
            10
            @endif 世代
          </td>
        </tr>

        <!-- app_individual -->
        <tr>
          <td class="title">IPアドレス追加 (1個あたり)<br />※最大合計3個</td>
          <td>
            @if ( $confirmData['app_individual'] == 1 )
            1
            @else
            2
            @endif  個
          </td>
        </tr>

        <!-- app_plesk -->
        <tr>
          <td class="title">Plesk Web Pro Editionへの変更</td>
          <td>
            @if ( $confirmData['app_plesk'] == 1 )
            Plesk Web Pro Editionへグレードアップ
            @endif
          </td>
        </tr>

        <!-- app_waf -->
        <tr>
          <td class="title">WAF追加</td>
          <td>
            @if ( $confirmData['app_waf'] == 1 )
            WAF追加
            @endif
          </td>
        </tr>
      </table>
      
      <!-- Domain transfer information -->
      <h3>ドメイン移管情報</h3>
       <table class="form-input">
        <!-- domain_transfe -->
        <tr>
          <td class="title">移管元事業者名）</td>
          <td>{{ $confirmData['domain_transfe'] }}</td>
        </tr>

        <!-- domain_owner -->
        <tr>
          <td class="title">ドメイン所有者</td>
          <td>{{ $confirmData['domain_owner'] }}</td>
        </tr>

        <!-- domain_transfer_work -->
        <tr>
          <td class="title">移管作業日</td>
          <td>{{ $confirmData['domain_transfer_work_year'] }}/{{ $confirmData['domain_transfer_work_month'] }}/{{ $confirmData['domain_transfer_work_day'] }}</td>
        </tr>

        <!-- domain_authcode -->
        <tr>
          <td class="title">AuthCode</td>
          <td>{{ $confirmData['domain_authcode'] }}</td>
        </tr>

        <!-- domain_organization_name -->
        <tr>
          <td class="title">組織名（英語）</td>
          <td>{{ $confirmData['domain_organization_name'] }}</td>
        </tr>

        <!-- domain_owner_name -->
        <tr>
          <td class="title">所有者名</td>
          <td>{{ $confirmData['domain_owner_name'] }}</td>
        </tr>

        <!-- domain_department_name -->
        <tr>
          <td class="title">部署名</td>
          <td>{{ $confirmData['domain_department_name'] }}</td>
        </tr>

        <!-- domain_title -->
        <tr>
          <td class="title">役職名</td>
          <td>{{ $confirmData['domain_title'] }}</td>
        </tr>

        <!-- domain_youraddress_english -->
        <tr>
          <td class="title">ご住所（英語）</td>
          <td>{{ $confirmData['domain_youraddress_english'] }}</td>
        </tr>

        <!-- domain_phone -->
        <tr>
          <td class="title">電話番号</td>
          <td>{{ $confirmData['domain_phone'] }}</td>
        </tr>

        <!-- domain_fax -->
        <tr>
          <td class="title">FAX</td>
          <td>{{ $confirmData['domain_fax'] }}</td>
        </tr>

        <!-- domain_email -->
        <tr>
          <td class="title">メールアドレス</td>
          <td>{{ $confirmData['domain_email'] }}</td>
        </tr>
      </table>
      
      <!-- SSL registration information -->
      <h3>SSL登録情報</h3>
       <table class="form-input">
        <!-- ssl_common_name -->
        <tr>
          <td class="title">コモンネーム</td>
          <td>{{ $confirmData['ssl_common_name'] }}</td>
        </tr>

        <!-- ssl_organization_name_japan  -->
        <tr>
          <td class="title">組織名（日本語）</td>
          <td>{{ $confirmData['ssl_organization_name_japan'] }}</td>
        </tr>

        <!-- ssl_organization_name_english -->
        <tr>
          <td class="title">組織名（英語）</td>
          <td>{{ $confirmData['ssl_organization_name_english'] }}</td>
        </tr>

        <!-- ssl_county_name_japan -->
        <tr>
          <td class="title">都道府県・市区郡名（日本語）</td>
          <td>{{ $confirmData['ssl_county_name_japan'] }}</td>
        </tr>

        <!-- ssl_county_name_english -->
        <tr>
          <td class="title">都道府県・市区郡名（英語）</td>
          <td>{{ $confirmData['ssl_county_name_english'] }}</td>
        </tr>

        <!-- ssl_name_person -->
        <tr>
          <td class="title">担当者名</td>
          <td>{{ $confirmData['ssl_name_person'] }}</td>
        </tr>

        <!-- ssl_phone_number -->
        <tr>
          <td class="title">電話番号</td>
          <td>{{ $confirmData['ssl_phone_number'] }}</td>
        </tr>

        <!-- ssl_fax -->
        <tr>
          <td class="title">FAX</td>
          <td>{{ $confirmData['ssl_fax'] }}</td>
        </tr>

        <!-- ssl_email_address -->
        <tr>
          <td class="title">受信可能メールアドレス</td>
          <td>
            @if ( $confirmData['app_waf'] == 1 )
            admin@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください 
            @elseif ( $confirmData['app_waf'] == 2 )
            administrator@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください
            @elseif ( $confirmData['app_waf'] == 3 )
            hostmaster@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください
            @elseif ( $confirmData['app_waf'] == 4 )
            webmaster@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください
            @elseif ( $confirmData['app_waf'] == 5 )
            postmaster@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください 
            @elseif ( $confirmData['app_waf'] == 6 )
            未使用ドメインにつきお任せ
            @endif
          </td>
        </tr>
      </table>
      
      <!-- For policyholders -->
      <h3>ご契約者について</h3>
       <table class="form-input">
        <!-- policyholders_organization_name -->
        <tr>
          <td class="title">組織名</td>
          <td>{{ $confirmData['policyholders_organization_name'] }}</td>
        </tr>

        <!-- policyholders_representative_name -->
        <tr>
          <td class="title">代表者名</td>
          <td>{{ $confirmData['policyholders_representative_name'] }}</td>
        </tr>

        <!-- policyholders_title -->
        <tr>
          <td class="title">役職名</td>
          <td>{{ $confirmData['policyholders_title'] }}</td>
        </tr>

        <!-- policyholders_name -->
        <tr>
          <td class="title">氏名</td>
          <td>{{ $confirmData['policyholders_name'] }}</td>
        </tr>

        <!-- policyholders_location -->
        <tr>
          <td class="title">所在地</td>
          <td>{{ $confirmData['policyholders_location'] }}</td>
        </tr>
      </table>
      
      <!-- The person in charge -->
      <h3>ご担当者について</h3>
       <table class="form-input">
        <!-- person_organization_name -->
        <tr>
          <td class="title">組織名</td>
          <td>{{ $confirmData['person_organization_name'] }}</td>
        </tr>

        <!-- person_name -->
        <tr>
          <td class="title">氏名</td>
          <td>{{ $confirmData['person_name'] }}</td>
        </tr>

        <!-- person_department_name -->
        <tr>
          <td class="title">部署名</td>
          <td>{{ $confirmData['person_department_name'] }}</td>
        </tr>

        <!-- person_title -->
        <tr>
          <td class="title">役職名</td>
          <td>{{ $confirmData['person_title'] }}</td>
        </tr>

        <!-- person_your_address -->
        <tr>
          <td class="title">ご住所</td>
          <td>
             〒 
            {{ $confirmData['person_your_address_1'] }}
             住所 
            {{ $confirmData['person_your_address_2'] }}
          </td>
        </tr>

        <!-- person_tel -->
        <tr>
          <td class="title">連絡先TEL</td>
          <td>{{ $confirmData['person_tel'] }}</td>
        </tr>

        <!-- person_fax -->
        <tr>
          <td class="title">連絡先FAX</td>
          <td>{{ $confirmData['person_fax'] }}</td>
        </tr>

        <!-- person_email -->
        <tr>
          <td class="title">連絡先メールアドレス</td>
          <td>{{ $confirmData['person_email'] }}</td>
        </tr>
      </table>
      
      <!-- Remarks -->
      <h3>備考</h3>
       <table class="form-input">
        <tr>
          <td class="title">備考</td>
          <td>{{ $confirmData['remarks'] }}</td>
        </tr>
      </table>

      <div style="float: left; width: 100%; margin: 50px 0 80px;">
        <div class="box-submit">
          <a href="{{ route('frontend.order.move_com.send') }}" class="bt-submit">送信</a>
          <a href="{{ route('frontend.order.move_com.back') }}" class="btn-back">戻る</a>
        <div>
      </div>
    </div>
  </div>
</section>

<!-- End content --> 
@endsection