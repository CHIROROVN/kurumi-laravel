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
お申込みプラン名　　　　　　　　　：{{$new_jp['plan']}}
ドメイン名　　　　　　　　　　　　：{{$new_jp['domain']}}
サービス開始希望日　　　　　　　　：{{$new_jp['service']}}
お支払い方法　　　　　　　　　　　：{{$new_jp['paymonth']}} {{$new_jp['payinvoice']}}

.オプション　　　　　　　　　　　　：{{$new_jp['option']}}
外部バックアップ世代数追加　　　　：{{$new_jp['generation']}}世代
IPアドレス追加　　　　　　　　　　：{{$new_jp['individual']}}個
Plesk Web Pro Editionへの変更　　　：{{$new_jp['plesk']}}
WAF追加　　　　　　　　　　　　　：{{$new_jp['waf']}}

------------------------------------------------------------
○ドメイン登録情報
------------------------------------------------------------
組織名（日本語）　　　　　　　　　：{{$new_jp['dns_organization_jp']}} 株式会社チロロネット
組織名（英語）　　　　　　　　　　：{{$new_jp['dns_organization_en']}}
登録担当者名　　　　　　　　　　　：{{$new_jp['dns_owner_name']}}
部署名　　　　　　　　　　　　　　：{{$new_jp['dns_dept_name']}}
役職名　　　　　　　　　　　　　　：{{$new_jp['dns_title']}}
ご住所（日本語）　　　　　　　　　：{{$new_jp['dns_addrs_jp']}}
ご住所（英語）　　　　　　　　　　：{{$new_jp['dns_addrs_en']}}
FAX　　　　　　　　　　　　　　　：{{$new_jp['dns_fax']}}
メールアドレス　　　　　　　　　　：{{$new_jp['dns_fax']}}
公開連絡先　　　　　　　　　　　　：{{$new_jp['public_contact']}}
DNSサーバー　　　　　　　　　　　：
@if($new_jp['dns_server'] == 1)
  チロロネットのDNSを利用する。
@elseif($new_jp['dns_server'] == 2)
@if(!empty($new_jp['dns_server_text3']))
  {{$new_jp['dns_server_text3']}} 
@if(!empty($new_jp['dns_server_text4']))@endif
@endif
@if(!empty($new_jp['dns_server_text4']))
  {{$new_jp['dns_server_text4']}}
@endif
@endif

------------------------------------------------------------
○SSL登録情報
------------------------------------------------------------
コモンネーム　　　　　　　　　　　：{{$new_jp['common_name']}}
組織名（日本語）　　　　　　　　　：{{$new_jp['organization_name_jp']}}
組織名（英語）　　　　　　　　　　：{{$new_jp['organization_name_en']}}
都道府県・市区郡名（日本語）　　　：{{$new_jp['prefectures_jp']}}
都道府県・市区郡名（英語）　　　　：{{$new_jp['prefectures_en']}}
担当者名　　　　　　　　　　　　　：{{$new_jp['name_person_charge']}}
電話番号（ハイフンを除く）　　　　：{{$new_jp['phone_number']}}
FAX　　　　　　　　　　　　　　　：{{$new_jp['ssl_fax']}}
受信可能メールアドレス　　　　　　：{{$new_jp['receive_mail_addrs']}}

@if($new_jp['policy_contract_info'] == '以下に入力')
------------------------------------------------------------
○ご契約者について
------------------------------------------------------------
組織名　　　　　　　　　　　　　　：{{$new_jp['policy_organization_name']}}
代表者名　　　　　　　　　　　　　：{{$new_jp['policy_representative_name']}}
役職名　　　　　　　　　　　　　　：{{$new_jp['policy_title']}}
氏名　　　　　　　　　　　　　　　：{{$new_jp['policy_name']}}
所在地　　　　　　　　　　　　　　：{{$new_jp['location']}}
@endif
------------------------------------------------------------
○ご担当者について
------------------------------------------------------------
@if($new_jp['person_charge_info'] == '以下に入力')
組織名　　　　　　　　　　　　　　：{{$new_jp['person_charge_organization_name']}}
氏名　　　　　　　　　　　　　　　：{{$new_jp['person_charge_name']}}
部署名　　　　　　　　　　　　　　：{{$new_jp['person_charge_dept_name']}}
役職名　　　　　　　　　　　　　　：{{$new_jp['person_charge_title']}}
ご住所　　　　　　　　　　　　　　：{{$new_jp['person_charge_zipcode']}} {{$new_jp['person_charge_your_addrs']}}
@endif
連絡先TEL（ハイフンを除く）　　　：{{$new_jp['person_charge_tel']}}
連絡先FAX　　　　　　　　　　　　：{{$new_jp['person_charge_fax']}}
連絡先メールアドレス　　　　　　　：{{$new_jp['person_charge_email_addrs']}}

------------------------------------------------------------
○ 備考
------------------------------------------------------------
<?php echo nl2br($new_jp['remark']) ?>

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
