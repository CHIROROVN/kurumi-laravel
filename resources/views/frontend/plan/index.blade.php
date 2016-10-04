@extends('frontend.frontend')

@section('content')
<!--Content -->
<section class="clear" id="plan">
  <div class="container">
    <h1 class="title-content">プラン</h1>
    <h2 class="title">プランの比較表</h2>
    <img class="info1" src="{{ asset('') }}public/frontend/image/top/img-frame03.png" alt="" />
    <script type="text/javascript" src="{{ asset('') }}public/frontend/common/js/bootstrap.min.js"></script>
    <div class="info2  table-responsive">
      <table>
        <tr>
          <td colspan="4" class="title">オプション</td>
        </tr>
        <tr>
          <td class="title2" colspan="2"></td>
          <td class="title2"><img src="{{ asset('') }}public/frontend/image/plan/title1-td.png" alt="" /></td>
          <td class="title2"><img src="{{ asset('') }}public/frontend/image/plan/title2-td.png" alt="" /></td>
        </tr>
        <tr>
          <td class="col-title col-yellow" rowspan="3">外部バックアップ世代数追加（1世代あたり）</td>
          <td><p class="font-big">初期設定費<p></td>
          <td><p class="font-big">5,400円(税込)</p><p>〈税抜5,000円〉</p></td>
          <td><p class="font-big">5,400円(税込)</p><p>〈税抜5,000円〉</p></td>
        </tr>
        <tr class="col-yellow">
          <td><p class="font-big">毎月払い利用料<p></td>
          <td><p class="font-big">864円(税込)</p><p>〈税抜800円〉</p></td>
          <td><p class="font-big">1,296円(税込)</p><p>〈税抜1,200円〉</p></td>
        </tr>
        <tr>
          <td><p class="font-big">年一括前払い利用料<p></td>
          <td><p class="font-big">10,368円(税込)</p><p>〈税抜9,600円〉</p></td>
          <td><p class="font-big">15,552円(税込)</p><p>〈税抜14,400円〉</p></td>
        </tr>
        <tr>
          <td class="col-title" rowspan="3">IPアドレス追加（1個あたり）※最大合計3個</td>
          <td class="col-yellow"><p class="font-big">初期設定費<p></td>
          <td class="col-yellow"  colspan="2"><p class="font-big">2,160円(税込)</p><p>〈税抜2,000円〉</p></td>
        </tr>
        <tr>
          <td><p class="font-big">毎月払い利用料<p></td>
          <td colspan="2"><p class="font-big">2,160円(税込)</p><p>〈税抜2,000円〉</p></td>
        </tr>
        <tr class="col-yellow">
          <td><p class="font-big">年一括前払い利用料<p></td>
          <td colspan="2"><p class="font-big">25,920円(税込)</p><p>〈税抜24,000円〉</p></td>
        </tr>
        
        <tr>
          <td class="col-title col-yellow" rowspan="3">Plesk Web Pro Editionへの変更<br />    ※30ドメインまでマルチドメイン可<br />
          （ログインIDの個別作成可）</td>
          <td><p class="font-big">初期設定費<p></td>
          <td colspan="2"><p class="font-big">5,400円(税込)</p><p>〈税抜5,000円〉</p></td>
        </tr>
        <tr class="col-yellow">
          <td><p class="font-big">毎月払い利用料<p></td>
          <td colspan="2"><p class="font-big">2,700円(税込)</p><p>〈税抜2,500円〉</p></td>
        </tr>
        <tr>
          <td><p class="font-big">年一括前払い利用料<p></td>
          <td colspan="2"><p class="font-big">32,400円(税込)</p><p>〈税抜30,000円〉</p></td>
        </tr>
        
         <tr>
          <td class="col-title" rowspan="3">WAF追加（※2）</td>
          <td class="col-yellow"><p class="font-big">初期設定費<p></td>
          <td class="col-yellow" colspan="2"><p class="font-big">5,400円(税込)</p><p>〈税抜5,000円〉</p></td>
        </tr>
        <tr class="col-yellow">
          <td><p class="font-big">毎月払い利用料<p></td>
          <td colspan="2"><p class="font-big">3,456円(税込)</p><p>〈税抜3,200円〉</p></td>
        </tr>
        <tr>
          <td><p class="font-big">年一括前払い利用料<p></td>
          <td colspan="2"><p class="font-big">41,472円(税込)</p><p>〈税抜38,400円〉</p></td>
        </tr>
      </table>
    </div>
    <p class="option">
      （※1）独自ドメインSSL証明書は、JPRS SSLのドメイン認証タイプを採用しています。<br />
      （※2）WAFは、CloudFlareのServerShield Plus Advancedを採用しています。<br />
      （※3）WordPressが不要な場合は、初期設定費が1,080円（税込）〈税抜1,000円〉引きとなります。<br />
      （※4）オプションで30ドメイン/ログインID個別作成のPlesk Web Pro Editionに変更することも可能です。<br/>
      ※〈毎月払いの場合〉仮サービス開始日から15日以内に、【初期費用】+【月額費用】×1ヶ月分をお支払いください。以降、2ヶ月目より毎月、【月額費用】を申し受けます。解約をされる場合は、解約希望日の10日前までにお知らせください。なお、最低契約期間は本サービス開始日より3ヶ月間です。3ヶ月以内にサーバー解約する場合でも、3ヶ月分の月額費用はお支払いください。<br />
      ※〈年一括前払いの場合〉仮サービス開始日から15日以内に、【初期費用】+【年額費用】×1年分をお支払いください。契約途中でサーバーを解約される場合、返金はできかねますのでご了承ください。
    </p>
  </div>
</section>
<!-- End content -->
@endsection