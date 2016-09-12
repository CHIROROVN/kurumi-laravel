@extends('frontend.frontend')

@section('content')
<!--Content -->

<section class="clear" id="contact">
  <!--Frame01 -->
    <div class="frame01">
      <div class="container">
        <h1 class="title-content"><img src="{{ asset('') }}public/frontend/image/contact/title.png" alt="" /></h1>
        <div class="info">
          <div class="box-text1">
            <img src="{{ asset('') }}public/frontend/image/contact/text1-frame01.png" alt="" />
          </div>
          <img src="{{ asset('') }}public/frontend/image/contact/text-frame01.png" alt="" />
          <div class="box-text2">
            <img src="{{ asset('') }}public/frontend/image/contact/text2-frame01.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  <!--End frame01 -->
  <!--Frame02 -->
    <div class="frame02">
      <div class="container">
        <h2 class="title"><img src="{{ asset('') }}public/frontend/image/contact/title1-h2.png" alt="" /></h2>
        <div class="content">
          <ul>
            <li><a href="" title=""><img src="{{ asset('') }}public/frontend/image/contact/text1-frame02.png" alt="" /></a></li>
            <li><a href="" title=""><img src="{{ asset('') }}public/frontend/image/contact/text2-frame02.png" alt="" /></a></li>
            <li><a href="" title=""><img src="{{ asset('') }}public/frontend/image/contact/text3-frame02.png" alt="" /></a></li>
          </ul>
          <div class="text-message">※ は必須項目です。</div>
          <table class="form-input">
            <tr>
              <td class="title"><span>※ </span>お名前</td>
              <td><input type="text" name="textbox" /></td>
            </tr>
            <tr>
              <td class="title">お名前（フリガナ</td>
              <td><input type="text" name="textbox" /></td>
            </tr>
            <tr>
              <td class="title"><span>※ </span>会社名</td>
              <td><input type="text" name="textbox" /></td>
            </tr>
            <tr>
              <td class="title"><span>※ </span>郵便番号</td>
              <td><input type="text" name="textbox" /></td>
            </tr>
            <tr>
              <td class="title"><span>※ </span>ご住所</td>
              <td><input type="text" name="textbox" /></td>
            </tr>
            <tr>
              <td class="title"><span>※ </span>電話番号</td>
              <td><input type="text" name="textbox" /></td>
            </tr>
            <tr>
              <td class="title"><span></span>FAX番号</td>
              <td><input type="text" name="textbox" /></td>
            </tr>
            <tr>
              <td class="title"><span>※ </span>メールアドレス</td>
              <td><input type="text" name="textbox" /></td>
            </tr>
            <tr>
              <td class="title"><span>※ </span>お問い合わせの種類</td>
              <td>
                <div class="radio">
                  <input type="radio" name="radio" /> サーバーについて
                </div>
                <div class="radio">
                  <input type="radio" name="radio" /> ドメインについて
                </div>
                <div class="radio">
                  <input type="radio" name="radio" /> その他
                </div>
              </td>
            </tr>
            <tr>
              <td class="title"><span>※ </span>お問い合わせ内容</td>
              <td><textarea rows="4" cols="12"></textarea></td>
            </tr>
          </table>
          <p>※ 個人情報の取扱について<br />弊社の「<span style="text-decoration:underline;">プライバシーポリシー</span>」をご確認の上、ご同意いただき送信をお願いいたします。</p>
          <div class="check-agree">
            <!--<input type="checkbox" name="checkbox" /> -->
            <input id="ckagree" name="checkbox" value="" type="checkbox">
            <label for="ckagree"></label>
            <label>同意する</label>
          </div>
          <div class="box-submit">
            <input type="submit" value="" name="sumit" class="btn-submit"/>
          <div>
        </div>
      </div>
    </div>
  <!--End frame02 -->
</section>

<!-- End content -->
@endsection