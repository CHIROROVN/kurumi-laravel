<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
//use App\Http\Models\PresentModel;
use Input;
use Session;
use Validator;
use Auth;
use Mail;

class ContactController extends FrontendController
{
	public function __construct()
	{
		parent::__construct();
	}


	public function getIndex()
	{
		$data = array();

		if ( !Session::has('back') ) {
			Session::forget('confirmData');
		} else {
			$data['back'] = Session::get('confirmData');
		}
		Session::forget('back');

		return view('frontend.contact.index', $data);
	}


	public function postIndex()
	{
		$rules = array(
			'name' 			=> 'required',
			'name_kana' 	=> 'regex:/^[\x{3041}-\x{3096}]+$/u',
			'company' 		=> 'required',
			'zipcode' 		=> 'required',
			'address' 		=> 'required',
			'phone' 		=> 'required|numeric',
			'email' 		=> 'required|email',
			'type_message' 	=> 'required',
			'content' 		=> 'required',
			'agree' 		=> 'required',
		);
		
		$messages = array(
			'name.required' 			=> trans('validation.error_contact_name_required'),
			'name_kana.regex' 			=> trans('validation.error_contact_name_kana_regex'),
			'company.required' 			=> trans('validation.error_contact_company_required'),
			'zipcode.required' 			=> trans('validation.error_contact_zipcode_required'),
			'address.required' 			=> trans('validation.error_contact_address_required'),
			'phone.required' 			=> trans('validation.error_contact_phone_required'),
			'phone.numeric' 			=> trans('validation.error_contact_phone_numeric'),
			'email.required' 			=> trans('validation.error_contact_email_required'),
			'email.email' 				=> trans('validation.error_contact_email_email'),
			'type_message.required' 	=> trans('validation.error_contact_type_message_required'),
			'content.required' 			=> trans('validation.error_contact_content_required'),
			'agree.required' 			=> trans('validation.error_contact_agree_required')
		);

		$input = Input::all();

		$validator  = Validator::make($input, $rules, $messages);
        if ($validator->fails()) {
            return redirect()->route('frontend.contact.index')->withErrors($validator)->withInput();
        }

        Session::put('confirmData', Input::all());

        return redirect()->route('frontend.contact.confirm');
	}


	public function getConfirm()
	{
		if ( !Session::has('confirmData') ) {
			return redirect()->route('frontend.contact.index');
		}

		$confirmData = Session::get('confirmData');
		$data['confirmData'] 	= $confirmData;

		return view('frontend.contact.confirm', $data);
	}


	public function getSend()
	{
		if ( !Session::has('confirmData') ) {
			return redirect()->route('frontend.contact.index');
		}

		$data = Session::get('confirmData');

		// for user
		Mail::send('frontend.contact.mail_user', array('data' => $data), function($message) use ($data){
            $message->from(MAIL_FROM_ADDRESS, MAIL_FROM_NAME);
            $message->to($data['email'])->subject(SUBJECT_CONTACT_USER);
        });
        // for manager
        Mail::send('frontend.contact.mail_manager', array('data' => $data), function($message) use ($data){
            $message->from(MAIL_FROM_ADDRESS, MAIL_FROM_NAME);
            $message->to(MAIL_TO_ADDRESS_MANAGER)->subject(SUBJECT_CONTACT_MANAGER);
        });

		Session::forget('confirmData');
		Session::forget('back');

		return view('frontend.contact.send');
	}


	public function getBack()
	{
		Session::put('back', 1);

		return redirect()->route('frontend.contact.index');
	}
}