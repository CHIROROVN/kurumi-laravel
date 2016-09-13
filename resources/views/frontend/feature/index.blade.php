@extends('frontend.frontend')

@section('content')
<section class="clear" id="feature">
  <div class="frame01">
    <h1 class="title-content"><img src="{{ asset('') }}public/frontend/image/feature/title.png" alt="" /></h1>
    <div class="container">
      <h2 class="title"><img src="{{ asset('') }}public/frontend/image/feature/title1-h2.png" alt="" /></h2>
      <div class="content">
      
        <div class="box">
          <ul class="top">
            <li>選ばれる理由1</li>
            <li>セ</li>
            <li>キ</li>
            <li>ュ</li>
            <li>リ</li>
            <li>テ</li>
            <li>ィ</li>
            <li>対</li>
            <li>策</li>
          </ul>
          <div class="text-title"><img src="{{ asset('') }}public/frontend/image/feature/text-frame01.png" alt="" /></div>
          <div class="text-bg-white">
            <h4>SSLとは</h4>
            <p>Secure Socket Layerの略で、情報を暗号化して送受信できる仕組みのこと。
暗号化することにより、情報漏洩や情報改ざんを防ぐことができます。</p>
          </div>
          <div class="text-bottom">
            一般的なサーバーで提供されている共有SSLは、<br />
            身元保証の信頼性がとれません。<br />
            また、独自ドメインが使えないサーバーもあります。<br />
            くるみサーバーはお客さまドメイン名でのSSLなので、ドメインが<br />
            変わることがなく、閲覧者に不信感を与えません。
          </div>
          <div class="photo">
            <img src="{{ asset('') }}public/frontend/image/feature/img-person.png" alt="" />
          </div>
        </div>
        
        <div class="box box02">
          <ul class="top">
            <li>選ばれる理由2</li>
            <li>コ</li>
            <li>ス</li>
            <li>ト</li>
            <li>パ</li>
            <li>フ</li>
            <li>ォ</li>
            <li>ー</li>
            <li>マ</li>
            <li>ン</li>
            <li>良</li>
            <li>さ</li>
          </ul>
          <div class="text-title"><img src="{{ asset('') }}public/frontend/image/feature/text2-frame01.png" alt="" /></div>
          <div class="text-small">
            （※1）おてがるプラン/年一括前払いの場合、月あたり4,104円（税込）〈税抜3,800円〉。<br />
        　おてがるプラン/毎月払いの場合は、月あたり4,536円（税込）〈税抜4,200円〉。
          </div>
          <div class="text-bottom">
            共有サーバーではできなかったサーバーの設定が自由に変更できます！<br />
オプション機能も充実していますので、それぞれの会社さまに合った<br />
カスタマイズが可能です。また、リソースが保証されているので安定しています。
          </div>
          <div class="photo">
            <img src="{{ asset('') }}public/frontend/image/feature/img-box2.png" alt="" />
          </div>
        </div>
        
        <div class="box box03">
          <ul class="top">
            <li>選ばれる理由3</li>
            <li>実</li>
            <li>績</li>
          </ul>
          <div class="text-title"><img src="{{ asset('') }}public/frontend/image/feature/text3-frame01.png" alt="" /></div>
          <div class="text-bottom">
            チロロネットのサーバーをご利用のお客様は延べ4000社を突破いたしました。<br />
皆さまに満足していただけるサーバー・環境づくりに日々励んでおります。
		  </div>
          <div class="photo">
            <img src="{{ asset('') }}public/frontend/image/feature/img-box3.png" alt="" />
          </div>
        </div>
        
        <div class="box box04">
          <ul class="top">
            <li>選ばれる理由4</li>
            <li>信</li>
            <li>頼</li>
          </ul>
          <div class="text-title"><img src="{{ asset('') }}public/frontend/image/feature/text4-frame01.png" alt="" /></div>
          <div class="text-bottom">
           皆さまに安心・安全なサーバーを提供しつづけて16年。<br />
これからも皆さまのご期待に添えるよう、努力してまいります。
		  </div>
          <div class="photo">
            <img src="{{ asset('') }}public/frontend/image/feature/img-box4.png" alt="" />
          </div>
        </div>
        
	  </div>
    </div> 
  </div>
    
    <div class="frame02">
      <div class="container">
      	<h2 class="title"><img src="{{ asset('') }}public/frontend/image/feature/title2-h2.png" alt="" /></h2>
      	<div class="content">
          <ul class="clear">
          	<li>
              <h4>独自ドメインSSL
証明書を発行できます!</h4>
			  <p>共有ドメインではなく、独自ドメインでのSSL証明書が発行できるので、安心安全です。</p>
            </li>
            <li>
              <h4>ファイアウォール標準装備!</h4>
			  <p>ファイアウォールが標準でついています。ウィルス・迷惑メールチェックがあり、安心してサーバーが利用できます。</p>
            </li>
            <li>
              <h4>外部バックアップ毎日実施!</h4>
			  <p>別のバックアップ用サーバーに毎日、1世代（1回前のバックアップ）のバックアップをしています。オプションで保存できる世代数を追加できます。</p>
            </li>
            <li>
              <h4>WordPressがすぐ使えます!</h4>
			  <p>WordPressが最初からインストールされているので、すぐ使用することができます。</p>
            </li>
            <li>
              <h4>ウェブメール標準装備!</h4>
			  <p>出先やスマホからいつものメールが送受信できるウェブメール機能がご利用いただけます。</p>
            </li>
            <li>
              <h4>IMAPがご利用できます!</h4>
			  <p>サーバー上でメールを管理し、開封情報も共有されるのでPC・タブレット・スマホなど複数台使用する方にオススメです。</p>
            </li>
          </ul>
          
          <div class="box02">
          	<h3><img src="{{ asset('') }}public/frontend/image/feature/title-box02-frame02.png" alt="" /></h3>
            <p>WAFとはウェブ・アプリケーション・ファイアウォールの略で、WebサイトやWebアプリケーションを保護するためのセキュリティの仕組みです。ショッピングサイトなど、個人情報を入力するページが多いWebサイトの保護に最適です。オプションで追加可能です。</p>
          </div>
          
        </div>
      </div>
    <div>

</section>
@endsection