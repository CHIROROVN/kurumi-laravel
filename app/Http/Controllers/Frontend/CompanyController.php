<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
//use App\Http\Models\PresentModel;
use Input;
use Session;
use Validator;
use Auth;

class CompanyController extends FrontendController
{
	public function __construct()
	{
		parent::__construct();
	}


	public function index() {
		return view('frontend.company.index');
	}
}