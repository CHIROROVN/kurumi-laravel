@extends('frontend.frontend')

@section('content')
<!--Content -->

<section class="clear" id="order">
    <div class="container">
      <h1 class="title-content"><img src="{{ asset('') }}public/frontend/image/order/title-index.png" alt="" /></h1>
      <div class="top clear">
        <img class="fl-left" src="{{ asset('') }}public/frontend/image/order/img1-index.png" alt="" />
        <img class="fl-right" src="{{ asset('') }}public/frontend/image/order/img2-index.png" alt="" />
      </div>
      <h2 class="title"><img src="{{ asset('') }}public/frontend/image/order/title-h2-index.png" alt="" /></h2>
      <div class="content">
        <p>PDFでお申込みの場合、以下より必要な書面をダウンロードしていただき、<br />
           ご記入・ご捺印の上、チロロネットまでFAXもしくは郵送にてお送りください。</p>
        <table class="table-info">
          <tr>
            <td class="title"><img src="{{ asset('') }}public/frontend/image/order/title1-table-index.png" alt="" /></td>
            <td>
              <a class="fl-left" href="" title=""><img src="{{ asset('') }}public/frontend/image/order/img-pdf.png" alt="" /></a>
              <a class="fl-right" href="" title=""><img src="{{ asset('') }}public/frontend/image/order/img-internet.png" alt="" /></a>
            </td>
          </tr>
          <tr>
            <td class="title"><img src="{{ asset('') }}public/frontend/image/order/title2-table-index.png" alt="" /></td>
            <td>
              <a class="fl-left" href="" title=""><img src="{{ asset('') }}public/frontend/image/order/img-pdf.png" alt="" /></a>
              <a class="fl-right" href="" title=""><img src="{{ asset('') }}public/frontend/image/order/img-internet.png" alt="" /></a>
            </td>
          </tr>
          <tr>
            <td class="title"><img src="{{ asset('') }}public/frontend/image/order/title3-table-index.png" alt="" /></td>
            <td>
              <a class="fl-left" href="" title=""><img src="{{ asset('') }}public/frontend/image/order/img-pdf.png" alt="" /></a>
              <a class="fl-right" href="" title=""><img src="{{ asset('') }}public/frontend/image/order/img-internet.png" alt="" /></a>
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
      <h2 class="title"><img src="{{ asset('') }}public/frontend/image/order/title2-h2-index.png" alt="" /></h2>
      <div class="content">
        <p>PDFでお申込みの場合、以下より必要な書面をダウンロードしていただき、<br />
            ご記入・ご捺印の上、チロロネットまでFAXもしくは郵送にてお送りください</p>
        <table class="table-info">
          <tr>
            <td class="title"><img src="{{ asset('') }}public/frontend/image/order/title1-table-index.png" alt="" /></td>
            <td>
              <a class="fl-left" href="" title=""><img src="{{ asset('') }}public/frontend/image/order/img-pdf.png" alt="" /></a>
              <a class="fl-right" href="" title=""><img src="{{ asset('') }}public/frontend/image/order/img-internet.png" alt="" /></a>
            </td>
          </tr>
          <tr>
            <td class="title"><img src="{{ asset('') }}public/frontend/image/order/title2-table-index.png" alt="" /></td>
            <td>
              <a class="fl-left" href="" title=""><img src="{{ asset('') }}public/frontend/image/order/img-pdf.png" alt="" /></a>
              <a class="fl-right" href="" title=""><img src="{{ asset('') }}public/frontend/image/order/img-internet.png" alt="" /></a>
            </td>
          </tr>
          <tr>
            <td class="title"><img src="{{ asset('') }}public/frontend/image/order/title3-table-index.png" alt="" /></td>
            <td>
              <a class="fl-left" href="" title=""><img src="{{ asset('') }}public/frontend/image/order/img-pdf.png" alt="" /></a>
              <a class="fl-right" href="" title=""><img src="{{ asset('') }}public/frontend/image/order/img-internet.png" alt="" /></a>
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