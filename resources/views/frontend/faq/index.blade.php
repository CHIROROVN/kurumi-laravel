@extends('frontend.frontend')

@section('content')
<section class="clear" id="faq">
  <div class="container">
    <!--<h1 class="title-content"><img src="{{ asset('') }}public/frontend/image/faq/title-index.png" alt="" /></h1>-->
    <h2><img src="{{ asset('') }}public/frontend/image/faq/title-h2-index.png" alt="" /></h2>
    <div class="content">
      <div class="box">
        <h3><img src="{{ asset('') }}public/frontend/image/faq/title1-h3-index.png" alt="" /></h3>
        <img src="{{ asset('') }}public/frontend/image/faq/img1-index.png" alt="" />
      </div>
      <div class="box">
        <h3><img src="{{ asset('') }}public/frontend/image/faq/title2-h3-index.png" alt="" /></h3>
        <img src="{{ asset('') }}public/frontend/image/faq/img2-index.png" alt="" />
        <p>※〈年払いの場合〉契約途中でサーバーを解約される場合、返金はできかねますのでご了承ください。</p>
      </div>
      <div class="box">
        <h3><img src="{{ asset('') }}public/frontend/image/faq/title3-h3-index.png" alt="" /></h3>
        <img src="{{ asset('') }}public/frontend/image/faq/img3-index.png" alt="" />
      </div>
      <div class="box">
        <h3><img src="{{ asset('') }}public/frontend/image/faq/title4-h3-index.png" alt="" /></h3>
        <img src="{{ asset('') }}public/frontend/image/faq/img4-index.png" alt="" />
        <p>※〈月払いの場合〉解約をされる場合は、解約希望月の10日前までにお知らせください。なお、最低契約期間は
　本サービス開始日より3ヶ月間です。<br />
　3ヶ月以内にサーバー解約する場合でも、3ヶ月分の月額費用はお支払いください。</p>
      </div>
    </div>
  </div>
</section>
@endsection