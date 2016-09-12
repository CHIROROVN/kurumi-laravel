<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Config;

class FrontendController extends Controller
{
	public function __construct()
	{
		parent::__construct();

		$configs = Config::get('constants.DEFINE');
        foreach($configs as $key => $value) {
            define($key, $value);
        }
	}
}