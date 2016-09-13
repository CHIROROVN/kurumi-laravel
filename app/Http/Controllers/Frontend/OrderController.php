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
		$clsOrder 				= new OrderModel();
		$inputs   				= Input::all(); 
		$validator      		= Validator::make($inputs, $clsOrder->Rules(), $clsOrder->Messages());
		if ($validator->fails()) {
            return redirect()->route('frontend.order.new_cojp_regist')->withErrors($validator)->withInput();
        }

$dataInput 										= array();

        $dataInput['plan'] 								= Input::get('plan');
        $dataInput['domain'] 							= Input::get('domain');
        $dataInput['service'] 							= Input::get('service');

        $dataInput['paymonth'] 							= Input::get('paymonth');
        $dataInput['payinvoice'] 						= Input::get('payinvoice');
        $dataInput['generation'] 						= Input::get('generation');
        $dataInput['individual'] 						= Input::get('individual');
        $dataInput['plesk'] 							= Input::get('plesk');
        $dataInput['waf'] 								= Input::get('waf');
        $dataInput['domain_person_regist'] 				= Input::get('domain_person_regist');        
        $dataInput['option'] 							= Input::get('option');
        $dataInput['organization_jp'] 					= Input::get('organization_jp');
        $dataInput['furigana'] 							= Input::get('furigana');
        $dataInput['organization_en'] 					= Input::get('organization_en');
        $dataInput['postal_code'] 						= Input::get('postal_code');
        $dataInput['address_jp'] 						= Input::get('address_jp');
        $dataInput['address_en'] 						= Input::get('address_en');
        $dataInput['regist_date'] 						= Input::get('regist_date');
        $dataInput['regist_land_address'] 				= Input::get('regist_land_address');
        $dataInput['representative_jp'] 				= Input::get('representative_jp');
        $dataInput['representative_en'] 				= Input::get('representative_en');
        $dataInput['representative_title'] 				= Input::get('representative_title');
        $dataInput['domain_person_jp'] 					= Input::get('domain_person_jp');
        $dataInput['domain_person_en'] 					= Input::get('domain_person_en');
        $dataInput['company_name'] 						= Input::get('company_name');
        $dataInput['your_address'] 						= Input::get('your_address');
        $dataInput['department'] 						= Input::get('department');
        $dataInput['domain_title'] 						= Input::get('domain_title');
        $dataInput['domain_phone'] 						= Input::get('domain_phone');
        $dataInput['domain_fax'] 						= Input::get('domain_fax');
        $dataInput['domain_email'] 						= Input::get('domain_email');
        $dataInput['dns_server'] 						= Input::get('dns_server');
        $dataInput['policy_organization_name'] 			= Input::get('policy_organization_name');
        $dataInput['receive_mail_addrs'] 				= Input::get('receive_mail_addrs');
        $dataInput['policy_contract_info'] 				= Input::get('policy_contract_info');
        $dataInput['common_name'] 						= Input::get('common_name');
        $dataInput['organization_name_jp'] 				= Input::get('organization_name_jp');
        $dataInput['organization_name_en'] 				= Input::get('organization_name_en');
        $dataInput['prefectures_jp'] 					= Input::get('prefectures_jp');
        $dataInput['prefectures_en'] 					= Input::get('prefectures_en');
        $dataInput['name_person_charge'] 				= Input::get('name_person_charge');
        $dataInput['phone_number'] 						= Input::get('phone_number');
        $dataInput['ssl_fax'] 							= Input::get('ssl_fax');
        $dataInput['policy_organization__name'] 		= Input::get('policy_organization__name');
        $dataInput['policy_representative_name'] 		= Input::get('policy_representative_name');
        $dataInput['policy_title'] 						= Input::get('policy_title');
        $dataInput['policy_name'] 						= Input::get('policy_name');
        $dataInput['location'] 							= Input::get('location');
        $dataInput['person_charge_info'] 				= Input::get('person_charge_info');

        $dataInput['person_charge_organization_name'] 	= Input::get('person_charge_organization_name');
        $dataInput['person_charge_name'] 				= Input::get('person_charge_name');
        $dataInput['person_charge_dept_name'] 			= Input::get('person_charge_dept_name');
        $dataInput['person_charge_title'] 				= Input::get('person_charge_title');
        $dataInput['person_charge_zipcode'] 			= Input::get('person_charge_zipcode');
        $dataInput['person_charge_your_addrs'] 			= Input::get('person_charge_your_addrs');
        $dataInput['person_charge_tel'] 				= Input::get('person_charge_tel');
        $dataInput['person_charge_fax'] 				= Input::get('person_charge_fax');
        $dataInput['person_charge_email_addrs'] 		= Input::get('person_charge_email_addrs');
        $dataInput['remark'] 							= Input::get('remark');

        Session::put('new_cojp', $dataInput);
        return redirect()->route('frontend.order.new_cojp_confirm');

	}

	public function getNewCojpCnf() {
		$data 					= array();
		$data['new_cojp'] 		= (Object) Session::get('new_cojp');
		return view('frontend.order.new_cojp_confirm', $data);
	}

	public function getNewCojpSent() {
		if(!Session::has('new_cojp')) return redirect()->route('frontend.order.new_cojp_regist');
        $data 					= array();
		$new_cojp				= Session::get('new_cojp');

        Mail::send('frontend.order.email.new-cojp_mail_manage_side', ['new_cojp'=>$new_cojp], function($message) use ($new_cojp) {
        $email_to   = env('ADMIN_EMAIL_TO', null);
        $email_from = env('ADMIN_EMAIL_FROM', null);
        $email_subject = '【くるみサーバー】ドメイン新規（属性JPドメイン）お申込みがありました。';
        $message->to($email_to, 'Kurumi');
        $message->subject($email_subject);
        $message->from($email_from);
        });

        Mail::send('frontend.order.email.new-cojp_mail_user_side', ['new_cojp'=>$new_cojp], function($message) use ($new_cojp) {
        $email_to   = env('ADMIN_EMAIL_TO', null);
        $email_from = env('ADMIN_EMAIL_FROM', null);
        $email_subject = '【くるみサーバー】ドメイン新規（属性JPドメイン）お申込みがありました。';
        $message->to($email_to, 'Kurumi');
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
		
	}

	public function getNewJpCnf() {
		return view('frontend.order.new_jp_confirm');
	}

	public function getNewJpSent() {
		return view('frontend.order.new_jp_sent');
	}

	//order/new-com
	public function getNewCom() {
		return view('frontend.order.new-com_regist');
	}

	public function postNewCom() {
		$clsOrder 				= new OrderModel();
		$inputs   				= Input::all(); 
		$validator      		= Validator::make($inputs, $clsOrder->RuleNuewCom(), $clsOrder->MsgNewCom());
		if ($validator->fails()) {
            return redirect()->route('frontend.order.new_cojp_regist')->withErrors($validator)->withInput();
        }

        $dataInput 										= array();

        $dataInput['plan'] 								= Input::get('plan');
        $dataInput['domain'] 							= Input::get('domain');
        $dataInput['service'] 							= Input::get('service');

        $dataInput['paymonth'] 							= Input::get('paymonth');
        $dataInput['payinvoice'] 						= Input::get('payinvoice');
        $dataInput['generation'] 						= Input::get('generation');
        $dataInput['individual'] 						= Input::get('individual');
        $dataInput['plesk'] 							= Input::get('plesk');
        $dataInput['waf'] 								= Input::get('waf');

        //DNS
        $dataInput['dns_organization_jp']				= Input::get('dns_organization_jp');
        $dataInput['dns_organization_en']				= Input::get('dns_organization_en');
        $dataInput['dns_owner_name']					= Input::get('dns_owner_name');
        $dataInput['dns_dept_name']						= Input::get('dns_dept_name');
        $dataInput['dns_title']							= Input::get('dns_title');
        $dataInput['dns_addrs_jp']						= Input::get('dns_addrs_jp');
        $dataInput['dns_addrs_en']						= Input::get('dns_addrs_en');
        $dataInput['dns_phone']							= Input::get('dns_phone');
        $dataInput['dns_fax']							= Input::get('dns_fax');
        $dataInput['dns_email_addrs']					= Input::get('dns_email_addrs');

        $dataInput['common_name'] 						= Input::get('common_name');
        $dataInput['organization_name_jp'] 				= Input::get('organization_name_jp');
        $dataInput['organization_name_en'] 				= Input::get('organization_name_en');
        $dataInput['prefectures_jp'] 					= Input::get('prefectures_jp');
        $dataInput['prefectures_en'] 					= Input::get('prefectures_en');
        $dataInput['name_person_charge'] 				= Input::get('name_person_charge');
        $dataInput['phone_number'] 						= Input::get('phone_number');
        $dataInput['ssl_fax'] 							= Input::get('ssl_fax');
        $dataInput['policy_organization__name'] 		= Input::get('policy_organization__name');
        $dataInput['policy_representative_name'] 		= Input::get('policy_representative_name');
        $dataInput['policy_title'] 						= Input::get('policy_title');
        $dataInput['policy_name'] 						= Input::get('policy_name');
        $dataInput['location'] 							= Input::get('location');
        $dataInput['person_charge_info'] 				= Input::get('person_charge_info');
        $dataInput['person_charge_organization_name'] 	= Input::get('person_charge_organization_name');
        $dataInput['person_charge_name'] 				= Input::get('person_charge_name');
        $dataInput['person_charge_dept_name'] 			= Input::get('person_charge_dept_name');
        $dataInput['person_charge_title'] 				= Input::get('person_charge_title');
        $dataInput['person_charge_zipcode'] 			= Input::get('person_charge_zipcode');
        $dataInput['person_charge_your_addrs'] 			= Input::get('person_charge_your_addrs');
        $dataInput['person_charge_tel'] 				= Input::get('person_charge_tel');
        $dataInput['person_charge_fax'] 				= Input::get('person_charge_fax');
        $dataInput['person_charge_email_addrs'] 		= Input::get('person_charge_email_addrs');
        $dataInput['remark'] 							= Input::get('remark');

        Session::put('new_com', $dataInput);
        return redirect()->route('frontend.order.new-com_confirm');
		
	}

	public function getNewComCnf() {
		$data 					= array();
		$data['new_com'] 		= (Object) Session::get('new_com');
		return view('frontend.order.new-com_confirm', $data);
	}

	public function getNewComSent() {
		return view('frontend.order.new-com_sent');
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

		return view('frontend.order.move-cojp', $data);
	}

	public function postMoveCoJp() {
		$clsOrder 				= new OrderModel();

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
		$data['confirmData'] 	= $confirmData;

		return view('frontend.order.move-cojp_confirm', $data);
	}

	public function getMoveCoJpSent() {
		if ( !Session::has('confirmData') ) {
			return redirect()->route('frontend.order.move_cojp.index');
		}

		$data = Session::get('confirmData');

		// for user
		Mail::send('frontend.order.email.move_cojp_user', array('data' => $data), function($message) use ($data){
            $message->from(MAIL_FROM_ADDRESS, MAIL_FROM_NAME);
            $message->to($data['person_email'])->subject(SUBJECT_MOVE_COJP_USER);
        });
        // for manager
        Mail::send('frontend.order.email.move_cojp_manage', array('data' => $data), function($message) use ($data){
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
		$clsOrder 				= new OrderModel();

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
		$data['confirmData'] 	= $confirmData;

		return view('frontend.order.move_com_confirm', $data);
	}

	public function getMoveComSent() {
		if ( !Session::has('confirmData') ) {
			return redirect()->route('frontend.order.move_com.index');
		}

		$data = Session::get('confirmData');

		// for user
		Mail::send('frontend.order.email.move_cojp_user', array('data' => $data), function($message) use ($data){
            $message->from(MAIL_FROM_ADDRESS, MAIL_FROM_NAME);
            $message->to($data['person_email'])->subject(SUBJECT_MOVE_COM_USER);
        });
        // for manager
        Mail::send('frontend.order.email.move_cojp_manage', array('data' => $data), function($message) use ($data){
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
		//return view('frontend.order.new_cojp_regist');
	}

	public function postMoveJp() {
		
	}

	public function getMoveJpCnf() {
		//return view('frontend.order.move_cojp.confirm');
	}

	public function getMoveJpSent() {
		//return view('frontend.order.new_cojp_sent');
	}
	// end move-jp	

}