///////////////////////////////////////////////////////////////



text.
///////////////////////////////////////////////////////////////
──────────────────────────────
くるみサーバーをお申込みいただきありがとうございます
──────────────────────────────

このメールは、お申込みいただいた時点でお送りしている確認メー
ルです。
以下の通り、お申込を受理させていただきましたので、お知らせい
たします。

------------------------------------------------------------
○お申込みサーバー情報
------------------------------------------------------------
お申込みプラン名　　　　　　　：@if ( $data['app_plan_name'] == 1 )
おてがるプラン
@else
しっかりプラン
@endif
ドメイン名　　　　　　　　　　：{{$data['app_domain_name']}}
サービス開始希望日　　　　　　：@if ( $data['app_service_start_date'] == 1 )
希望なし（お申込みの翌営業日より2～3営業日目にサービス開始）
@else
希望あり
@endif
お支払い方法　　　　　　　　　：@if ( $data['app_payment_method_1'] == 1 )
月払い
@else
年払い
@endif
@if ( $data['app_payment_method_2'] == 1 )
請求書払い（振込手数料はお客様負担）
@else
クレジットカード払い
@endif
オプション　　　　　　：{{$data['app_option']}}
外部バックアップ世代数追加　　：{{$data['app_generation']}}
IPアドレス追加　　　　　　　　：{{$data['app_individual']}}
Plesk Web Pro Editionへの変更　：@if ( $data['app_plesk'] == 1 )
Plesk Web Pro Editionへグレードアップ
@endif
WAF追加　　　　　　　　　　　　：@if ( $data['app_waf'] == 1 )
WAF追加
@endif

------------------------------------------------------------
○ドメイン移管情報
------------------------------------------------------------
移管元事業者名　　　　　　　　：{{$data['domain_transfe']}}
ドメイン所有者　　　　　　　　：{{$data['domain_owner']}}
移管作業日　　　　　　　　　　：{{$data['domain_transfer_work_year']}}/{{$data['domain_transfer_work_month']}}/{{$data['domain_transfer_work_day']}}
公開連絡先　　　　　　　　　　：{{$data['domain_public_contact'] }}

@if ( $data['domain_registered_name'] == 1 )
登録担当者名
@elseif($data['domain_registered_name'] == 2)
以下情報を窓口として公開する
@else
ご契約ご担当者を窓口として公開する
@endif
ご住所（日本語）　　　　　　　　：{{$data['domain_address_japan']}}
電話番号（ハイフンを除く）　：{{ $data['domain_phone'] }}
メールアドレス　　　　　　　　　　：{{$data['domain_email']}}
@endif

------------------------------------------------------------
○SSL登録情報
------------------------------------------------------------
コモンネーム　　　　　　　　　：{{$data['ssl_common_name']}}
組織名（日本語）　　　　　　　　　：{{$data['ssl_organization_name_japan']}}
組織名（英語）　　　　　　　　　：{{$data['ssl_organization_name_english']}}
都道府県・市区郡名（日本語）　：{{ $data['ssl_county_name_japan'] }}
都道府県・市区郡名（英語）　：{{ $data['ssl_county_name_english'] }}
担当者名　　　　　　　　　　：{{$data['ssl_name_person']}}
電話番号（ハイフンを除く）　　　：{{$data['ssl_phone_number']}}
FAX　　　　　　　　　　　　　　：{{$data['ssl_fax']}}
@if(isset($data['ssl_email_address']))
受信可能メールアドレス
@if ( $data['ssl_email_address'] == 1 )
admin@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください
@elseif ( $data['ssl_email_address'] == 2 )
administrator@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください
@elseif ( $data['ssl_email_address'] == 3 )
hostmaster@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください
@elseif ( $data['ssl_email_address'] == 4 )
webmaster@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください
@elseif ( $data['ssl_email_address'] == 5 )
postmaster@ドメイン名　→　SSL申請後に確認メールが届くので、info@kurumiserver.jp へ、そのまま転送してください
@elseif ( $data['ssl_email_address'] == 6 )
未使用ドメインにつきお任せ
@endif
@endif

------------------------------------------------------------
○ご契約者について
------------------------------------------------------------
組織名　　　　　　　　　　　　：{{$data['policyholders_organization_name']}}
代表者名　　　　　　　　　　　　　：{{$data['policyholders_representative_name']}}
役職名　　　　　　　　　　　　：{{$data['policyholders_title']}}
氏名　　　　　　　　　　　　：{{$data['policyholders_name']}}
所在地　　　　　　　　　　　　：{{$data['policyholders_location']}}

------------------------------------------------------------
○ご担当者について
------------------------------------------------------------
組織名　　　　　　　　　　　　：{{$data['person_organization_name']}}
氏名　　　　　　　　　　　　　：{{$data['person_name']}}
部署名　　　　　　　　　　　　：{{$data['person_department_name']}}
役職名　　　　　　　　　　　　：{{ $data['person_title'] }}
ご住所　　　　　　　　　　　　：〒{{$data['person_your_address_1']}} 住所{{$data['person_your_address_2']}}
連絡先TEL（ハイフンを除く）　　　　　　　　　：{{$data['person_tel']}}
連絡先FAX　　　　　　　　　　：{{$data['person_fax']}}
連絡先メールアドレス　　　　　　　　　　：{{$data['person_email']}}

------------------------------------------------------------
○ 備考
------------------------------------------------------------
<?php echo nl2br($data['remarks']);?>

------------------------------------------------------------

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
 株式会社チロロネット カスタマーサポート
──────────────────────────────
   〒710-0844  岡山県倉敷市福井125-7
   TEL: 086-430-3956  /  FAX: 086-430-3957
   E-Mail: support@chiroro.com
   URL: http://www.chiroro.co.jp/
──────────────────────────────
 情報セキュリティマネジメントシステム ISO27001:2013認証取得
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
