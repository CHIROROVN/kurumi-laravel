────────────────────────────── <br />
  くるみサーバーのお申込みがありました <br />
────────────────────────────── <br /><br />

くるみサーバーのお申込みがありました。 <br />

内容を確認してください。 <br />
↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ <br /><br />

------------------------------------------------------------ <br />
○お申込みサーバー情報 <br />
------------------------------------------------------------ <br />
お申込みプラン名　　　　　　　　：{{$new_cojp['plan']}} <br />
ドメイン名　　　　　　　　　　　：{{$new_cojp['domain']}} <br />
サービス開始希望日　　　　　　　：{{$new_cojp['service']}} {{$new_cojp['year']}}/{{$new_cojp['month']}}/{{$new_cojp['day']}}<br />
お支払い方法　　　　　　　　　：{{$new_cojp['paymonth']}}  {{$new_cojp['payinvoice']}} <br />
・オプション　　　　　　　　　　　：{{$new_cojp['option']}} <br />
外部バックアップ世代数追加　　　：{{$new_cojp['generation']}}世代 <br />
IPアドレス追加　　　　　　　　　：{{$new_cojp['individual']}}個 <br />
Plesk Web Pro Editionへの変更 ：{{$new_cojp['plesk']}} <br />
WAF追加　　　　　　　　　　　：{{$new_cojp['waf']}}不要 <br /> <br />

------------------------------------------------------------ <br />
○ドメイン登録情報 <br />
------------------------------------------------------------ <br />
組織名（日本語）　　　　　　　：{{$new_cojp['organization_jp']}} <br />
組織名（ふりがな）　　　　　　　：{{$new_cojp['furigana']}} <br />
組織名（英語）　　　　　　　　：{{$new_cojp['organization_en']}} <br />
郵便番号　　　　　　　　　　　：{{$new_cojp['postal_code']}} <br />
ご住所（日本語）　　　　　　　：{{$new_cojp['address_jp']}} <br />
ご住所（英語）　　　　　　　　：{{$new_cojp['address_en']}} <br />
登記年月日　　　　　　　　　　：{{$new_cojp['regist_date']}} <br />
登記地住所　　　　　　　　　　：{{$new_cojp['regist_land_address']}} <br />
代表者名（日本語）　　　　　　：{{$new_cojp['representative_jp']}} <br />
代者者名（英語）　　　　　　　：{{$new_cojp['representative_en']}} <br />
代表者肩書　　　　　　　　　　：{{$new_cojp['representative_title']}} <br /> <br />

@if($new_cojp['domain_person_regist'] == '以下に入力')
登録担当者氏名（日本語）　　　：{{$new_cojp['domain_person_jp']}} <br />
登録担当者氏名（英語）　　　　：{{$new_cojp['domain_person_en']}} <br />
会社名・組織名　　　　　　　　：{{$new_cojp['company_name']}} <br />
ご住所　　　　　　　　　　　　：{{$new_cojp['your_address']}} <br />
部署名　　　　　　　　　　　　：{{$new_cojp['department']}} <br />
役職名　　　　　　　　　　　　：{{$new_cojp['domain_title']}} <br />
@endif
電話番号（ハイフンを除く）　：{{$new_cojp['domain_phone']}} <br />
FAX 　　　　　　　　　　　　　：{{$new_cojp['domain_fax']}} <br />
メールアドレス　　　　　　　　　　：{{$new_cojp['domain_email']}} <br />
DNSサーバー 　　　　　　　　　：<br />
  @if($new_cojp['dns_server'] == 1)
    チロロネットのDNSを利用する。
  @elseif($new_cojp['dns_server'] == 2)
    @if(!empty($new_cojp['dns_server_text3']))
      {{$new_cojp['dns_server_text3']}} 
      @if(!empty($new_cojp['dns_server_text4']))<br />@endif
    @endif
    @if(!empty($new_cojp['dns_server_text4']))
      {{$new_cojp['dns_server_text4']}}
    @endif
  @endif <br /><br />

------------------------------------------------------------ <br />
○SSL登録情報 <br />
------------------------------------------------------------ <br />
コモンネーム　　　　　　　　　　：{{$new_cojp['common_name']}} <br />
組織名（日本語）　　　　　　　：{{$new_cojp['organization_name_jp']}} <br />
組織名（英語）　　　　　　　　：{{$new_cojp['organization_name_en']}} <br />
都道府県・市区郡名（日本語）　：{{$new_cojp['prefectures_jp']}} <br />
都道府県・市区郡名（英語）　　：{{$new_cojp['prefectures_en']}} <br />
担当者名　　　　　　　　　　　：{{$new_cojp['name_person_charge']}} <br />
電話番号（ハイフンを除く）　　：{{$new_cojp['phone_number']}} <br />
FAX 　　　　　　　　　　　　：{{$new_cojp['ssl_fax']}} <br />
受信可能メールアドレス　　　：{{$new_cojp['receive_mail_addrs']}} <br /> <br />

@if($new_cojp['policy_contract_info'] == '以下に入力')
------------------------------------------------------------ <br />
○ご契約者について <br />
------------------------------------------------------------ <br />
組織名　　　　　　　　　　　　：{{$new_cojp['policy_organization_name']}} <br />
代表者名　　　　　　　　　　　：{{$new_cojp['policy_representative_name']}} <br />
役職名　　　　　　　　　　　　：{{$new_cojp['policy_title']}} <br />
氏名　　　　　　　　　　　　　：{{$new_cojp['policy_name']}} <br />
所在地　　　　　　　　　　　　：{{$new_cojp['location']}} <br /> <br />
@endif

@if($new_cojp['person_charge_info'] == '以下に入力')
------------------------------------------------------------ <br />
○ご担当者について <br />
------------------------------------------------------------ <br />
組織名　　　　　　　　　　　　：{{$new_cojp['person_charge_organization_name']}} <br />
氏名　　　　　　　　　　　　　：{{$new_cojp['person_charge_name']}} <br />
部署名　　　　　　　　　　　　：{{$new_cojp['person_charge_dept_name']}} <br />
役職名　　　　　　　　　　　　：{{$new_cojp['person_charge_title']}} <br />
ご住所　　　　　　　　　　　　：{{$new_cojp['person_charge_zipcode']}} <br />
@endif
連絡先TEL（ハイフンを除く） 　　　　　　　　　：{{$new_cojp['person_charge_tel']}} <br />
連絡先FAX 　　　　　　　　　：{{$new_cojp['person_charge_fax']}} <br />
連絡先メールアドレス　　　　　：{{$new_cojp['person_charge_email_addrs']}} <br /> <br />

------------------------------------------------------------ <br />
○ 備考 <br />
------------------------------------------------------------ <br />
<?php echo nl2br($new_cojp['remark']); ?> <br />

------------------------------------------------------------ <br /> <br />

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ <br />
 株式会社チロロネット カスタマーサポート <br />
────────────────────────────── <br />
   〒710-0844  岡山県倉敷市福井125-7 <br />
   TEL: 086-430-3956  /  FAX: 086-430-3957 <br />
   E-Mail: support@chiroro.com <br />
   URL: http://www.chiroro.co.jp/ <br />
────────────────────────────── <br />
 情報セキュリティマネジメントシステム ISO27001:2013認証取得 <br />
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
