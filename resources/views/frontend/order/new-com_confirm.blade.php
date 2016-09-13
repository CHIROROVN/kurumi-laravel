@extends('frontend.frontend')

@section('content')
<!--Content -->
<section class="order-child clear" id="contact">
  <div class="container">
  	<h1 class="title-content"><img src="{{ asset('') }}public/frontend/image/order/title-new-com.png" alt="" /></h1>
    <div class="content">
      <div class="text-message">は必須項目です。</div>
      <h3>お申込みサーバー情報</h3>
      <table class="form-input">
        <tr>
          <td class="title"><span></span>お申込みプラン名</td>
          <td>
            {{$MsgNewJp->new_com}}
          </td>
        </tr>
        <tr>
          <td class="title"><span></span>ドメイン名</td>
          <td>test</td>
        </tr>
        <tr>
          <td class="title"><span></span>サービス開始希望日</td>
          <td>
            test
          </td>
        </tr>
        
        <tr>
          <td class="title"><span></span>お支払い方法</td>
          <td>
          	test test
          </td>
        </tr>
        <tr>
          <td class="title">オプション</td>
          <td>test</td>
        </tr>
        <tr>
          <td class="title"><span></span>外部バックアップ世代数追加<br />（1世代あたり）</td>
          <td>
          	test 世代
          </td>
        </tr>
        <tr>
          <td class="title">IPアドレス追加 (1個あたり)<br />※最大合計3個</td>
          <td>
          	test 個
          </td>
        </tr>
        <tr>
          <td class="title">Plesk Web Pro Editionへの変更</td>
          <td>
          	test
          </td>
        </tr>
        <tr>
          <td class="title">WAF追加</td>
          <td>
            test
          </td>
        </tr>
      </table>
 	  
      
      <h3>ドメイン登録情報</h3>
       <table class="form-input">
        <tr>
          <td class="title"><span></span>組織名（日本語）</td>
          <td>test</td>
        </tr>
        <tr>
          <td class="title"><span></span>組織名（英語）</td>
          <td>test</td>
        </tr>
        <tr>
          <td class="title"><span></span>所有者名</td>
          <td>test</td>
        </tr>
        <tr>
          <td class="title"><span></span>部署名</td>
          <td>test</td>
        </tr>
        <tr>
          <td class="title">役職名</td>
          <td>test</td>
        </tr>
        <tr>
          <td class="title"><span></span>ご住所（日本語）</td>
          <td>test</td>
        </tr>
        <tr>
          <td class="title"><span></span>ご住所（英語）</td>
          <td>test</td>
        </tr>
        <tr>
          <td class="title"><span></span>電話番号</td>
          <td>test</td>
        </tr>
        <tr>
          <td class="title">FAX</td>
          <td>test</td>
        </tr>
        <tr>
          <td class="title"><span></span>メールアドレス</td>
          <td>test</td>
        </tr>
        <tr>
          <td class="title"><span></span>DNSサーバー</td>
          <td>
            test
          </td>
        </tr>
      </table>
      
      <h3>SSL登録情報</h3>
       <table class="form-input">
        <tr>
          <td class="title"><span></span>コモンネーム</td>
          <td>test</td>
        </tr>
        <tr>
          <td class="title"><span></span>組織名（日本語）</td>
          <td>
          	 test
          </td>
        </tr>
        <tr>
          <td class="title"><span></span>組織名（英語）</td>
          <td>
          	 test
          </td>
        </tr>
        <tr>
          <td class="title"><span></span>都道府県・市区郡名（日本語）</td>
          <td>
          	 test
          </td>
        </tr>
        <tr>
          <td class="title"><span></span>都道府県・市区郡名（英語）</td>
          <td>
          	 test
          </td>
        </tr>
        <tr>
          <td class="title"><span></span>担当者名</td>
          <td>
          	 test
          </td>
        </tr>
        <tr>
          <td class="title"><span></span>電話番号</td>
          <td>
          	 test
          </td>
        </tr>
        <tr>
          <td class="title">FAX</td>
          <td>
          	 test
          </td>
        </tr>
        <tr>
          <td class="title">受信可能メールアドレス</td>
          <td>
            test
          </td>
        </tr>
      </table>
      
      <h3>ご契約者について</h3>
       <table class="form-input">
      
        <tr>
          <td class="title"><span></span>ご契約者情報</td>
          <td>
            test
          </td>
        </tr>
        <tr>
          <td class="title"><span></span>組織名</td>
          <td>test</td>
        </tr>
        <tr>
          <td class="title"><span></span>代表者名</td>
          <td>
          	 test
          </td>
        </tr>
        <tr>
          <td class="title">役職名</td>
          <td>
          	 test
          </td>
        </tr>
        <tr>
          <td class="title"><span></span>氏名</td>
          <td>
          	 test
          </td>
        </tr>
        <tr>
          <td class="title">所在地</td>
          <td>
          	 test
          </td>
        </tr>
      </table>
      
      <h3>ご担当者について</h3>
       <table class="form-input">
          <tr>
          <td class="title"><span></span>ご担当者情報</td>
          <td>
            test
          </td>
        </tr>
        <tr>
          <td class="title"><span></span>組織名</td>
          <td>test</td>
        </tr>
        <tr>
          <td class="title"><span></span>氏名</td>
          <td>
          	 test
          </td>
        </tr>
        <tr>
          <td class="title"><span></span>部署名</td>
          <td>
          	 test
          </td>
        </tr>
        <tr>
          <td class="title">役職名</td>
          <td>
          	 test
          </td>
        </tr>
        <tr>
          <td class="title"><span></span>ご住所</td>
          <td>
          	 〒 test <br />
             住所 test
          </td>
        </tr>
        <tr>
          <td class="title"><span></span>連絡先TEL</td>
          <td>
          	 test
          </td>
        </tr>
        <tr>
          <td class="title">連絡先FAX</td>
          <td>
          	 test
          </td>
        </tr>
        <tr>
          <td class="title"><span></span>連絡先メールアドレス</td>
          <td>
          	 test
          </td>
        </tr>
      </table>
      
      <h3>備考</h3>
       <table class="form-input">
        <tr>
          <td class="title">備考</td>
          <td>test</td>
        </tr>
      </table>
      <div class="box-submit">
        <input value="送信" type="submit" class="bt-submit"/>
      <div>
    </div>
  </div>
</section>

<!-- End content -->
@endsection