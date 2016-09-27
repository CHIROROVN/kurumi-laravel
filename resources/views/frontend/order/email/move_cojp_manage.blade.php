subject:<br />
【くるみサーバー】ドメイン移管（属性JPドメイン）お申込みがありました。<br />
///////////////////////////////////////////////////////////////<br />
<br />
<br />
<br />
text.<br />
///////////////////////////////////////////////////////////////<br />
──────────────────────────────<br />
           くるみサーバーのお申込みがありました<br />
──────────────────────────────<br />
<br />
くるみサーバーのお申込みがありました。<br />
<br />
内容を確認してください。<br />
↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓<br />
<br />
──────────────────────────────<br />
    くるみサーバーをお申込みいただきありがとうございます<br />
──────────────────────────────<br />
<br />
このメールは、お申込みいただいた時点でお送りしている確認メー<br />
ルです。<br />
以下の通り、お申込を受理させていただきましたので、お知らせい<br />
たします。<br />
<br />
------------------------------------------------------------<br />
○お申込みサーバー情報<br />
------------------------------------------------------------<br />
<table border="0">
	<tr>
		<td>お申込みプラン名</td>
		<td>
			@if ( $data['app_plan_name'] == 1 )
			:おてがるプラン
			@else
			:しっかりプラン
			@endif
		</td>
	</tr>
	<tr>
		<td>ドメイン名</td>
		<td>:{{ $data['app_domain_name'] }}</td>
	</tr>
	<tr>
		<td>サービス開始希望日</td>
		<td>
			@if ( $data['app_service_start_date'] == 1 )
			:希望なし（お申込みの翌営業日より2～3営業日目にサービス開始）
			@else
			:希望あり
			@endif
		</td>
	</tr>
	<tr>
		<td>お支払い方法</td>
		<td>
			@if ( $data['app_payment_method_1'] == 1 )
			:月払い
			@else
			:年払い
			@endif 
			@if ( $data['app_payment_method_2'] == 1 )
			請求書払い（振込手数料はお客様負担）
			@else
			クレジットカード払い
			@endif
		</td>
	</tr>
	<tr><td></td><td>&nbsp;</td></tr>
	<tr>
		<td>・オプション</td>
		<td>:{{ $data['app_option'] }}</td>
	</tr>
	<tr>
		<td>外部バックアップ世代数追加</td>
		<td>:{{ $data['app_generation'] }}</td>
	</tr>
	<tr>
		<td>IPアドレス追加</td>
		<td>:{{ $data['app_individual'] }}</td>
	</tr>
	<tr>
		<td>Plesk Web Pro Editionへの変更</td>
		<td>
			@if ( $data['app_plesk'] == 1 )
			:Plesk Web Pro Editionへグレードアップ
			@endif
		</td>
	</tr>
	<tr>
		<td>WAF追加</td>
		<td>
			@if ( $data['app_waf'] == 1 )
			:WAF追加
			@endif
		</td>
	</tr>
</table>
<br />
------------------------------------------------------------<br />
○ドメイン移管情報<br />
------------------------------------------------------------<br />
<table border="0">
	<tr>
		<td>移管元事業者名</td>
		<td>:{{ $data['domain_transfe'] }}</td>
	</tr>
	<tr>
		<td>ドメイン所有者</td>
		<td>:{{ $data['domain_owner'] }}</td>
	</tr>
	<tr>
		<td>移管作業日</td>
		<td>:{{ $data['domain_transfer_work_year'] }}/{{ $data['domain_transfer_work_month'] }}/{{ $data['domain_transfer_work_day'] }}</td>
	</tr>
</table>
<br />
------------------------------------------------------------<br />
○SSL登録情報<br />
------------------------------------------------------------<br />
<table border="0">
	<tr>
		<td>コモンネーム</td>
		<td>:{{ $data['ssl_common_name'] }}</td>
	</tr>
	<tr>
		<td>組織名（日本語）</td>
		<td>:{{ $data['ssl_organization_name_japan'] }}</td>
	</tr>
	<tr>
		<td>組織名（英語）</td>
		<td>:{{ $data['ssl_organization_name_english'] }}</td>
	</tr>
	<tr>
		<td>都道府県・市区郡名（日本語）</td>
		<td>:{{ $data['ssl_county_name_japan'] }}</td>
	</tr>
	<tr>
		<td>都道府県・市区郡名（英語）</td>
		<td>:{{ $data['ssl_county_name_english'] }}</td>
	</tr>
	<tr>
		<td>担当者名</td>
		<td>:{{ $data['ssl_name_person'] }}</td>
	</tr>
	<tr>
		<td>電話番号（ハイフンを除く）</td>
		<td>:{{ $data['ssl_phone_number'] }}</td>
	</tr>
	<tr>
		<td>FAX</td>
		<td>:{{ $data['ssl_fax'] }}</td>
	</tr>
	@if(isset($data['ssl_email_address']))
	<tr>
		<td>受信可能メールアドレス</td>
		<td>
			@if ( $data['ssl_email_address'] == 1 )
			:admin@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください
			@elseif ( $data['ssl_email_address'] == 2 )
			:administrator@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください
			@elseif ( $data['ssl_email_address'] == 3 )
			:hostmaster@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください
			@elseif ( $data['ssl_email_address'] == 4 )
			:webmaster@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください
			@elseif ( $data['ssl_email_address'] == 5 )
			:postmaster@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください
			@elseif ( $data['ssl_email_address'] == 6 )
			:未使用ドメインにつきお任せ
			@endif
		</td>
	</tr>
	@endif
</table>
<br />
------------------------------------------------------------<br />
○ご契約者について<br />
------------------------------------------------------------<br />
ご契約者情報　　　　　　　　　：<br />
<table border="0">
	<tr>
		<td>組織名</td>
		<td>:{{ $data['policyholders_organization_name'] }}</td>
	</tr>
	<tr>
		<td>代表者名</td>
		<td>:{{ $data['policyholders_representative_name'] }}</td>
	</tr>
	<tr>
		<td>役職名</td>
		<td>:{{ $data['policyholders_title'] }}</td>
	</tr>
	<tr>
		<td>氏名</td>
		<td>:{{ $data['policyholders_name'] }}</td>
	</tr>
	<tr>
		<td>所在地</td>
		<td>:{{ $data['policyholders_location'] }}</td>
	</tr>
</table>
<br />
------------------------------------------------------------<br />
○ご担当者について<br />
------------------------------------------------------------<br />
ご担当者情報　　　　　　　　　：<br />
<table border="0">
	<tr>
		<td>組織名</td>
		<td>:{{ $data['person_organization_name'] }}</td>
	</tr>
	<tr>
		<td>氏名</td>
		<td>:{{ $data['person_name'] }}</td>
	</tr>
	<tr>
		<td>部署名</td>
		<td>:{{ $data['person_department_name'] }}</td>
	</tr>
	<tr>
		<td>役職名</td>
		<td>:{{ $data['person_title'] }}</td>
	</tr>
	<tr>
		<td>ご住所</td>
		<td>:〒{{ $data['person_your_address_1'] }} 住所{{ $data['person_your_address_2'] }}</td>
	</tr>
	<tr>
		<td>連絡先TEL（ハイフンを除く）</td>
		<td>:{{ $data['person_tel'] }}</td>
	</tr>
	<tr>
		<td>連絡先FAX</td>
		<td>:{{ $data['person_fax'] }}</td>
	</tr>
	<tr>
		<td>連絡先メールアドレス</td>
		<td>:{{ $data['person_email'] }}</td>
	</tr>
</table>
<br />
------------------------------------------------------------<br />
○ 備考<br />
------------------------------------------------------------<br />
{{ $data['remarks'] }}<br />
<br />
------------------------------------------------------------<br />
<br />
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━<br />
 株式会社チロロネット カスタマーサポート<br />
──────────────────────────────<br />
   〒710-0844  岡山県倉敷市福井125-7<br />
   TEL: 086-430-3956  /  FAX: 086-430-3957<br />
   E-Mail: support@chiroro.com<br />
   URL: http://www.chiroro.co.jp/<br />
──────────────────────────────<br />
 情報セキュリティマネジメントシステム ISO27001:2013認証取得<br />
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━<br />