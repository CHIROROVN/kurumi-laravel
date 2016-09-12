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
                <option>おてがるプラン</option>
                <option>しっかりプラン</option>
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
              <input type="radio" name="service" checked/> 希望なし（お申込みの翌営業日より2～3営業日目にサービス開始） 
            </div>
            <div>
              <input type="radio" name="service" /> 希望あり
            </div>
          </td>
        </tr>
        
        <tr>
          <td class="title"><span>※ </span>お支払い方法</td>
          <td>
          	<select class="input-xs" name="">
              <option>月払い</option>
              <option>年払い</option>
            </select>
            <select class="input-sm" name="">
        	  <option>請求書払い（振込手数料はお客様負担）</option>
              <option>クレジットカード払い</option>
            </select>
          </td>
        </tr>
        <tr>
          <td class="title">オプション</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>外部バックアップ世代数追加<br />（1世代あたり）</td>
          <td>
          	<select name="" class="input-sm" >
                <option>不要</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
            </select> 世代
          </td>
        </tr>
        <tr>
          <td class="title">IPアドレス追加 (1個あたり)<br />※最大合計3個</td>
          <td>
          	<select name="" class="input-sm">
              <option>不要</option>
              <option>1</option>
              <option>2</option>
            </select>  個
          </td>
        </tr>
        <tr>
          <td class="title">Plesk Web Pro Editionへの変更</td>
          <td>
          	<select name="">
        	  <option>不要</option>
              <option>Plesk Web Pro Editionへグレードアップ</option>
            </select>
          </td>
        </tr>
        <tr>
          <td class="title">WAF追加</td>
          <td>
            <select name="">
              <option>不要</option>
              <option>WAF追加</option>
          	</select>
          </td>
        </tr>
      </table>
 	  
      
      <h3>ドメイン登録情報</h3>
       <table class="form-input">
        <tr>
          <td class="title"><span>※ </span>組織名（日本語）</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>組織名（ふりがな）</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>組織名（英語）</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>郵便番号</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>ご住所（日本語）</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>ご住所（英語）</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>登記年月日</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>登記地住所</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>代表者名（日本語）</td>
          <td><input type="text" name="textbox" /></td>
        </tr><tr>
          <td class="title"><span>※ </span>代表者名（英語） </td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>代表者方肩書</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>ドメイン登録担当者</td>
          <td>
            <div>
              <input type="radio" name="radio" /> 上記登録者情報と同一 
            </div>
            <div>
              <input type="radio" name="radio" /> 以下に入力 
            </div>
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>ドメイン登録担当者氏名（日本語）</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>ドメイン登録担当者氏名（英語）</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>会社名・組織名</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>ご住所</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>部署名</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>役職名</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>役職名</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title">FAX</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>メールアドレス</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>DNSサーバー</td>
          <td>
            <div>
              <input type="radio" name="radio" /> チロロネットのDNSを利用する 
            </div>
            <div>
              <input type="radio" name="radio" /> 以下のDNSサーバーを利用する。 
            </div>
          </td>
        </tr>
      </table>
      
      <h3>SSL登録情報</h3>
       <table class="form-input">
        <tr>
          <td class="title"><span>※ </span>コモンネーム</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>組織名（日本語）</td>
          <td>
          	 <input type="text" name="textbox" />
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>組織名（英語）</td>
          <td>
          	 <input type="text" name="textbox" />
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>都道府県・市区郡名（日本語）</td>
          <td>
          	 <input type="text" name="textbox" />
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>都道府県・市区郡名（英語）</td>
          <td>
          	 <input type="text" name="textbox" />
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>担当者名</td>
          <td>
          	 <input type="text" name="textbox" />
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>電話番号</td>
          <td>
          	 <input type="text" name="textbox" />
          </td>
        </tr>
        <tr>
          <td class="title">FAX</td>
          <td>
          	 <input type="text" name="textbox" />
          </td>
        </tr>
        <tr>
          <td class="title">受信可能メールアドレス</td>
          <td>
            <div class="row-radio">
              <div class="input-radio">
                <input name="radio" type="radio">
              </div>
              <div>
                admin@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください 
              </div>
            </div>
            <div class="row-radio">
              <div class="input-radio">
                <input name="radio" type="radio">
              </div>
              <div>
                administrator@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください
              </div>
            </div>
            <div class="row-radio">
              <div class="input-radio">
                <input name="radio" type="radio">
              </div>
              <div>
                hostmaster@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください
              </div>
            </div>
            <div class="row-radio">
              <div class="input-radio">
                <input name="radio" type="radio">
              </div>
              <div>
                webmaster@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください
              </div>
            </div>
            <div class="row-radio">
              <div class="input-radio">
                <input name="radio" type="radio">
              </div>
              <div>
                postmaster@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください 
              </div>
            </div>
            <div class="row-radio">
              <div class="input-radio">
                <input name="radio" type="radio">
              </div>
              <div>
                未使用ドメインにつきお任せ  
              </div>
            </div>
          </td>
        </tr>
      </table>
      
      <h3>ご契約者について</h3>
       <table class="form-input">
      
        <tr>
          <td class="title"><span>※ </span>ご契約者情報</td>
          <td>
            <div>
              <input type="radio" name="radio" /> ドメイン登録情報と同一 
            </div>
            <div>
              <input type="radio" name="radio" /> 以下に入力 
            </div>
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>組織名</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>代表者名</td>
          <td>
          	 <input type="text" name="textbox" />
          </td>
        </tr>
        <tr>
          <td class="title">役職名</td>
          <td>
          	 <input type="text" name="textbox" />
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>氏名</td>
          <td>
          	 <input type="text" name="textbox" />
          </td>
        </tr>
        <tr>
          <td class="title">所在地</td>
          <td>
          	 <input type="text" name="textbox" />
          </td>
        </tr>
      </table>
      
      <h3>ご担当者について</h3>
       <table class="form-input">
          <tr>
          <td class="title"><span>※ </span>ご担当者情報</td>
          <td>
            <div>
              <input type="radio" name="radio" /> ドメイン登録情報と同一
            </div>
            <div>
              <input type="radio" name="radio" /> 以下に入力
            </div>
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>組織名</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>氏名</td>
          <td>
          	 <input type="text" name="textbox" />
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>部署名</td>
          <td>
          	 <input type="text" name="textbox" />
          </td>
        </tr>
        <tr>
          <td class="title">役職名</td>
          <td>
          	 <input type="text" name="textbox" />
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>ご住所</td>
          <td>
          	 〒 <input type="text" name="textbox" class="input-xs"/>
             住所 <input name="" value="" type="text" style="width:400px!important;">
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>連絡先TEL</td>
          <td>
          	 <input type="text" name="textbox" />
          </td>
        </tr>
        <tr>
          <td class="title">連絡先FAX</td>
          <td>
          	 <input type="text" name="textbox" />
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>連絡先メールアドレス</td>
          <td>
          	 <input type="text" name="textbox" />
          </td>
        </tr>
      </table>
      
      <h3>備考</h3>
       <table class="form-input">
        <tr>
          <td class="title">備考</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
      </table>
      <div class="box-submit">
        <input value="送信" type="submit" class="bt-submit"/>
      <div>
      {!! Form::close() !!}
    </div>
  </div>
</section>
<!-- End content -->
@endsection