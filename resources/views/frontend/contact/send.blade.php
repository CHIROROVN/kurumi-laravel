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
            <li><a href="" title=""><img src="{{ asset('') }}public/frontend/image/contact/text1-normal-frame02.png" alt="" /></a></li>
            <li><a href="" title=""><img src="{{ asset('') }}public/frontend/image/contact/text2-frame02.png" alt="" /></a></li>
            <li><a href="" title=""><img src="{{ asset('') }}public/frontend/image/contact/text3-active-frame02.png" alt="" /></a></li>
          </ul>
          <p class="text-message-sent">Thank you for send email!</p>
        </div>
        <!-- end form -->

      </div>
    </div>
  <!--End frame02 -->
</section>

<!-- End content -->
@endsection