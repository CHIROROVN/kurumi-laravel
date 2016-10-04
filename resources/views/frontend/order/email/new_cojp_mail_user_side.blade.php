///////////////////////////////////////////////////////////////



text.
///////////////////////////////////////////////////////////////

＊＊＊＊＊  御中
　　　　　　　　　　　　　　　　　　　　　　　{{date('Y')}}年{{date('m')}}月{{date('d')}}日
　　　　　　　　　　　　　　　　　　　　株式会社チロロネット
　　　　　　　　　　　　　　　　　　　　　カスタマーサポート

──────────────────────────────
  くるみサーバーのお申込みがありました
──────────────────────────────

くるみサーバーのお申込みがありました。

内容を確認してください。
↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓

------------------------------------------------------------
○お申込みサーバー情報
------------------------------------------------------------
お申込みプラン名　　　　　　　：{{$new_cojp['plan']}}
ドメイン名　　　　　　　　　　：{{$new_cojp['domain']}}
サービス開始希望日　　　　　　：{{$new_cojp['service']}} {{$new_cojp['year']}}/{{$new_cojp['month']}}/{{$new_cojp['day']}}
お支払い方法　　　　　　　　　：{{$new_cojp['paymonth']}}  {{$new_cojp['payinvoice']}}
・オプション　　　　　　　　　：{{$new_cojp['option']}}
外部バックアップ世代数追加　　：{{$new_cojp['generation']}}世代
IPアドレス追加　　　　　　　　：{{$new_cojp['individual']}}個
Plesk Web Pro Editionへの変更 　：{{$new_cojp['plesk']}}
WAF追加　　　　　　　　　　　：{{$new_cojp['waf']}}不要

------------------------------------------------------------
○ドメイン登録情報
------------------------------------------------------------
組織名（日本語）　　　　　　　：{{$new_cojp['organization_jp']}}
組織名（ふりがな）　　　　　　：{{$new_cojp['furigana']}}
組織名（英語）　　　　　　　　：{{$new_cojp['organization_en']}}
郵便番号　　　　　　　　　　　：{{$new_cojp['postal_code']}}
ご住所（日本語）　　　　　　　：{{$new_cojp['address_jp']}}
ご住所（英語）　　　　　　　　：{{$new_cojp['address_en']}}
登記年月日　　　　　　　　　　：{{$new_cojp['regist_date']}}
登記地住所　　　　　　　　　　：{{$new_cojp['regist_land_address']}}
代表者名（日本語）　　　　　　：{{$new_cojp['representative_jp']}}
代者者名（英語）　　　　　　　：{{$new_cojp['representative_en']}}
代表者肩書　　　　　　　　　　：{{$new_cojp['representative_title']}}

@if($new_cojp['domain_person_regist'] == '以下に入力')
登録担当者氏名（日本語）　　　：{{$new_cojp['domain_person_jp']}}
登録担当者氏名（英語）　　　　：{{$new_cojp['domain_person_en']}}
会社名・組織名　　　　　　　　：{{$new_cojp['company_name']}}
ご住所　　　　　　　　　　　　：{{$new_cojp['your_address']}}
部署名　　　　　　　　　　　　：{{$new_cojp['department']}}
役職名　　　　　　　　　　　　：{{$new_cojp['domain_title']}}
@endif
電話番号（ハイフンを除く）　　：{{$new_cojp['domain_phone']}}
FAX 　　　　　　　　　　　　　：{{$new_cojp['domain_fax']}}
メールアドレス　　　　　　　　：{{$new_cojp['domain_email']}}
DNSサーバー 　　　　　　　　　：
@if($new_cojp['dns_server'] == 1)
  チロロネットのDNSを利用する。
@elseif($new_cojp['dns_server'] == 2)
@if(!empty($new_cojp['dns_server_text3']))
  {{$new_cojp['dns_server_text3']}} 
@if(!empty($new_cojp['dns_server_text4']))@endif
@endif
@if(!empty($new_cojp['dns_server_text4']))
  {{$new_cojp['dns_server_text4']}}
@endif
@endif

------------------------------------------------------------
○SSL登録情報
------------------------------------------------------------
コモンネーム　　　　　　　　　：{{$new_cojp['common_name']}}
組織名（日本語）　　　　　　　：{{$new_cojp['organization_name_jp']}}
組織名（英語）　　　　　　　　：{{$new_cojp['organization_name_en']}}
都道府県・市区郡名（日本語）　：{{$new_cojp['prefectures_jp']}}
都道府県・市区郡名（英語）　　：{{$new_cojp['prefectures_en']}}
担当者名　　　　　　　　　　　：{{$new_cojp['name_person_charge']}}
電話番号（ハイフンを除く）　　：{{$new_cojp['phone_number']}}
FAX 　　　　　　　　　　　　　：{{$new_cojp['ssl_fax']}}
受信可能メールアドレス　　　　：{{$new_cojp['receive_mail_addrs']}}

@if($new_cojp['policy_contract_info'] == '以下に入力')
------------------------------------------------------------
○ご契約者について
------------------------------------------------------------
組織名　　　　　　　　　　　　：{{$new_cojp['policy_organization_name']}}
代表者名　　　　　　　　　　　：{{$new_cojp['policy_representative_name']}}
役職名　　　　　　　　　　　　：{{$new_cojp['policy_title']}}
氏名　　　　　　　　　　　　　：{{$new_cojp['policy_name']}}
所在地　　　　　　　　　　　　：{{$new_cojp['location']}}
@endif

@if($new_cojp['person_charge_info'] == '以下に入力')
------------------------------------------------------------
○ご担当者について
------------------------------------------------------------
組織名　　　　　　　　　　　　：{{$new_cojp['person_charge_organization_name']}}
氏名　　　　　　　　　　　　　：{{$new_cojp['person_charge_name']}}
部署名　　　　　　　　　　　　：{{$new_cojp['person_charge_dept_name']}}
役職名　　　　　　　　　　　　：{{$new_cojp['person_charge_title']}}
ご住所　　　　　　　　　　　　：{{$new_cojp['person_charge_zipcode']}}
@endif
連絡先TEL（ハイフンを除く） 　：{{$new_cojp['person_charge_tel']}}
連絡先FAX 　　　　　　　　　　：{{$new_cojp['person_charge_fax']}}
連絡先メールアドレス　　　　　：{{$new_cojp['person_charge_email_addrs']}}

------------------------------------------------------------
○ 備考
------------------------------------------------------------
<?php echo nl2br($new_cojp['remark']); ?>

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
