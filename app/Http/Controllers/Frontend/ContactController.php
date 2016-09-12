<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
//use App\Http\Models\PresentModel;
use Input;
use Session;
use Validator;
use Auth;

class ContactController extends FrontendController
{
	public function __construct()
	{
		parent::__construct();
	}


	public function index() {
		return view('frontend.contact.index');
	}
}