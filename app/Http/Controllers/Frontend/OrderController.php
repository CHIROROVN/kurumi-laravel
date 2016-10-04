<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use App\Http\Models\OrderModel;
use Input;
use Session;
use Validator;
use Auth;
use Mail;

class OrderController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index() {
        return view('frontend.order.index');
    }

    //order/new-cojp
    public function getNewCojp() {
        return view('frontend.order.new_cojp_regist');
    }

    public function postNewCojp() {
        $clsOrder               = new OrderModel();
        $RuleNewCoJp            = $clsOrder->RuleNewCoJp();

        if(Input::get('dns_server') == 1){
            unset($RuleNewCoJp['dns_server_text3']);
            unset($RuleNewCoJp['dns_server_text4']);
        }elseif(Input::get('dns_server') == 2){
            if(!empty(Input::get('dns_server_text3'))){
                unset($RuleNewCoJp['dns_server_text4']);
            }else{
                unset($RuleNewCoJp['dns_server_text3']);
            }
        }

        if(Input::get('domain_person_regist') == '上記登録者情報と同一')
        {
            unset($RuleNewCoJp['domain_person_jp']);
            unset($RuleNewCoJp['domain_person_en']);
            unset($RuleNewCoJp['company_name']);
            unset($RuleNewCoJp['your_address']);
            unset($RuleNewCoJp['department']);
            unset($RuleNewCoJp['domain_title']);
        }


        if(Input::get('policy_contract_info') == 'ドメイン登録情報と同一')
        {
            unset($RuleNewCoJp['policy_organization_name']);
            unset($RuleNewCoJp['policy_representative_name']);
            unset($RuleNewCoJp['policy_title']);
            unset($RuleNewCoJp['policy_name']);
            unset($RuleNewCoJp['location']);
        }

        if(Input::get('person_charge_info') == 'ドメイン登録情報と同一')
        {
            unset($RuleNewCoJp['person_charge_organization_name']);
            unset($RuleNewCoJp['person_charge_name']);
            unset($RuleNewCoJp['person_charge_dept_name']);
            unset($RuleNewCoJp['person_charge_title']);
            unset($RuleNewCoJp['person_charge_zipcode']);
            unset($RuleNewCoJp['person_charge_your_addrs']);
        }

        $validator              = Validator::make(Input::all(), $RuleNewCoJp, $clsOrder->MsgNewCoJp());
        if ($validator->fails()) {
            return redirect()->route('frontend.order.new_cojp_regist')->withErrors($validator)->withInput();
        }

        $dataInput                                      = array();
        $dataInput['plan']                              = Input::get('plan');
        $dataInput['domain']                            = Input::get('domain');
        $dataInput['service']                           = Input::get('service');
        $dataInput['year']                              = Input::get('year');
        $dataInput['month']                             = Input::get('month');
        $dataInput['day']                               = Input::get('day');
        $dataInput['paymonth']                          = Input::get('paymonth');
        $dataInput['payinvoice']                        = Input::get('payinvoice');
        $dataInput['option']                            = Input::get('option');
        $dataInput['generation']                        = Input::get('generation');
        $dataInput['individual']                        = Input::get('individual');
        $dataInput['plesk']                             = Input::get('plesk');
        $dataInput['waf']                               = Input::get('waf');

        if(Input::get('domain_person_regist') == '以下に入力')
        {
            $dataInput['domain_person_jp']                  = Input::get('domain_person_jp');
            $dataInput['domain_person_en']                  = Input::get('domain_person_en');
            $dataInput['company_name']                      = Input::get('company_name');
            $dataInput['your_address']                      = Input::get('your_address');
            $dataInput['department']                        = Input::get('department');
            $dataInput['domain_title']                      = Input::get('domain_title');
        }

        $dataInput['domain_phone']                      = Input::get('domain_phone');
        $dataInput['domain_fax']                        = Input::get('domain_fax');
        $dataInput['domain_email']                      = Input::get('domain_email');

        if(Input::get('dns_server') == 1){
            $dataInput['dns_server']                    = 1;
        }elseif(Input::get('dns_server') == 2){
            $dataInput['dns_server']                    = 2;
            if(!empty(Input::get('dns_server_text3'))) 
                $dataInput['dns_server_text3']                    = Input::get('dns_server_text3');
            if(!empty(Input::get('dns_server_text4'))) 
                $dataInput['dns_server_text4']                    = Input::get('dns_server_text4');
        }

        if(Input::get('policy_contract_info') == '以下に入力'){
            $dataInput['policy_organization_name']          = Input::get('policy_organization_name');
            $dataInput['policy_representative_name']        = Input::get('policy_representative_name');
            $dataInput['policy_title']                      = Input::get('policy_title');
            $dataInput['policy_name']                       = Input::get('policy_name');
            $dataInput['location']                          = Input::get('location');
        }

        if(Input::get('policy_contract_info') == '以下に入力'){
            $dataInput['person_charge_organization_name']   = Input::get('person_charge_organization_name');
            $dataInput['person_charge_name']                = Input::get('person_charge_name');
            $dataInput['person_charge_dept_name']           = Input::get('person_charge_dept_name');
            $dataInput['person_charge_title']               = Input::get('person_charge_title');
            $dataInput['person_charge_zipcode']             = Input::get('person_charge_zipcode');
            $dataInput['person_charge_your_addrs']          = Input::get('person_charge_your_addrs');
        }

        $dataInput['person_charge_tel']                 = Input::get('person_charge_tel');
        $dataInput['person_charge_fax']                 = Input::get('person_charge_fax');
        $dataInput['person_charge_email_addrs']         = Input::get('person_charge_email_addrs');

        $dataInput['organization_jp']                   = Input::get('organization_jp');
        $dataInput['furigana']                          = Input::get('furigana');
        $dataInput['organization_en']                   = Input::get('organization_en');
        $dataInput['postal_code']                       = Input::get('postal_code');
        $dataInput['address_jp']                        = Input::get('address_jp');
        $dataInput['address_en']                        = Input::get('address_en');
        $dataInput['regist_date']                       = Input::get('regist_date');
        $dataInput['regist_land_address']               = Input::get('regist_land_address');
        $dataInput['representative_jp']                 = Input::get('representative_jp');
        $dataInput['representative_en']                 = Input::get('representative_en');
        $dataInput['representative_title']              = Input::get('representative_title');
        $dataInput['domain_person_regist']              = Input::get('domain_person_regist');


        $dataInput['common_name']                       = Input::get('common_name');
        $dataInput['organization_name_jp']              = Input::get('organization_name_jp');
        $dataInput['organization_name_en']              = Input::get('organization_name_en');
        $dataInput['prefectures_jp']                    = Input::get('prefectures_jp');
        $dataInput['prefectures_en']                    = Input::get('prefectures_en');
        $dataInput['name_person_charge']                = Input::get('name_person_charge');
        $dataInput['phone_number']                      = Input::get('phone_number');
        $dataInput['ssl_fax']                           = Input::get('ssl_fax');
        $dataInput['receive_mail_addrs']                = Input::get('receive_mail_addrs');
        $dataInput['policy_contract_info']              = Input::get('policy_contract_info');
        $dataInput['person_charge_info']                = Input::get('person_charge_info');
        $dataInput['remark']                            = Input::get('remark');

        Session::put('new_cojp', $dataInput);
        return redirect()->route('frontend.order.new_cojp_confirm');
    }

    public function getNewCojpCnf() {
        $data                   = array();
        $data['new_cojp']       = (Object) Session::get('new_cojp');
        return view('frontend.order.new_cojp_confirm', $data);
    }

    public function getNewCojpSent() {
        if(!Session::has('new_cojp')) return redirect()->route('frontend.order.new_cojp_regist');
        $data                   = array();
        $new_cojp               = Session::get('new_cojp');

        Mail::send(['text'=>'frontend.order.email.new_cojp_mail_manage_side'], ['new_cojp'=>$new_cojp], function($message) use ($new_cojp) {
        $email_to       = MAIL_TO_ADDRESS_MANAGER;
        $email_from     = MAIL_FROM_ADDRESS;
        $email_subject  = SUBJECT_NEW_COM_MANAGER;
        $message->to($email_to, MAIL_FROM_NAME);
        $message->subject($email_subject);
        $message->from($email_from);
        });

        Mail::send(['text'=>'frontend.order.email.new_cojp_mail_user_side'], ['new_cojp'=>$new_cojp], function($message) use ($new_cojp) {
        $email_to       = $new_cojp['person_charge_email_addrs'];
        $email_from     = MAIL_FROM_ADDRESS;
        $email_subject  = SUBJECT_NEW_COM_USER;
        $message->to($email_to, MAIL_FROM_NAME);
        $message->subject($email_subject);
        $message->from($email_from);
        });

        if(Session::has('new_cojp')) Session::forget('new_cojp');
        return view('frontend.order.new_cojp_sent');
    }

    //order/new-jp
    public function getNewJp() {
        return view('frontend.order.new_jp_regist');
    }

    public function postNewJp() {
        $clsOrder               = new OrderModel();
        $RuleNewJp            = $clsOrder->RuleNewJp();
        if(Input::get('policy_contract_info') == 'ドメイン登録情報と同一'){
            unset($RuleNewJp['policy_organization_name']);
            unset($RuleNewJp['policy_representative_name']);
            unset($RuleNewJp['policy_name']);
        }

        if(Input::get('dns_server') == 1){
            unset($RuleNewJp['dns_server_text3']);
            unset($RuleNewJp['dns_server_text4']);
        }elseif(Input::get('dns_server') == 2){
            if(!empty(Input::get('dns_server_text3'))){
                unset($RuleNewJp['dns_server_text4']);
            }else{
                unset($RuleNewJp['dns_server_text3']);
            }
        }

        if(Input::get('person_charge_info') == 'ドメイン登録情報と同一'){
            unset($RuleNewJp['person_charge_organization_name']);
            unset($RuleNewJp['person_charge_name']);
            unset($RuleNewJp['person_charge_dept_name']);
            unset($RuleNewJp['person_charge_zipcode']);
            unset($RuleNewJp['person_charge_your_addrs']);
        }

        $validator              = Validator::make(Input::all(), $RuleNewJp, $clsOrder->MsgNewJp());
        if ($validator->fails()) {
            return redirect()->route('frontend.order.new_jp_regist')->withErrors($validator)->withInput();
        }

        $dataInput                                      = array();
        $dataInput['plan']                              = Input::get('plan');
        $dataInput['domain']                            = Input::get('domain');
        $dataInput['service']                           = Input::get('service');
        $dataInput['paymonth']                          = Input::get('paymonth');
        $dataInput['payinvoice']                        = Input::get('payinvoice');
        $dataInput['option']                            = Input::get('option');
        $dataInput['generation']                        = Input::get('generation');
        $dataInput['individual']                        = Input::get('individual');
        $dataInput['plesk']                             = Input::get('plesk');
        $dataInput['waf']                               = Input::get('waf');

        $dataInput['dns_organization_jp']               = Input::get('dns_organization_jp');
        $dataInput['dns_organization_en']               = Input::get('dns_organization_en');
        $dataInput['dns_owner_name']                    = Input::get('dns_owner_name');
        $dataInput['dns_dept_name']                     = Input::get('dns_dept_name');
        $dataInput['dns_title']                         = Input::get('dns_title');
        $dataInput['dns_addrs_jp']                      = Input::get('dns_addrs_jp');
        $dataInput['dns_addrs_en']                      = Input::get('dns_addrs_en');

        $dataInput['dns_fax']                           = Input::get('dns_fax');
        $dataInput['dns_email_addrs']                   = Input::get('dns_email_addrs');

        $dataInput['public_contact']                    = Input::get('public_contact');

        if(Input::get('dns_server') == 1){
            $dataInput['dns_server']                    = 1;
        }elseif(Input::get('dns_server') == 2){
            $dataInput['dns_server']                    = 2;
            if(!empty(Input::get('dns_server_text3'))) 
                $dataInput['dns_server_text3']                    = Input::get('dns_server_text3');
            if(!empty(Input::get('dns_server_text4'))) 
                $dataInput['dns_server_text4']                    = Input::get('dns_server_text4');
        }

        $dataInput['common_name']                       = Input::get('common_name');
        $dataInput['organization_name_jp']              = Input::get('organization_name_jp');
        $dataInput['organization_name_en']              = Input::get('organization_name_en');
        $dataInput['prefectures_jp']                    = Input::get('prefectures_jp');
        $dataInput['prefectures_en']                    = Input::get('prefectures_en');

        $dataInput['name_person_charge']                = Input::get('name_person_charge');
        $dataInput['phone_number']                      = Input::get('phone_number');
        $dataInput['ssl_fax']                           = Input::get('ssl_fax');
        $dataInput['receive_mail_addrs']                = Input::get('receive_mail_addrs');

        $dataInput['policy_contract_info']              = Input::get('policy_contract_info');
        $dataInput['policy_title']                      = Input::get('policy_title');

        if(Input::get('policy_contract_info') == '以下に入力'){
            $dataInput['policy_organization_name']          = Input::get('policy_organization_name');
            $dataInput['policy_representative_name']        = Input::get('policy_representative_name');
            $dataInput['policy_titlepolicy_title']          = Input::get('policy_title');
            $dataInput['policy_name']                       = Input::get('policy_name');
            $dataInput['location']                          = Input::get('location');
        }

         $dataInput['person_charge_info']                      = Input::get('person_charge_info');
        if(Input::get('person_charge_info') == '以下に入力'){
            $dataInput['person_charge_organization_name']         = Input::get('person_charge_organization_name');
            $dataInput['person_charge_name']                      = Input::get('person_charge_name');
            $dataInput['person_charge_dept_name']                 = Input::get('person_charge_dept_name');
            $dataInput['person_charge_title']                     = Input::get('person_charge_title');
            $dataInput['person_charge_zipcode']                   = Input::get('person_charge_zipcode');
            $dataInput['person_charge_your_addrs']                = Input::get('person_charge_your_addrs');
        }

        $dataInput['person_charge_tel']                       = Input::get('person_charge_tel');
        $dataInput['person_charge_fax']                       = Input::get('person_charge_fax');
        $dataInput['person_charge_email_addrs']                      = Input::get('person_charge_email_addrs');
        $dataInput['remark']                      = Input::get('remark');


        Session::put('new_jp', $dataInput);
        return redirect()->route('frontend.order.new_jp_confirm');
    }

    public function getNewJpCnf() {
        $data['new_jp'] = (Object) Session::get('new_jp');
        return view('frontend.order.new_jp_confirm', $data);
    }

    public function getNewJpSent() {
        if(!Session::has('new_jp')) return redirect()->route('frontend.order.new_jp_regist');
        $data                   = array();
        $new_jp                 = Session::get('new_jp');

        Mail::send(['text'=>'frontend.order.email.new_jp_mail_manage_side'], ['new_jp'=>$new_jp], function($message) use ($new_jp) {
            $email_to   = MAIL_TO_ADDRESS_MANAGER;
            $email_from = MAIL_FROM_ADDRESS;
            $email_subject = SUBJECT_NEW_JP_MANAGER;
            $message->to($email_to, MAIL_FROM_NAME);
            $message->subject($email_subject);
            $message->from($email_from);
        });

        Mail::send(['text'=>'frontend.order.email.new_jp_mail_user_side'], ['new_jp'=>$new_jp], function($message) use ($new_jp) {
            $email_to   = $new_jp['person_charge_email_addrs'];
            $email_from = MAIL_FROM_ADDRESS;
            $email_subject = SUBJECT_NEW_JP_USER;
            $message->to($email_to, MAIL_FROM_NAME);
            $message->subject($email_subject);
            $message->from($email_from);
        });

        if(Session::has('new_jp')) Session::forget('new_jp');
        return view('frontend.order.new_jp_sent');
    }

    //order/new-com
    public function getNewCom() {
        return view('frontend.order.new_com_regist');
    }

    public function postNewCom() {
        $clsOrder               = new OrderModel();
        $RuleNewCom             = $clsOrder->RuleNewCom();
        if(Input::get('policy_contract_info') == 'ドメイン登録情報と同一'){
            unset($RuleNewCom['policy_organization_name']);
            unset($RuleNewCom['policy_representative_name']);
            unset($RuleNewCom['policy_name']);
        }

        if(Input::get('person_charge_info') == 'ドメイン登録情報と同一'){
            unset($RuleNewCom['person_charge_organization_name']);
            unset($RuleNewCom['person_charge_name']);
            unset($RuleNewCom['person_charge_dept_name']);
            unset($RuleNewCom['person_charge_zipcode']);
            unset($RuleNewCom['person_charge_your_addrs']);
        }

        if(Input::get('dns_server') == 1){
            unset($RuleNewCom['dns_server_text3']);
            unset($RuleNewCom['dns_server_text4']);
        }elseif(Input::get('dns_server') == 2){
            if(!empty(Input::get('dns_server_text3'))){
                unset($RuleNewCom['dns_server_text4']);
            }else{
                unset($RuleNewCom['dns_server_text3']);
            }
        }

        $validator              = Validator::make(Input::all(), $RuleNewCom, $clsOrder->MsgNewCom());
        if ($validator->fails()) {
            return redirect()->route('frontend.order.new_com_regist')->withErrors($validator)->withInput();
        }

        $dataInput                                      = array();
        $dataInput['plan']                              = Input::get('plan');
        $dataInput['domain']                            = Input::get('domain');
        $dataInput['service']                           = Input::get('service');
        $dataInput['paymonth']                          = Input::get('paymonth');
        $dataInput['payinvoice']                        = Input::get('payinvoice');
        $dataInput['option']                            = Input::get('option');
        $dataInput['generation']                        = Input::get('generation');
        $dataInput['individual']                        = Input::get('individual');
        $dataInput['plesk']                             = Input::get('plesk');
        $dataInput['waf']                               = Input::get('waf');

        //DNS
        $dataInput['dns_organization_jp']               = Input::get('dns_organization_jp');
        $dataInput['dns_organization_en']               = Input::get('dns_organization_en');
        $dataInput['dns_owner_name']                    = Input::get('dns_owner_name');
        $dataInput['dns_dept_name']                     = Input::get('dns_dept_name');
        $dataInput['dns_title']                         = Input::get('dns_title');
        $dataInput['dns_addrs_jp']                      = Input::get('dns_addrs_jp');
        $dataInput['dns_addrs_en']                      = Input::get('dns_addrs_en');
        $dataInput['dns_phone']                         = Input::get('dns_phone');
        $dataInput['dns_fax']                           = Input::get('dns_fax');
        $dataInput['dns_email_addrs']                   = Input::get('dns_email_addrs');

        if(Input::get('dns_server') == 1){
            $dataInput['dns_server']                    = 1;
        }elseif(Input::get('dns_server') == 2){
            $dataInput['dns_server']                    = 2;
            if(!empty(Input::get('dns_server_text3'))) 
                $dataInput['dns_server_text3']                    = Input::get('dns_server_text3');
            if(!empty(Input::get('dns_server_text4'))) 
                $dataInput['dns_server_text4']                    = Input::get('dns_server_text4');
        }

        $dataInput['common_name']                       = Input::get('common_name');
        $dataInput['organization_name_jp']              = Input::get('organization_name_jp');
        $dataInput['organization_name_en']              = Input::get('organization_name_en');
        $dataInput['prefectures_jp']                    = Input::get('prefectures_jp');
        $dataInput['prefectures_en']                    = Input::get('prefectures_en');
        $dataInput['name_person_charge']                = Input::get('name_person_charge');
        $dataInput['phone_number']                      = Input::get('phone_number');
        $dataInput['ssl_fax']                           = Input::get('ssl_fax');

        $dataInput['receive_mail_addrs']                = Input::get('receive_mail_addrs');
        $dataInput['policy_contract_info']              = Input::get('policy_contract_info');
        if(Input::get('policy_contract_info') == '以下に入力'){
            $dataInput['policy_organization_name']          = Input::get('policy_organization_name');
            $dataInput['policy_organization__name']         = Input::get('policy_organization__name');
            $dataInput['policy_representative_name']        = Input::get('policy_representative_name');
            $dataInput['policy_title']                      = Input::get('policy_title');
            $dataInput['policy_name']                       = Input::get('policy_name');
            $dataInput['location']                          = Input::get('location');
        }

        $dataInput['person_charge_info']                = Input::get('person_charge_info');
        if(Input::get('person_charge_info') == '以下に入力'){
            $dataInput['person_charge_organization_name']   = Input::get('person_charge_organization_name');
            $dataInput['person_charge_name']                = Input::get('person_charge_name');
            $dataInput['person_charge_dept_name']           = Input::get('person_charge_dept_name');
            $dataInput['person_charge_title']               = Input::get('person_charge_title');
            $dataInput['person_charge_zipcode']             = Input::get('person_charge_zipcode');
            $dataInput['person_charge_your_addrs']          = Input::get('person_charge_your_addrs');
        }

        $dataInput['person_charge_tel']                 = Input::get('person_charge_tel');
        $dataInput['person_charge_fax']                 = Input::get('person_charge_fax');
        $dataInput['person_charge_email_addrs']         = Input::get('person_charge_email_addrs');
        $dataInput['remark']                            = Input::get('remark');

        Session::put('new_com', $dataInput);
        return redirect()->route('frontend.order.new_com_confirm');
        
    }

    public function getNewComCnf() {
        if(!Session::has('new_com')) return redirect()->route('frontend.order.new_com_regist');
        $data                   = array();
        $data['new_com']        = (Object) Session::get('new_com');
        return view('frontend.order.new_com_confirm', $data);
    }

    public function getNewComSent() {
        if(!Session::has('new_com')) return redirect()->route('frontend.order.new_com_regist');
        $data                   = array();
        $new_com                = Session::get('new_com');

        Mail::send(['text'=>'frontend.order.email.new_com_mail_manage_side'], ['new_com'=>$new_com], function($message) use ($new_com) {
            $email_to       = MAIL_TO_ADDRESS_MANAGER;
            $email_from     = MAIL_FROM_ADDRESS;
            $email_subject  = SUBJECT_NEW_JP_MANAGER;
            $message->to($email_to, MAIL_FROM_NAME);
            $message->subject($email_subject);
            $message->from($email_from);
        });

        Mail::send(['text'=>'frontend.order.email.new_com_mail_user_side'], ['new_com'=>$new_com], function($message) use ($new_com) {
            $email_to       = $new_com['person_charge_email_addrs'];
            $email_from     = MAIL_FROM_ADDRESS;
            $email_subject  = SUBJECT_NEW_JP_USER;
            $message->to($email_to, MAIL_FROM_NAME);
            $message->subject($email_subject);
            $message->from($email_from);
        });

        if(Session::has('new_com')) Session::forget('new_com');
        return view('frontend.order.new_com_sent');
    }

    //order/move-cojp
    public function getMoveCoJp() {
        $data = array();

        if ( !Session::has('back') ) {
            Session::forget('confirmData');
        } else {
            $data['back'] = Session::get('confirmData');
        }
        Session::forget('back');

        return view('frontend.order.move_cojp', $data);
    }

    public function postMoveCoJp() {
        $clsOrder               = new OrderModel();

        $input = Input::all();

        $validator  = Validator::make($input, $clsOrder->rMoveCoJp(), $clsOrder->mMoveCoJp());
        if ($validator->fails()) {
            return redirect()->route('frontend.order.move_cojp.index')->withErrors($validator)->withInput();
        }

        Session::put('confirmData', Input::all());

        return redirect()->route('frontend.order.move_cojp.confirm');
    }

    public function getMoveCoJpCnf() {
        if ( !Session::has('confirmData') ) {
            return redirect()->route('frontend.order.move_cojp.index');
        }

        $confirmData = Session::get('confirmData');
        $data['confirmData']    = $confirmData;

        return view('frontend.order.move_cojp_confirm', $data);
    }

    public function getMoveCoJpSent() {
        if ( !Session::has('confirmData') ) {
            return redirect()->route('frontend.order.move_cojp.index');
        }

        $data = Session::get('confirmData');

        // for user
        Mail::send(['text'=>'frontend.order.email.move_cojp_user'], array('data' => $data), function($message) use ($data){
            $message->from(MAIL_FROM_ADDRESS, MAIL_FROM_NAME);
            $message->to($data['person_email'])->subject(SUBJECT_MOVE_COJP_USER);
        });

        // for manager
        Mail::send(['text'=>'frontend.order.email.move_cojp_manage'], array('data' => $data), function($message) use ($data){
            $message->from(MAIL_FROM_ADDRESS, MAIL_FROM_NAME);
            $message->to(MAIL_TO_ADDRESS_MANAGER)->subject(SUBJECT_MOVE_COJP_MANAGER);
        });

        Session::forget('confirmData');
        Session::forget('back');

        return view('frontend.order.move_cojp_sent');
    }

    public function getMoveCoJpBack() {
        Session::put('back', 1);

        return redirect()->route('frontend.order.move_cojp.index');
    }
    //end order/move-cojp


    //order/move-com
    public function getMoveCom() {
        $data = array();

        if ( !Session::has('back') ) {
            Session::forget('confirmData');
        } else {
            $data['back'] = Session::get('confirmData');
        }
        Session::forget('back');

        return view('frontend.order.move_com', $data);
    }

    public function postMoveCom() {
        $clsOrder               = new OrderModel();
        $input = Input::all();

        $validator  = Validator::make($input, $clsOrder->rMoveCom(), $clsOrder->mMoveCom());
        if ($validator->fails()) {
            return redirect()->route('frontend.order.move_com.index')->withErrors($validator)->withInput();
        }

        Session::put('confirmData', Input::all());
        return redirect()->route('frontend.order.move_com.confirm');
    }

    public function getMoveComCnf() {
        if ( !Session::has('confirmData') ) {
            return redirect()->route('frontend.order.move_com.index');
        }

        $confirmData = Session::get('confirmData');
        $data['confirmData']    = $confirmData;

        return view('frontend.order.move_com_confirm', $data);
    }

    public function getMoveComSent() {
        if ( !Session::has('confirmData') ) {
            return redirect()->route('frontend.order.move_com.index');
        }

        $data = Session::get('confirmData');

        // for user
        Mail::send(['text'=>'frontend.order.email.move_cojp_user'], array('data' => $data), function($message) use ($data){
            $message->from(MAIL_FROM_ADDRESS, MAIL_FROM_NAME);
            $message->to($data['person_email'])->subject(SUBJECT_MOVE_COM_USER);
        });
        // for manager
        Mail::send(['text'=>'frontend.order.email.move_cojp_manage'], array('data' => $data), function($message) use ($data){
            $message->from(MAIL_FROM_ADDRESS, MAIL_FROM_NAME);
            $message->to(MAIL_TO_ADDRESS_MANAGER)->subject(SUBJECT_MOVE_COM_MANAGER);
        });

        Session::forget('confirmData');
        Session::forget('back');

        return view('frontend.order.move_com_sent');
    }

    public function getMoveComBack() {
        Session::put('back', 1);

        return redirect()->route('frontend.order.move_com.index');
    }
    // end move com


    //order/move-jp
    public function getMoveJp() {
        $data = array();

        if ( !Session::has('back') ) {
            Session::forget('confirmData');
        } else {
            $data['back'] = Session::get('confirmData');
        }
        Session::forget('back');

        return view('frontend.order.move_jp', $data);
    }

    public function postMoveJp() {
        $clsOrder               = new OrderModel();

        $input = Input::all();

        $validator  = Validator::make($input, $clsOrder->rMoveJp(), $clsOrder->mMoveJp());
        if ($validator->fails()) {
            return redirect()->route('frontend.order.move_jp.index')->withErrors($validator)->withInput();
        }

        Session::put('confirmData', Input::all());

        return redirect()->route('frontend.order.move_jp.confirm');
    }

    public function getMoveJpCnf() {
        if ( !Session::has('confirmData') ) {
            return redirect()->route('frontend.order.move_jp.index');
        }

        $confirmData = Session::get('confirmData');
        $data['confirmData']    = $confirmData;

        return view('frontend.order.move_jp_confirm', $data);
    }

    public function getMoveJpSent() {
        if ( !Session::has('confirmData') ) {
            return redirect()->route('frontend.order.move_jp.index');
        }

        $data = Session::get('confirmData');

        // for user
        Mail::send(['text'=>'frontend.order.email.move_jp_user'], array('data' => $data), function($message) use ($data){
            $message->from(MAIL_FROM_ADDRESS, MAIL_FROM_NAME);
            $message->to($data['person_email'])->subject(SUBJECT_MOVE_JP_USER);
        });
        // for manager
        Mail::send(['text'=>'frontend.order.email.move_jp_manage'], array('data' => $data), function($message) use ($data){
            $message->from(MAIL_FROM_ADDRESS, MAIL_FROM_NAME);
            $message->to(MAIL_TO_ADDRESS_MANAGER)->subject(SUBJECT_MOVE_JP_MANAGER);
        });

        Session::forget('confirmData');
        Session::forget('back');

        return view('frontend.order.move_jp_sent');
    }

    public function getMoveJpBack() {
        Session::put('back', 1);

        return redirect()->route('frontend.order.move_jp.index');
    }
    // end move-jp  

}