<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Input;
use Session;
use Validator;
use Auth;

class PlanController extends FrontendController
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index() {
    return view('frontend.plan.index');
  }


}