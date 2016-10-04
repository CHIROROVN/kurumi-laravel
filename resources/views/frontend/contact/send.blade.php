@extends('frontend.frontend')

@section('content')
<!--Content -->

<section class="clear" id="contact">
  <!--Frame01 -->
    <div class="frame01">
      <div class="container">
        <h1 class="title-content">お問い合わせ</h1>
        <div class="info">
          <div class="box-text1">
            <img src="{{ asset('') }}public/frontend/image/contact/text1-frame01.png" alt="" />
          </div>
          <img class="text-phone" src="{{ asset('') }}public/frontend/image/contact/text-frame01.png" alt="" />
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
        <h2 class="title">メールでのお問い合わせ</h2>

        <!-- form -->
        <div class="content">
          <ul>
            <li><a href="" title=""><img src="{{ asset('') }}public/frontend/image/contact/text1-normal-frame02.png" alt="" /></a></li>
            <li><a href="" title=""><img src="{{ asset('') }}public/frontend/image/contact/text2-frame02.png" alt="" /></a></li>
            <li class="active"><a href="" title=""><img src="{{ asset('') }}public/frontend/image/contact/text3-active-frame02.png" alt="" /></a></li>
          </ul>
          <div class="show-msg">
            <p class="text-message-sent">お問い合わせ送信完了</p>
          </div>
        </div>
        <!-- end form -->
      </div>
    </div>
  <!--End frame02 -->
</section>

<!-- End content -->
@endsection