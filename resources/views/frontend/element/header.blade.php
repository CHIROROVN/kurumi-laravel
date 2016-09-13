<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="Keywords" content="">
<meta name="Description" content="">
<title></title>
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<link href="{{ asset('') }}public/frontend/common/css/import.css" rel="stylesheet" type="text/css" media="all">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('') }}public/frontend/common/js/function.js"></script>
</head>

<body>

<!-- Header -->
<header>
  <div class="frame01">
    <div class="container">
      <a href="" title="" class="logo">
        <img src="{{ asset('') }}public/frontend/common/image/logo.png" alt="" />
      </a>
      <div class="info-contact">
        <img class="fl-left" src="{{ asset('') }}public/frontend/common/image/img-call-header.png" alt="" />
        <a href="{{ route('frontend.contact.index') }}" title="" class="fl-right"><img src="{{ asset('') }}public/frontend/common/image/img-mail-header.png" alt="" /></a>
      </div>
      <div class="text">
        <p><img src="{{ asset('') }}public/frontend/common/image/text1-header.png" alt="" /></p>
        <p><img src="{{ asset('') }}public/frontend/common/image/text2-header.png" alt="" /></p>
      </div>
      <div class="photo">
        <img src="{{ asset('') }}public/frontend/common/image/img-person-header.png" alt="" />
      </div>
    </div>
  </div>
  <div class="frame02">
    <div class="container">
      <h1><img src="{{ asset('') }}public/frontend/common/image/text3-header.png" alt="" /></h1>
      <p>※SSLは本サービス利用開始後のご提供となります。</p>
      <ul>
        <li class="btn btn-pink">
          <a href="order/index.html" title="">お申し込みはこちら</a>
        </li>
        <li class="btn btn-orange">
          <a href="{{ route('frontend.contact.index') }}" title="">お問い合わせはこちら</a>
        </li>
      </ul>
    </div>
  </div>
</header>
<!-- End Header --> 

<!-- Menu -->
<nav class="clear">
  <div class="container">
    <ul>
      <li id="nav01"><a href="{{ route('frontend.index') }}" title="ホーム">ホーム</a></li>
      <li id="nav02"><a href="{{ route('frontend.feature.index') }}" title="強み">強み</a></li>
      <li id="nav03"><a href="{{route('frontend.plan.index')}}" title="プラン">プラン</a></li>
      <li id="nav04"><a href="support/index.html" title="サポート">サポート</a></li>
      <li id="nav05"><a href="faq/index.html" title="FAQ">FAQ</a></li>
      <li id="nav06"><a href="{{ route('frontend.company.index') }}" title="会社案内">会社案内</a></li>
      <li id="nav07"><a href="{{route('frontend.order.index')}}" title="お申し込み">お申し込み</a></li>
    </ul>
  </div>
</nav>
<!--End Menu -->