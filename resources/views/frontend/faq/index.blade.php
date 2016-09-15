@extends('frontend.frontend')

@section('content')
<section class="clear" id="faq">
  <div class="container">
    <h1 class="title-content"><img src="{{ asset('') }}public/frontend/image/faq/title-index.png" alt="" /></h1>
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
    
    <div id="faqWrap" class="clear">
      <div class="content">
        <p>チロロネットのくるみサーバーサービスで、よくあるご質問をまとめております。</p>
        <ul class="faqCat clear">
          <li><a href="#c01">機能について</a></li>
          <li><a href="#c02">サポートについて</a></li>
          <li><a href="#c03">セキュリティについて</a></li>
        </ul>
        <ul class="faqCat clear" style="margin-bottom: 20px;">
          <li><a href="#c04">バックアップについて</a></li>
          <li><a href="#c05">データセンターについて</a></li>
          <li><a href="#c06">手続きについて</a></li>
        </ul>
      </div>
    <h2 id="c01">機能について</h2>
      <div class="content">
        <dl>
          <dt>root権限のアカウントは使用可能でしょうか？</dt>
          <dd><p>くるみサーバーではrootアカウントをお渡しいたしますので、ご使用いただくことが可能です。</p>
          </dd>
          <dt>HDDの容量やメモリのリソースが足らなくなったら、自動で増えますか？</dt>
          <dd><p>自動でリソースが追加されることはございません。<br>
            仮想サーバーのリソースが不足した際は、プラン変更を行うことで容量を増やすことが可能です。<br>
    リソースを増やす際は、データ移設及びサーバー停止を行うことなく増やすことが可能です。</p>
          </dd>
          <dt>Webメールは使えますか？ </dt>
          <dd><p>くるみサーバーではWebメールをご利用いただくことが可能です。<br>
    標準でroundcubeというWebメーラーをインストールしています。</p></dd>
          <dt>Webメールはどのようにアクセスするのでしょうか？</dt>
          <dd>
            <p>お使いのブラウザにて、http://webmail.[ドメイン名]/にてアクセスいただくことが可能です。<br>
            ※弊社DNSをご利用の際は、標準でwebmail.～でアクセス可能なよう設定しますが、<br>
            他社DNSサーバーをご利用の際は、webmai.～のzone設定を行っていただく必要があります。</p>
          </dd>
          <dt>DNSサーバーは利用可能でしょうか？</dt>
          <dd><p>くるみサーバーをご利用いただく場合は、プライマリ・セカンダリDNSサーバーを無償にて提供いたします。</p>
          </dd>
          <dt>ドメインやサブドメインを自分で設定することは可能でしょうか？</dt>
          <dd><p>ドメインとサブドメインを任意で追加いただくことが可能です。<br>
              <a href="http://support.kurumiserver.jp/man/plesk/domain/">http://support.kurumiserver.jp/man/plesk/domain/</a></p>
          </dd>
          <dt>マルチドメインはいくつまで追加できますか？</dt>
          <dd><p>マルチドメインは合計10個まで設定いただけます。<br>
            11ドメイン以上のご利用をご希望の場合は、PleskWebProEditionへの バージョンアップいただくことで30ドメインまでご利用いただくことが可能です。<br>
            31ドメイン以上のご利用をご希望の場合は、別途弊社カスタマーサポートまでご相談ください。</p>
          </dd>
          <dt>VPNを構築することは出来ますか？</dt>
          <dd>
            <p>くるみサーバーではVPNを構築することが出来ません。<br>
              VPNをご利用になる場合は 専用サーバーのオプションにてご利用いただくことが可能です。</p>
          </dd>
          <dt>メールの利用可能プロトコルはなんですか？</dt>
          <dd>
            <p>くるみサーバーでは、POP3,IMAP,SMTP,POP3S,IMAPS,SMTPSに対応しています。</p>
          </dd>
          <dt>PostgreSQLは利用可能でしょうか。</dt>
          <dd>標準ではご利用いただけないため、PostgreSQLをご利用ご希望の際は、カスタマーサポートまでご相談ください。</dd>
        </dl>
      </div>
    <h2 id="c02">サポートについて</h2>
      <div class="content">
        <dl>
          <dt>サポート受付時間はいつですか？</dt>
          <dd>
            <p>24時間365日サポート対応・障害対応を行っています。<br>
            万が一のサーバートラブル時は、お客さまの承諾を受けた上での緊急メンテナンスの実施のほか、セキュリティアップデートの代行も行っています。 </p>
          </dd>
          <dt>サーバー再起動などは24時間対応可能でしょうか？</dt>
          <dd>
            <p>電源リセットにつきましては、お客さまからお申し出をいただいてから、弊社技術スタッフがコンソール画面にて症状を確認した上で、無償にてリセット操作を行います。<br>
            その後、弊社技術スタッフによる復元作業などが発生した際は、作業費は有償となります。</p>
          </dd>
        </dl>
      </div>
    <h2 id="c03">セキュリティについて</h2>
      <div class="content">
        <dl>
          <dt>ファイアウォールはついていますか？</dt>
          <dd><p>ファイアウォールは、標準で共有ファイアウォールをご利用いただくことが可能です。</p>
          </dd>
          <dt>アクセス制限はされていますか？</dt>
          <dd><p>標準でファイアウォールにてアクセス制限を実施しています。<br>
            アクセス制限解除の際は、アクセス制限実施・解除依頼をお願いします。<br>
            <a href="https://www.chiroro.co.jp/acc/">https://www.chiroro.co.jp/acc/</a></p>
          </dd>      <dt>スパムメール対策はありますか？</dt>
          <dd>
            <p>ファイアウォールのスパム対策機能及び、くるみサーバーでは標準でSpamAssasinというスパムフィルタをご利用いただくことが可能です。</p>
          </dd>    
        </dl>
      </div> 
    <h2 id="c04">バックアップについて</h2>
      <div class="content">  
        <dl>
          <dt>外部バックアップはどこに取っていますか？</dt>
          <dd><p>外部バックアップは、同一データセンター内の別サーバーにバックアップを取っています。</p>
          </dd>
          <dt>データを消失してしまったとき、外部バックアップからのデータは復旧してもらますか？</dt>
          <dd><p>月に1回までは無償にてバックアップデータからの復旧が可能です。<br>
            ※2回目以降は、作業費用として、15,000円(税別)/1回が別途必要となってしまいます。</p>
          </dd>
        </dl>
      </div>
    <h2 id="c05">データセンターについて</h2>
      <div class="content">
        <dl>
          <dt>データセンターはどこですか？サーバーはどこにありますか？</dt>
          <dd><p>データセンター（サーバー）は、岡山県内にあります。</p>
          </dd>
        </dl>
      </div>
    <h2 id="c06">手続きについて</h2>
      <div class="content">
        <dl>
          <dt>サービス利用中に、支払い方法を変更したい場合の手続きはどのようにしたらよいでしょうか？ </dt>
          <dd><p>お支払い方法変更申込書にご記入いただき、郵送またはFAXにてお送りください。 <br>
              <a href="http://support.kurumiserver.jp/service/contract/">http://support.kurumiserver.jp/service/contract/</a> </p>
          </dd>
          <dt>最低契約期間はありますか？</dt>
          <dd><p>サーバーサービスの最低契約期間は、課金開始日より3ヶ月間です。<a href="http://support.kurumiserver.jp/service/contract/"></a> </p>
          </dd>
          <dt>サービスを解約したいのですが。</dt>
          <dd><p>レンタルサーバー解約申込書にご記入いただき、解約月の20日までに郵送でお送りください。 FAXでは受理いたしません。 <a href="http://support.kurumiserver.jp/service/cancel/">http://support.kurumiserver.jp/service/cancel/</a></p>
          </dd>
          <dt>利用できるクレジットカードの種類を教えてください。</dt>
          <dd><p>ご利用いただけるクレジットカードは以下の通りです。<br>
            JCB・VISA・MasterCard・American Express<a href="http://support.kurumiserver.jp/service/cancel/"></a></p>
          </dd>
        </dl>
      </div>
  </div>
  </div>
</section>
@endsection