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
お申込みプラン名　　　　　　　：{{$new_com['plan']}}
ドメイン名　　　　　　　　　　：{{$new_com['domain']}}
サービス開始希望日　　　　　　：{{$new_com['service']}}
お支払い方法　　　　　　　　　：{{$new_com['paymonth']}} {{$new_com['payinvoice']}}

・オプション　　　　　　　　　：{{$new_com['option']}}
外部バックアップ世代数追加　　：{{$new_com['generation']}}世代
IPアドレス追加　　　　　　　　：{{$new_com['individual']}}個
Plesk Web Pro Editionへの変更　：{{$new_com['plesk']}}
WAF追加　　　　　　　　　　　：{{$new_com['waf']}}

------------------------------------------------------------
○ドメイン登録情報
------------------------------------------------------------
組織名（日本語）　　　　　　　：{{$new_com['dns_organization_jp']}}
組織名（英語）　　　　　　　　：{{$new_com['dns_organization_en']}}
郵便番号　　　　　　　　　　　：{{$new_com['dns_owner_name']}}
部署名　　　　　　　　　　　　：{{$new_com['dns_dept_name']}}
役職名　　　　　　　　　　　　：{{$new_com['dns_title']}}
ご住所（日本語）　　　　　　　：{{$new_com['dns_addrs_jp']}}
ご住所（英語）　　　　　　　　：{{$new_com['dns_addrs_en']}}
電話番号（ハイフンを除く）　　：{{$new_com['dns_phone']}}
FAX　　　　　　　　　　　　　：{{$new_com['dns_fax']}}
メールアドレス　　　　　　　　：{{$new_com['dns_email_addrs']}}
DNSサーバー　　　　　　　　　：
@if($new_com['dns_server'] == 1)
  チロロネットのDNSを利用する。
@elseif($new_com['dns_server'] == 2)
@if(!empty($new_com['dns_server_text3']))
  {{$new_com['dns_server_text3']}} 
@if(!empty($new_com['dns_server_text4']))@endif
@endif
@if(!empty($new_com['dns_server_text4']))
  {{$new_com['dns_server_text4']}}
@endif
@endif

------------------------------------------------------------
○SSL登録情報
------------------------------------------------------------
コモンネーム　　　　　　　　　：{{$new_com['common_name']}}
組織名（日本語）　　　　　　　：{{$new_com['organization_name_jp']}}
組織名（英語）　　　　　　　　：{{$new_com['organization_name_en']}}
都道府県・市区郡名（日本語）　：{{$new_com['prefectures_jp']}}
都道府県・市区郡名（英語）　　：{{$new_com['prefectures_en']}}
担当者名　　　　　　　　　　　：{{$new_com['name_person_charge']}}
電話番号（ハイフンを除く）　　：{{$new_com['phone_number']}}
FAX 　　　　　　　　　　　　　：{{$new_com['ssl_fax']}}
受信可能メールアドレス　　　　：{{$new_com['receive_mail_addrs']}}

@if($new_com['policy_contract_info'] == '以下に入力')
------------------------------------------------------------
○ご契約者について
------------------------------------------------------------
組織名　　　　　　　　　　　　： {{$new_com['policy_organization_name']}}
代表者名　　　　　　　　　　　：{{$new_com['policy_representative_name']}}
役職名　　　　　　　　　　　　：{{$new_com['policy_title']}}
氏名　　　　　　　　　　　　　：{{$new_com['policy_name']}}
所在地　　　　　　　　　　　　：{{$new_com['location']}}
@endif

------------------------------------------------------------
○ご担当者について
------------------------------------------------------------
@if($new_com['person_charge_info'] == '以下に入力')
組織名　　　　　　　　　　　　：{{$new_com['person_charge_organization_name']}}
氏名　　　　　　　　　　　　　：{{$new_com['person_charge_name']}}
部署名　　　　　　　　　　　　：{{$new_com['person_charge_dept_name']}}
役職名　　　　　　　　　　　　：{{$new_com['person_charge_title']}}
ご住所　　　　　　　　　　　　：{{$new_com['person_charge_zipcode']}} {{$new_com['person_charge_your_addrs']}}住所
@endif
連絡先TEL（ハイフンを除く）　：{{$new_com['person_charge_tel']}}
連絡先FAX 　　　　　　　　　　：{{$new_com['person_charge_fax']}}
連絡先メールアドレス　　　　　：{{$new_com['person_charge_email_addrs']}}

------------------------------------------------------------
○ 備考
------------------------------------------------------------
<?php echo nl2br($new_com['remark']);?>

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
