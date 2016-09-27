────────────────────────────── <br />
  くるみサーバーのお申込みがありました<br />
────────────────────────────── <br /><br />

くるみサーバーのお申込みがありました。<br />

内容を確認してください。<br />
↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ <br /><br />

------------------------------------------------------------ <br />
○お申込みサーバー情報 <br />
------------------------------------------------------------ <br />
お申込みプラン名　　　　　　　：{{$new_jp['plan']}} <br />
ドメイン名　　　　　　　　　　：{{$new_jp['domain']}} <br />
サービス開始希望日　　　　　　：{{$new_jp['service']}} <br />
お支払い方法　　　　　　　　：{{$new_jp['paymonth']}} {{$new_jp['payinvoice']}} <br /><br />

.オプション　　　　　　　　　:{{$new_jp['option']}} <br />
外部バックアップ世代数追加　　：{{$new_jp['generation']}}世代 <br />
IPアドレス追加　　　　　　　：{{$new_jp['individual']}}個 <br />
Plesk Web Pro Editionへの変更 ：{{$new_jp['plesk']}} <br />
WAF追加　　　　　　　　　：{{$new_jp['waf']}} <br /><br />

------------------------------------------------------------ <br />
○ドメイン登録情報 <br />
------------------------------------------------------------ <br />
組織名（日本語）　　　　　：{{$new_jp['dns_organization_jp']}} 株式会社チロロネット <br />
組織名（英語）　　　　　　：{{$new_jp['dns_organization_en']}} <br />
登録担当者名　　　　　　　：{{$new_jp['dns_owner_name']}} <br />
部署名　　　　　　　　　　:{{$new_jp['dns_dept_name']}} <br />
役職名　　　　　　　　　　:{{$new_jp['dns_title']}} <br />
ご住所（日本語）　　　　　：{{$new_jp['dns_addrs_jp']}} <br />
ご住所（英語）　　　　　　：{{$new_jp['dns_addrs_en']}} <br />
FAX　　　　　　　　　　　　：{{$new_jp['dns_fax']}} <br />
メールアドレス　　　　　　　：{{$new_jp['dns_fax']}} <br />
公開連絡先　　　　　　　：{{$new_jp['public_contact']}} <br />
DNSサーバー　　　　　　　：<br />
@if($new_jp['dns_server'] == 1)
    チロロネットのDNSを利用する。
@elseif($new_jp['dns_server'] == 2)
  @if(!empty($new_jp['dns_server_text3']))
    {{$new_jp['dns_server_text3']}} 
    @if(!empty($new_jp['dns_server_text4']))<br />@endif
  @endif
  @if(!empty($new_jp['dns_server_text4']))
    {{$new_jp['dns_server_text4']}}
  @endif
@endif <br /><br />

------------------------------------------------------------ <br />
○SSL登録情報 <br />
------------------------------------------------------------ <br />
コモンネーム　　　　　　　　　　：{{$new_jp['common_name']}} <br />
組織名（日本語）　　　　　　：{{$new_jp['organization_name_jp']}} <br />
組織名（英語）　　　　　　　：{{$new_jp['organization_name_en']}} <br />
都道府県・市区郡名（日本語）　：{{$new_jp['prefectures_jp']}} <br />
都道府県・市区郡名（英語）　　：{{$new_jp['prefectures_en']}} <br />
担当者名　　　　　　　　　　：{{$new_jp['name_person_charge']}} <br />
電話番号（ハイフンを除く）　　　　　　　　　　：{{$new_jp['phone_number']}} <br />
FAX 　　　　　　　　　　　：{{$new_jp['ssl_fax']}} <br />
受信可能メールアドレス　　　　　：{{$new_jp['receive_mail_addrs']}} <br /><br />

@if($new_jp['policy_contract_info'] == '以下に入力')
------------------------------------------------------------ <br />
○ご契約者について <br />
------------------------------------------------------------ <br />
組織名　　　　　　　　　　　　：{{$new_jp['policy_organization_name']}}  <br />
代表者名　　　　　　　　　　　：{{$new_jp['policy_representative_name']}}  <br />
役職名　　　　　　　　　　　　：{{$new_jp['policy_title']}}  <br />
氏名　　　　　　　　　　　　　：{{$new_jp['policy_name']}}  <br />
所在地　　　　　　　　　　　　：{{$new_jp['location']}}  <br /><br />
@endif
------------------------------------------------------------ <br />
○ご担当者について <br />
------------------------------------------------------------ <br />
@if($new_jp['person_charge_info'] == '以下に入力')
組織名　　　　　　　　　　　　：{{$new_jp['person_charge_organization_name']}}  <br />
氏名　　　　　　　　　　　　　：{{$new_jp['person_charge_name']}}  <br />
部署名　　　　　　　　　　　　：{{$new_jp['person_charge_dept_name']}}  <br />
役職名　　　　　　　　　　　　：{{$new_jp['person_charge_title']}}  <br />
ご住所　　　　　　　　　　　　：{{$new_jp['person_charge_zipcode']}} {{$new_jp['person_charge_your_addrs']}} <br />
@endif
連絡先TEL（ハイフンを除く） 　　　　　　　　　：{{$new_jp['person_charge_tel']}}  <br />
連絡先FAX 　　　　　　　　　：{{$new_jp['person_charge_fax']}}  <br />
連絡先メールアドレス　　　　　　　：{{$new_jp['person_charge_email_addrs']}}  <br /><br />

------------------------------------------------------------ <br />
○ 備考 <br />
------------------------------------------------------------ <br />
<?php echo nl2br($new_jp['remark']) ?> <br /><br />

------------------------------------------------------------ <br />

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
