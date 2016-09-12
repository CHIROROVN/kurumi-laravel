@extends('frontend.frontend')

@section('content')

<style type="text/css">
  .error-input {
    color: red;
    margin-top: 5px;
    display: block;
    width: 100% !important;
    font-weight: bold;
  }

</style>
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

        <!-- form -->
        <div class="content">
          <ul>
            <li><a href="" title=""><img src="{{ asset('') }}public/frontend/image/contact/text1-frame02.png" alt="" /></a></li>
            <li><a href="" title=""><img src="{{ asset('') }}public/frontend/image/contact/text2-frame02.png" alt="" /></a></li>
            <li><a href="" title=""><img src="{{ asset('') }}public/frontend/image/contact/text3-frame02.png" alt="" /></a></li>
          </ul>
          <!-- <div class="text-message">※ は必須項目です。</div> -->
          <table class="form-input">
            <tr>
              <td class="title">お名前</td>
              <td>{{ $confirmData['name'] }}</td>
            </tr>
            <tr>
              <td class="title">お名前（フリガナ</td>
              <td>{{ $confirmData['name_kana'] }}</td>
            </tr>
            <tr>
              <td class="title">会社名</td>
              <td>{{ $confirmData['company'] }}</td>
            </tr>
            <tr>
              <td class="title">郵便番号</td>
              <td>{{ $confirmData['zipcode'] }}</td>
            </tr>
            <tr>
              <td class="title">ご住所</td>
              <td>{{ $confirmData['address'] }}</td>
            </tr>
            <tr>
              <td class="title">電話番号</td>
              <td>{{ $confirmData['phone'] }}</td>
            </tr>
            <tr>
              <td class="title">FAX番号</td>
              <td>{{ $confirmData['fax'] }}</td>
            </tr>
            <tr>
              <td class="title">メールアドレス</td>
              <td>{{ $confirmData['email'] }}</td>
            </tr>
            <tr>
              <td class="title">お問い合わせの種類</td>
              <td>
                @if ( $confirmData['type_message'] == 1 )
                サーバーについて
                @elseif ( $confirmData['type_message'] == 2 )
                ドメインについて
                @elseif ( $confirmData['type_message'] == 3 )
                その他
                @endif
              </td>
            </tr>
            <tr>
              <td class="title">お問い合わせ内容</td>
              <td>{!! nl2br($confirmData['content']) !!}</td>
            </tr>
          </table>
          
          <div class="box-submit">
            <a href="{{ route('frontend.contact.back') }}" class="btn-submit">Back</a>
            <a href="{{ route('frontend.contact.send') }}" class="btn-submit">Send</a>
          <div>
        </div>
        <!-- end form -->

      </div>
    </div>
  <!--End frame02 -->
</section>

<!-- End content -->
@endsection