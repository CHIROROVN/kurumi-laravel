<?php namespace App\Http\Models;


class OrderModel
{

    protected $table = false;

    public function Rules()
    {
    	return array(
    		'plan'                                    => 'required',
            'domain'                                  => 'required',
		);
    }

    public function Messages()
    {
    	return array(
            'plan.required'                         => trans('validation.error_plan_required'),
            'domain.required'                       => trans('validation.error_domain_required'),
            'paymonth.required'                     => trans('validation.error_paymonth_required'),
            'payinvoice.required'                   => trans('validation.error_payinvoice_required'),
            

		);
    }

    public function RuleNewJp()
    {
        return array(
            'plan'                                    => 'required',
            'domain'                                  => 'required',
        );
    }

    public function MsgNewJp()
    {
        return array(
            'plan.required'                         => trans('validation.error_plan_required'),
            'domain.required'                       => trans('validation.error_domain_required'),
            'paymonth.required'                     => trans('validation.error_paymonth_required'),
            'payinvoice.required'                   => trans('validation.error_payinvoice_required'),
            

        );
    }

    public function RuleNuewCom()
    {
        return array(
            'plan'                                    => 'required',
            'domain'                                  => 'required',
        );
    }

    public function MsgNewCom()
    {
        return array(
            'plan.required'                         => trans('validation.error_plan_required'),
            'domain.required'                       => trans('validation.error_domain_required'),
            'paymonth.required'                     => trans('validation.error_paymonth_required'),
            'payinvoice.required'                   => trans('validation.error_payinvoice_required'),
            

        );
    }


    // move-cojp
    public function rMoveCoJp()
    {
        return array(
            'app_plan_name'                                     => 'required',
            'app_domain_name'                                   => 'required',
            'app_service_start_date'                            => 'required',
            'app_payment_method_1'                              => 'required',
            'app_payment_method_2'                              => 'required',
            'app_generation'                                    => 'required',

            'domain_transfe'                                    => 'required',
            'domain_owner'                                      => 'required',
            'domain_transfer_work_year'                         => 'required|numeric',
            'domain_transfer_work_month'                        => 'required|numeric',
            'domain_transfer_work_day'                          => 'required|numeric',

            'ssl_common_name'                                   => 'required',
            'ssl_organization_name_japan'                       => 'required',
            'ssl_organization_name_english'                     => 'required',
            'ssl_county_name_japan'                             => 'required',
            'ssl_county_name_english'                           => 'required',
            'ssl_name_person'                                   => 'required',
            'ssl_phone_number'                                  => 'required|numeric',

            'policyholders_organization_name'                   => 'required',
            'policyholders_representative_name'                 => 'required',
            'policyholders_name'                                => 'required',

            'person_organization_name'                          => 'required',
            'person_name'                                       => 'required',
            'person_department_name'                            => 'required',
            'person_your_address_1'                             => 'required',
            'person_your_address_2'                             => 'required',
            'person_tel'                                        => 'required|numeric',
            'person_email'                                      => 'required|email',
        );
    }

    public function mMoveCoJp()
    {
        return array(
            'app_plan_name.required'                                     => trans('validation.error_movecojp_app_plan_name_required'),
            'app_domain_name.required'                                   => trans('validation.error_movecojp_app_domain_name_required'),
            'app_service_start_date.required'                            => trans('validation.error_movecojp_app_service_start_date_required'),
            'app_payment_method_1.required'                              => trans('validation.error_movecojp_app_payment_method_1_required'),
            'app_payment_method_2.required'                              => trans('validation.error_movecojp_app_payment_method_2_required'),
            'app_generation.required'                                    => trans('validation.error_movecojp_app_generation_required'),

            'domain_transfe.required'                                    => trans('validation.error_movecojp_domain_transfe_required'),
            'domain_owner.required'                                      => trans('validation.error_movecojp_domain_owner_required'),
            'domain_transfer_work_year.required'                         => trans('validation.error_movecojp_domain_transfer_work_year_required'),
            'domain_transfer_work_month.required'                        => trans('validation.error_movecojp_domain_transfer_work_month_required'),
            'domain_transfer_work_day.required'                          => trans('validation.error_movecojp_domain_transfer_work_day_required'),

            'ssl_common_name.required'                                   => trans('validation.error_movecojp_ssl_common_name_required'),
            'ssl_organization_name_japan.required'                       => trans('validation.error_movecojp_ssl_organization_name_japan_required'),
            'ssl_organization_name_english.required'                     => trans('validation.error_movecojp_ssl_organization_name_english_required'),
            'ssl_county_name_japan.required'                             => trans('validation.error_movecojp_ssl_county_name_japan_required'),
            'ssl_county_name_english.required'                           => trans('validation.error_movecojp_ssl_county_name_english_required'),
            'ssl_name_person.required'                                   => trans('validation.error_movecojp_ssl_name_person_required'),
            'ssl_phone_number.required'                                  => trans('validation.error_movecojp_ssl_phone_number_required'),
            'ssl_phone_number.numeric'                                   => trans('validation.error_movecojp_ssl_phone_number_numeric'),

            'policyholders_organization_name.required'                   => trans('validation.error_movecojp_policyholders_organization_name_required'),
            'policyholders_representative_name.required'                 => trans('validation.error_movecojp_policyholders_representative_name_required'),
            'policyholders_name.required'                                => trans('validation.error_movecojp_policyholders_name_required'),

            'person_organization_name.required'                          => trans('validation.error_movecojp_person_organization_name_required'),
            'person_name.required'                                       => trans('validation.error_movecojp_person_name_required'),
            'person_department_name.required'                            => trans('validation.error_movecojp_person_department_name_required'),
            'person_your_address_1.required'                             => trans('validation.error_movecojp_person_your_address_1_required'),
            'person_your_address_2.required'                             => trans('validation.error_movecojp_person_your_address_2_required'),
            'person_tel.required'                                        => trans('validation.error_movecojp_person_tel_required'),
            'person_tel.numeric'                                         => trans('validation.error_movecojp_person_tel_numeric'),
            'person_email.required'                                      => trans('validation.error_movecojp_person_email_required'),
            'person_email.email'                                         => trans('validation.error_movecojp_person_email_email'),
        );
    }


    // move-com
    public function rMoveCom()
    {
        return array(
            'app_plan_name'                                     => 'required',
            'app_domain_name'                                   => 'required',
            'app_service_start_date'                            => 'required',
            'app_payment_method_1'                              => 'required',
            'app_payment_method_2'                              => 'required',
            'app_generation'                                    => 'required',

            'domain_transfe'                                    => 'required',
            'domain_owner'                                      => 'required',
            'domain_transfer_work_year'                         => 'required|numeric',
            'domain_transfer_work_month'                        => 'required|numeric',
            'domain_transfer_work_day'                          => 'required|numeric',
            'domain_authcode'                                   => 'required',
            'domain_organization_name'                          => 'required',
            'domain_owner_name'                                 => 'required',
            'domain_department_name'                            => 'required',
            'domain_youraddress_english'                        => 'required',
            'domain_phone'                                      => 'required|numeric',
            'domain_email'                                      => 'required|email',

            'ssl_common_name'                                   => 'required',
            'ssl_organization_name_japan'                       => 'required',
            'ssl_organization_name_english'                     => 'required',
            'ssl_county_name_japan'                             => 'required',
            'ssl_county_name_english'                           => 'required',
            'ssl_name_person'                                   => 'required',
            'ssl_phone_number'                                  => 'required|numeric',

            'policyholders_organization_name'                   => 'required',
            'policyholders_representative_name'                 => 'required',
            'policyholders_name'                                => 'required',

            'person_organization_name'                          => 'required',
            'person_name'                                       => 'required',
            'person_department_name'                            => 'required',
            'person_your_address_1'                             => 'required',
            'person_your_address_2'                             => 'required',
            'person_tel'                                        => 'required|numeric',
            'person_email'                                      => 'required|email',
        );
    }

    public function mMoveCom()
    {
        return array(
            'app_plan_name.required'                                     => trans('validation.error_movecom_app_plan_name_required'),
            'app_domain_name.required'                                   => trans('validation.error_movecom_app_domain_name_required'),
            'app_service_start_date.required'                            => trans('validation.error_movecom_app_service_start_date_required'),
            'app_payment_method_1.required'                              => trans('validation.error_movecom_app_payment_method_1_required'),
            'app_payment_method_2.required'                              => trans('validation.error_movecom_app_payment_method_2_required'),
            'app_generation.required'                                    => trans('validation.error_movecom_app_generation_required'),

            'domain_transfe.required'                                    => trans('validation.error_movecom_domain_transfe_required'),
            'domain_owner.required'                                      => trans('validation.error_movecom_domain_owner_required'),
            'domain_transfer_work_year.required'                         => trans('validation.error_movecom_domain_transfer_work_year_required'),
            'domain_transfer_work_month.required'                        => trans('validation.error_movecom_domain_transfer_work_month_required'),
            'domain_transfer_work_day.required'                          => trans('validation.error_movecom_domain_transfer_work_day_required'),
            'domain_authcode.required'                                   => trans('validation.error_movecom_domain_authcode_required'),
            'domain_organization_name.required'                          => trans('validation.error_movecom_domain_organization_name_required'),
            'domain_owner_name.required'                                 => trans('validation.error_movecom_domain_owner_name_required'),
            'domain_department_name.required'                            => trans('validation.error_movecom_domain_department_name_required'),
            'domain_youraddress_english.required'                        => trans('validation.error_movecom_domain_youraddress_english_required'),
            'domain_phone.required'                                      => trans('validation.error_movecom_domain_phone_required'),
            'domain_phone.numeric'                                       => trans('validation.error_movecom_domain_phone_numeric'),
            'domain_email.required'                                      => trans('validation.error_movecom_domain_email_required'),
            'domain_email.email'                                         => trans('validation.error_movecom_domain_email_email'),

            'ssl_common_name.required'                                   => trans('validation.error_movecom_ssl_common_name_required'),
            'ssl_organization_name_japan.required'                       => trans('validation.error_movecom_ssl_organization_name_japan_required'),
            'ssl_organization_name_english.required'                     => trans('validation.error_movecom_ssl_organization_name_english_required'),
            'ssl_county_name_japan.required'                             => trans('validation.error_movecom_ssl_county_name_japan_required'),
            'ssl_county_name_english.required'                           => trans('validation.error_movecom_ssl_county_name_english_required'),
            'ssl_name_person.required'                                   => trans('validation.error_movecom_ssl_name_person_required'),
            'ssl_phone_number.required'                                  => trans('validation.error_movecom_ssl_phone_number_required'),
            'ssl_phone_number.numeric'                                   => trans('validation.error_movecom_ssl_phone_number_numeric'),

            'policyholders_organization_name.required'                   => trans('validation.error_movecom_policyholders_organization_name_required'),
            'policyholders_representative_name.required'                 => trans('validation.error_movecom_policyholders_representative_name_required'),
            'policyholders_name.required'                                => trans('validation.error_movecom_policyholders_name_required'),

            'person_organization_name.required'                          => trans('validation.error_movecom_person_organization_name_required'),
            'person_name.required'                                       => trans('validation.error_movecom_person_name_required'),
            'person_department_name.required'                            => trans('validation.error_movecom_person_department_name_required'),
            'person_your_address_1.required'                             => trans('validation.error_movecom_person_your_address_1_required'),
            'person_your_address_2.required'                             => trans('validation.error_movecom_person_your_address_2_required'),
            'person_tel.required'                                        => trans('validation.error_movecom_person_tel_required'),
            'person_tel.numeric'                                         => trans('validation.error_movecom_person_tel_numeric'),
            'person_email.required'                                      => trans('validation.error_movecom_person_email_required'),
            'person_email.email'                                         => trans('validation.error_movecom_person_email_email'),
        );
    }
}