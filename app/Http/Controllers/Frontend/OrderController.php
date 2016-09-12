<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use App\Http\Models\OrderModel;
use Input;
use Session;
use Validator;
use Auth;

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

        $dataInput['plan'] 		= Input::get('plan');
        $dataInput['domain'] 		= Input::get('domain');
        $dataInput['service'] 	= Input::get('service');


	}

	public function getNewCojpCnf() {
		return view('frontend.order.new_cojp_confirm');
	}

	public function getNewCojpSent() {
		return view('frontend.order.new_cojp_sent');
	}

	//order/new-jp
	public function getNewJp() {
		//return view('frontend.order.new_cojp_regist');
	}

	public function postNewJp() {
		
	}

	public function getNewJpCnf() {
		//return view('frontend.order.move_cojp.confirm');
	}

	public function getNewJpSent() {
		//return view('frontend.order.new_cojp_sent');
	}

	//order/new-com
	public function getNewCom() {
		//return view('frontend.order.new_cojp_regist');
	}

	public function postNewCom() {
		
	}

	public function getNewComCnf() {
		//return view('frontend.order.move_cojp.confirm');
	}

	public function getNewComSent() {
		//return view('frontend.order.new_cojp_sent');
	}

	//order/move-cojp
	public function getMoveCoJp() {
		//return view('frontend.order.new_cojp_regist');
	}

	public function postMoveCoJp() {
		
	}

	public function getMoveCoJpCnf() {
		//return view('frontend.order.move_cojp.confirm');
	}

	public function getMoveCoJpSent() {
		//return view('frontend.order.new_cojp_sent');
	}

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

	//order/move-com
	public function getMoveCom() {
		//return view('frontend.order.new_cojp_regist');
	}

	public function postMoveCom() {
		
	}

	public function getMoveComCnf() {
		//return view('frontend.order.move_cojp.confirm');
	}

	public function getMoveComSent() {
		//return view('frontend.order.new_cojp_sent');
	}	

}