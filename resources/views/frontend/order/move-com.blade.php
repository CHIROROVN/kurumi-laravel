@extends('frontend.frontend')

@section('content')
<!--Content -->
<section class="order-child clear" id="contact">
  <div class="container">
  	<h1 class="title-content"><img src="{{ asset('') }}public/frontend/image/order/title-com.png" alt="" /></h1>
    <div class="content">
      <div class="text-message">※ は必須項目です。</div>
      <h3>お申込みサーバー情報</h3>
      <table class="form-input">
        <tr>
          <td class="title"><span>※ </span>お申込みプラン名</td>
          <td>
              <select name="">
                <option>おてがるプラン</option>
                <option>しっかりプラン</option>
              </select>
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>ドメイン名</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>サービス開始希望日</td>
          <td>
            <div>
              <input type="radio" name="radio" /> 希望なし（お申込みの翌営業日より2～3営業日目にサービス開始） 
            </div>
            <div>
              <input type="radio" name="radio" /> 希望あり
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
      
      <h3>ドメイン移管情報</h3>
       <table class="form-input">
        <tr>
          <td class="title"><span>※ </span>移管元事業者名）</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>ドメイン所有者</td>
          <td>
          	 <input type="text" name="textbox" />
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>移管作業日</td>
          <td>
          	<select name="year" id="year" class="input-xs">
              <option value="2016">2016</option>
              <option value="2016">2017</option>
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
          </td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>AuthCode</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>組織名（英語）</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>所有者名</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>部署名</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title">役職名</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>ご住所（英語）</td>
          <td><input type="text" name="textbox" /></td>
        </tr>
        <tr>
          <td class="title"><span>※ </span>電話番号</td>
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
          <td class="title"><span>※ </span>受信可能メールアドレス</td>
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
    </div>
  </div>
</section>
<!-- End content -->
@endsection