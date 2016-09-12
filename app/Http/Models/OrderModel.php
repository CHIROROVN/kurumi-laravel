<?php namespace App\Http\Models;


class OrderModel
{

    protected $table = false;

    public function Rules()
    {
    	return array(
    		'plan'                              => 'required',
            'domain'                            => 'required',
		);
    }

    public function Messages()
    {
    	return array(
            'plan.required'                     => trans('validation.error_plan_required'),
            'domain.required'                   => trans('validation.error_domain_required'),
		);
    }
}