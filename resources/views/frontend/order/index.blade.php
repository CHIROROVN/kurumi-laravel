@extends('frontend.frontend')

@section('content')
<!--Content -->

<section class="clear" id="order">
    <div class="container">
      <h1 class="title-content">お申込み</h1>
      <div class="top clear">
        <img class="fl-left" src="{{ asset('') }}public/frontend/image/order/img1-index.png" alt="" />
        <img class="fl-right" src="{{ asset('') }}public/frontend/image/order/img2-index.png" alt="" />
      </div>
      <h2 class="title">新規でお申込みの方(サーバーとドメイン取得を同時お申し込み)</h2>
      <div class="content">
        <p>PDFでお申込みの場合、以下より必要な書面をダウンロードしていただき、<br />
           ご記入・ご捺印の上、チロロネットまでFAXもしくは郵送にてお送りください。</p>
        <table class="table-info">
          <tr>
            <td class="title"><img src="{{ asset('') }}public/frontend/image/order/title1-table-index.png" alt="" /></td>
            <td>
              <a class="fl-left" href="{{ asset('') }}public/frontend/files/order/new/order_new-cojp.pdf" title=""><img src="{{ asset('') }}public/frontend/image/order/img-pdf.png" alt="" /></a>
              <a class="fl-right" href="{{route('frontend.order.new_cojp_regist')}}" title=""><img src="{{ asset('') }}public/frontend/image/order/img-internet.png" alt="" /></a>
            </td>
          </tr>
          <tr>
            <td class="title"><img src="{{ asset('') }}public/frontend/image/order/title2-table-index.png" alt="" /></td>
            <td>
              <a class="fl-left" href="{{ asset('') }}public/frontend/files/order/new/order_new-jp.pdf" title=""><img src="{{ asset('') }}public/frontend/image/order/img-pdf.png" alt="" /></a>
              <a class="fl-right" href="{{route('frontend.order.new_jp_regist')}}" title=""><img src="{{ asset('') }}public/frontend/image/order/img-internet.png" alt="" /></a>
            </td>
          </tr>
          <tr>
            <td class="title"><img src="{{ asset('') }}public/frontend/image/order/title3-table-index.png" alt="" /></td>
            <td>
              <a class="fl-left" href="{{ asset('') }}public/frontend/files/order/new/order_new-com.pdf" title=""><img src="{{ asset('') }}public/frontend/image/order/img-pdf.png" alt="" /></a>
              <a class="fl-right" href="{{route('frontend.order.new_com_regist')}}" title=""><img src="{{ asset('') }}public/frontend/image/order/img-internet.png" alt="" /></a>
            </td>
          </tr>
        </table>
        <div class="box-info2">
          <h3><img src="{{ asset('') }}public/frontend/image/order/title1-h3-index.png" alt="" /></h3>
          <ul>
            <li><div class="icon">FAX</div><img src="{{ asset('') }}public/frontend/image/order/img-call.png" alt="" /></li>
            <li><div class="icon">郵送</div>〒710-0844　岡山県倉敷市福井125-7<br />株式会社チロロネット　レンタルサーバー担当　宛</li>
            
          </ul>
        </div>
      </div>
      <h2 class="title">他社サーバーから移転の方(ドメイン取得済みでサーバーをお申し込み)</h2>
      <div class="content">
        <p>PDFでお申込みの場合、以下より必要な書面をダウンロードしていただき、<br />
            ご記入・ご捺印の上、チロロネットまでFAXもしくは郵送にてお送りください</p>
        <table class="table-info">
          <tr>
            <td class="title"><img src="{{ asset('') }}public/frontend/image/order/title1-table-index.png" alt="" /></td>
            <td>
              <a class="fl-left" href="{{ asset('') }}public/frontend/files/order/move/order_move-cojp.pdf" title=""><img src="{{ asset('') }}public/frontend/image/order/img-pdf.png" alt="" /></a>
              <a class="fl-right" href="{{route('frontend.order.move_cojp.index')}}" title=""><img src="{{ asset('') }}public/frontend/image/order/img-internet.png" alt="" /></a>
            </td>
          </tr>
          <tr>
            <td class="title"><img src="{{ asset('') }}public/frontend/image/order/title2-table-index.png" alt="" /></td>
            <td>
              <a class="fl-left" href="{{ asset('') }}public/frontend/files/order/move/order_move-jp.pdf" title=""><img src="{{ asset('') }}public/frontend/image/order/img-pdf.png" alt="" /></a>
              <a class="fl-right" href="{{route('frontend.order.move_jp.index')}}" title=""><img src="{{ asset('') }}public/frontend/image/order/img-internet.png" alt="" /></a>
            </td>
          </tr>
          <tr>
            <td class="title"><img src="{{ asset('') }}public/frontend/image/order/title3-table-index.png" alt="" /></td>
            <td>
              <a class="fl-left" href="{{ asset('') }}public/frontend/files/order/move/order_move-com.pdf" title=""><img src="{{ asset('') }}public/frontend/image/order/img-pdf.png" alt="" /></a>

              <a class="fl-right" href="{{route('frontend.order.move_com.index')}}" title=""><img src="{{ asset('') }}public/frontend/image/order/img-internet.png" alt="" /></a>
            </td>
          </tr>
        </table>
        <div class="box-info2">
          <h3><img src="{{ asset('') }}public/frontend/image/order/title1-h3-index.png" alt="" /></h3>
          <ul>
            <li><div class="icon">FAX</div><img src="{{ asset('') }}public/frontend/image/order/img-call.png" alt="" /></li>
            <li><div class="icon">郵送</div>〒710-0844　岡山県倉敷市福井125-7<br />株式会社チロロネット　レンタルサーバー担当　宛</li>
            
          </ul>
        </div>
      </div>
    </div>
</section>

<!-- End content -->
@endsection