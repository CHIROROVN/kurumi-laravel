────────────────────────────── <br />
  くるみサーバーのお申込みがありました <br />
────────────────────────────── <br /> <br />

くるみサーバーのお申込みがありました。 <br />

内容を確認してください。 <br />
↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ <br /> <br />

------------------------------------------------------------ <br />
○お申込みサーバー情報 <br />
------------------------------------------------------------
お申込みプラン名　　　　　　　：{{$new_com['plan']}} <br />
ドメイン名　　　　　　　　　　：{{$new_com['domain']}} <br />
サービス開始希望日　　　　　　：{{$new_com['service']}} <br />
お支払い方法　　　　　　　　　：{{$new_com['paymonth']}} {{$new_com['payinvoice']}} <br />

・オプション             ：{{$new_com['option']}} <br />
外部バックアップ世代数追加　　：{{$new_com['generation']}}世代 <br />
IPアドレス追加　　　　　　　　：{{$new_com['individual']}}個 <br />
Plesk Web Pro Editionへの変更 ：{{$new_com['plesk']}} <br />
WAF追加　　　　　　　　　　　 ：{{$new_com['waf']}} <br /><br />

------------------------------------------------------------ <br />
○ドメイン登録情報 <br />
------------------------------------------------------------ <br />
組織名（日本語）　　　　　　　：{{$new_com['dns_organization_jp']}} <br />
組織名（英語）　　　　　　　　：{{$new_com['dns_organization_en']}} <br />
郵便番号　　　　　　　　　　　：{{$new_com['dns_owner_name']}} <br />
部署名　　　　　　　　　　　：{{$new_com['dns_dept_name']}} <br />
役職名　　　　　　　　　　　：{{$new_com['dns_title']}} <br />
ご住所（日本語）　　　　　　　：{{$new_com['dns_addrs_jp']}} <br />
ご住所（英語）　　　　　　　　：{{$new_com['dns_addrs_en']}} <br />
電話番号　　　　　　　　　　　：{{$new_com['dns_phone']}} <br />
FAX 　　　　　　　　　　　　　：{{$new_com['dns_fax']}} <br />
メールアドレス　　　　　　　　：{{$new_com['dns_email_addrs']}} <br />
DNSサーバー 　　　　　　　　　：{{$new_com['dns_server']}} <br /><br />

------------------------------------------------------------ <br />
○SSL登録情報 <br />
------------------------------------------------------------ <br />
コモンネーム　　　　　　　　　：{{$new_com['common_name']}} <br />
組織名（日本語）　　　　　　　：{{$new_com['organization_name_jp']}} <br />
組織名（英語）　　　　　　　　：{{$new_com['organization_name_en']}} <br />
都道府県・市区郡名（日本語）　：{{$new_com['prefectures_jp']}} <br />
都道府県・市区郡名（英語）　　：{{$new_com['prefectures_en']}} <br />
担当者名　　　　　　　　　　　：{{$new_com['name_person_charge']}} <br />
電話番号　　　　　　　　　　　：{{$new_com['phone_number']}} <br />
FAX 　　　　　　　　　　　　　：{{$new_com['ssl_fax']}} <br />
受信可能メールアドレス　　　　：{{$new_com['receive_mail_addrs']}} <br /><br />

@if($new_com['policy_contract_info'] == '以下に入力')
------------------------------------------------------------ <br />
○ご契約者について <br />
------------------------------------------------------------ <br />
組織名　　　　　　　　　　　　： {{$new_com['policy_organization_name']}} <br />
代表者名　　　　　　　　　　　：{{$new_com['policy_representative_name']}} <br />
役職名　　　　　　　　　　　　：{{$new_com['policy_title']}} <br />
氏名　　　　　　　　　　　　　：{{$new_com['policy_name']}} <br />
所在地　　　　　　　　　　　　：{{$new_com['location']}} <br /><br />
@endif

------------------------------------------------------------ <br />
○ご担当者について <br />
------------------------------------------------------------ <br />
@if($new_com['person_charge_info'] == '以下に入力')
組織名　　　　　　　　　　　　：{{$new_com['person_charge_organization_name']}} <br />
氏名　　　　　　　　　　　　　：{{$new_com['person_charge_name']}} <br />
部署名　　　　　　　　　　　　：{{$new_com['person_charge_dept_name']}} <br />
役職名　　　　　　　　　　　　：{{$new_com['person_charge_title']}} <br />
ご住所　　　　　　　　　　　　：{{$new_com['person_charge_zipcode']}} {{$new_com['person_charge_your_addrs']}}住所 <br />
@endif
連絡先TEL 　　　　　　　　　　：{{$new_com['person_charge_tel']}} <br />
連絡先FAX 　　　　　　　　　　：{{$new_com['person_charge_fax']}} <br />
連絡先メールアドレス　　　　　：{{$new_com['person_charge_email_addrs']}} <br /><br />

------------------------------------------------------------ <br />
○ 備考 <br />
------------------------------------------------------------ <br />
<?php echo nl2br($new_com['remark']);?> <br />

------------------------------------------------------------ <br /><br />

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ <br />
 株式会社チロロネット カスタマーサポート <br />
────────────────────────────── <br />
   〒710-0844  岡山県倉敷市福井125-7 <br />
   TEL: 086-430-3956  /  FAX: 086-430-3957 <br />
   E-Mail: support@chiroro.com <br />
   URL: http://www.chiroro.co.jp/ <br />
────────────────────────────── <br />
 情報セキュリティマネジメントシステム ISO27001:2013認証取得 <br />
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ <br />
