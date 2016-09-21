@extends('frontend.frontend')

@section('content')
<!--Content -->

<section class="clear" id="contact">
  <!--Frame01 -->
    <div class="frame01">
      <div class="container">
        <h1 class="title-content"><img src="{{ asset('') }}public/frontend/image/order/title-com.png" alt="" /></h1>
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
        <h1 class="title-content"><img src="{{ asset('') }}public/frontend/image/order/title-com.png" alt="" /></h1>

        <!-- form -->
        <div class="content">
          <ul class="breadcrum-step">
            <li><a href="" title=""><img src="{{ asset('') }}public/frontend/image/order/text1-normal-frame02.png" alt="" /></a></li>
            <li><a href="" title=""><img src="{{ asset('') }}public/frontend/image/order/text2-normal-frame02.png" alt="" /></a></li>
            <li><a href="" title=""><img src="{{ asset('') }}public/frontend/image/order/text2-frame02.png" alt="" /></a></li>
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