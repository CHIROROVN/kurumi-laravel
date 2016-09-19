<!-- footer -->
<footer>
  <div class="top">
    <div class="container">
      <h1><img src="{{ asset('') }}public/frontend/common/image/h1-top-footer.png" alt="" /></h1>
      <div class="btn btn-pink">
        お申し込みはこちら
      </div>
      <div class="info-contact">
        <p><img src="{{ asset('') }}public/frontend/common/image/title-info-contact-footer.png" alt="" /></p>
        <div class="fl-left">
          <img src="{{ asset('') }}public/frontend/common/image/img-call-footer.png" alt="" />
        </div>
        <div class="fl-left" style="margin-left:15px;">
          <a href="{{ route('frontend.contact.index') }}" title=""><img src="{{ asset('') }}public/frontend/common/image/img-mail-footer.png" alt="" /></a>
        </div>
      </div>
    </div>
  </div>
  <div class="bottom">
    <div class="container">
      <div class="clear">
        <div class="fl-left">
          <img src="{{ asset('') }}public/frontend/common/image/logo-footer.png" alt="" />
          <span>岡山本社</span>
          <address>
            〒710-0844　岡山県倉敷市福井125-7<br />
            TEL. 086-430-3956<br />
            FAX. 086-430-3957
          </address>
        </div>
        <div class="fl-right">
          <ul class="clear">
            <li><a href="{{route('frontend.index')}}" title="ホーム">ホーム</a></li>
            <li><a href="http://support.kurumiserver.jp/" title="サポート">サポート</a></li>
            <li><a href="{{route('frontend.order.index')}}" title="">お申し込み</a></li>
            <li><a href="{{ route('frontend.feature.index') }}" title="強み">強み</a></li>
            <li><a href="{{route('frontend.faq.index')}}" title="FAQ">FAQ</a></li>
            <li><a href="{{ route('frontend.contact.index') }}" title="お問い合わせ">お問い合わせ</a></li>
            <li><a href="{{route('frontend.plan.index')}}" title="プラン">プラン</a></li>
            <li><a href="{{route('frontend.company.index')}}" title="会社案内">会社案内</a></li>
            <li><a href="" title="">プライバシーポリシー</a></li>
          </ul>
        </div>
      </div>
      <div class="coppy clear">
        Copy right (c) チロロネット All rights reserved.
  </div>
    </div>
  </div>
</footer>
<!-- End footer -->
</body>
</html>