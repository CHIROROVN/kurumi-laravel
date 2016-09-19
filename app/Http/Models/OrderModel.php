<?php namespace App\Http\Models;


class OrderModel
{

    protected $table = false;

    public function RuleNewCoJp()
    {
        return array(
            'plan'                                    => 'required',
            'domain'                                  => 'required',
            'service'                                 => 'required',
            'paymonth'                                => 'required',
            'payinvoice'                              => 'required',
            'generation'                              => 'required',
//            'individual'                              => 'required',
            'organization_jp'                         => 'required',
            'furigana'                                => 'required|regex:/^[\x{3041}-\x{3096}]+$/u',
            'organization_en'                         => 'required|alpha_num',
            'postal_code'                             => 'required',
            'address_jp'                              => 'required',
            'address_en'                              => 'required|alpha_num',
            'regist_date'                             => 'required',
            'regist_land_address'                     => 'required',
            'representative_jp'                       => 'required',
            'representative_en'                       => 'required|alpha_num',
            'representative_title'                    => 'required',

            'domain_person_jp'                        => 'required',
            'domain_person_en'                        => 'required|alpha_num',
            'company_name'                            => 'required',
            'your_address'                            => 'required',
            'department'                              => 'required',
            'domain_title'                            => 'required',
            'domain_phone'                            => 'required|numeric',

            'domain_email'                            => 'required',
            'dns_server'                              => 'required',
            'dns_server_text3'                        => 'required',
            'dns_server_text4'                        => 'required',
            'common_name'                             => 'required',
            'organization_name_jp'                    => 'required',
            'organization_name_en'                    => 'required|alpha_num',
            'prefectures_jp'                          => 'required',
            'prefectures_en'                          => 'required|alpha_num',
            'name_person_charge'                      => 'required',
            'phone_number'                            => 'required',

            'policy_organization_name'                => 'required',
            'policy_representative_name'              => 'required',
            'policy_name'                             => 'required',
            'person_charge_info'                      => 'required',
            'person_charge_organization_name'         => 'required',
            'person_charge_name'                      => 'required',
            'person_charge_dept_name'                 => 'required',

            'person_charge_zipcode'                   => 'required',
            'person_charge_tel'                       => 'required|numeric',
            'person_charge_fax'                       => 'numeric',
            'person_charge_email_addrs'               => 'required',
        );
    }

    public function MsgNewCoJp()
    {
        return array(
            'plan.required'                                 => trans('validation.error_plan_required'),
            'domain.required'                               => trans('validation.error_domain_required'),
            'service.required'                              => trans('validation.error_service_required'),
            'paymonth.required'                             => trans('validation.error_paymonth_required'),
            'payinvoice.required'                           => trans('validation.error_payinvoice_required'),
            'generation.required'                           => trans('validation.error_generation_required'),
            'individual.required'                           => trans('validation.error_individual_required'),
            'organization_jp.required'                      => trans('validation.error_organization_jp_required'),
            'furigana.required'                             => trans('validation.error_furigana_required'),
            'furigana.regex'                                => trans('validation.error_furigana_regex'),
            'organization_en.required'                      => trans('validation.error_organization_en_required'),
            'organization_en.alpha_num'                     => trans('validation.error_organization_en_alpha_num'),
            'postal_code.required'                          => trans('validation.error_postal_code_required'),

            'address_jp.required'                           => trans('validation.error_address_jp_required'),
            'address_en.required'                           => trans('validation.error_address_en_required'),
            'address_en.alpha_num'                          => trans('validation.error_address_en_alpha_num'),
            'regist_date.required'                          => trans('validation.error_regist_date_required'),
            'regist_land_address.required'                  => trans('validation.error_regist_land_address_required'),

            'representative_jp.required'                    => trans('validation.error_representative_jp_required'),
            'representative_en.required'                    => trans('validation.error_representative_enpostal_code_required'),
            'representative_en.alpha_num'                   => trans('validation.error_representative_enpostal_code_alpha_num'),
            'representative_title.required'                 => trans('validation.error_representative_title_required'),
            'domain_person_regist.required'                 => trans('validation.error_domain_person_regist_required'),
            'domain_person_jp.required'                     => trans('validation.error_domain_person_jp_required'),

            'domain_person_en.required'                     => trans('validation.error_domain_person_en_required'),
            'domain_person_en.alpha_num'                    => trans('validation.error_domain_person_en_alpha_num'),

            'name_person_charge.required'                   => trans('validation.error_name_person_charge_required'),
            'phone_number.required'                         => trans('validation.error_phone_number_required'),
            'company_name.required'                         => trans('validation.error_company_name_required'),
            'your_address.required'                         => trans('validation.error_your_address_required'),
            'department.required'                           => trans('validation.error_department_required'),
            'domain_title.required'                         => trans('validation.error_domain_title_required'),
            'domain_phone.required'                         => trans('validation.error_domain_phone_required'),
            'domain_fax.numeric'                            => trans('validation.error_domain_fax_numeric'),
            'domain_email.required'                         => trans('validation.error_domain_email_required'),

            'dns_server.required'                           => trans('validation.error_dns_server_required'),
            'dns_server_text3.required'                     => trans('validation.error_dns_server_text3_required'),
            'dns_server_text4.required'                     => trans('validation.error_dns_server_text4_required'),

            'common_name.required'                          => trans('validation.error_common_name_required'),
            'organization_name_jp.required'                 => trans('validation.error_organization_name_jp_required'),

            'organization_name_en.required'                 => trans('validation.error_organization_name_en_required'),
            'organization_name_en.alpha_num'                => trans('validation.error_organization_name_en_alpha_num'),

            'prefectures_jp.required'                       => trans('validation.error_prefectures_jp_required'),
            'prefectures_en.required'                       => trans('validation.error_prefectures_en_required'),
            'prefectures_en.alpha_num'                      => trans('validation.error_prefectures_en_alpha_num'),
            'phone_number'                                  => trans('validation.error_phone_number_required'),
            'policy_contract_info.required'                 => trans('validation.error_policy_contract_info_rquired'),
            'policy_organization_name.required'             => trans('validation.error_policy_organization_name_required'),
            'policy_representative_name.required'           => trans('validation.error_ppolicy_representative_namerefectures_jp_required'),
            'policy_name.required'                          => trans('validation.error_policy_name_required'),
            'person_charge_info.required'                   => trans('validation.error_person_charge_info_required'),
            'person_charge_organization_name.required'      => trans('validation.error_person_charge_organization_name_required'),
            'person_charge_name.required'                   => trans('validation.error_person_charge_name_required'),
            'person_charge_dept_name.required'              => trans('validation.error_person_charge_dept_name_required'),
            'person_charge_title.required'                  => trans('validation.error_person_charge_title_required'),
            'person_charge_zipcode.required'                => trans('validation.error_person_charge_zipcode_required'),

            'person_charge_tel.required'                    => trans('validation.error_person_charge_tel_required'),
            'person_charge_tel.numeric'                     => trans('validation.error_person_charge_tel_numeric'),

            'person_charge_email_addrs.required'            => trans('validation.error_person_charge_email_addrs_required'),

        );
    }

    public function RuleNewJp()
    {
        return array(
            'plan'                                    => 'required',
            'domain'                                  => 'required',
            'service'                                 => 'required',

            'paymonth'                                => 'required',
            'payinvoice'                              => 'required',
            'generation'                              => 'required',
            //'individual'                              => 'required',

            'dns_organization_jp'                     => 'required',
            'dns_organization_en'                     => 'required|alpha_num',

            'dns_owner_name'                          => 'required',
            'dns_dept_name'                           => 'required',
            'dns_addrs_jp'                            => 'required',
            'dns_addrs_en'                            => 'required|alpha_num',
            'dns_email_addrs'                         => 'required',
            'public_contact'                          => 'required',
            'dns_server'                              => 'required',
            'common_name'                             => 'required',
            'organization_name_jp'                    => 'required',
            'organization_name_en'                    => 'required|alpha_num',
            'prefectures_jp'                          => 'required',
            'prefectures_en'                          => 'required|alpha_num',
            'name_person_charge'                      => 'required',
            'phone_number'                            => 'required',
            'policy_contract_info'                    => 'required',
            'policy_organization_name'                => 'required',
            'policy_representative_name'              => 'required',
            'policy_name'                             => 'required',
            'person_charge_info'                      => 'required',
            'person_charge_organization_name'         => 'required',
            'person_charge_name'                      => 'required',
            'person_charge_dept_name'                 => 'required',
            'person_charge_zipcode'                   => 'required',
            'person_charge_tel'                       => 'required|numeric',
            'person_charge_email_addrs'               => 'required|email',

        );
    }

    public function MsgNewJp()
    {
        return array(

            'plan.required'                                 => trans('validation.error_plan_required'),
            'domain.required'                               => trans('validation.error_domain_required'),
            'service.required'                              => trans('validation.error_service_required'),
            'paymonth.required'                             => trans('validation.error_paymonth_required'),
            'payinvoice.required'                           => trans('validation.error_payinvoice_required'),
            'generation.required'                           => trans('validation.error_generation_required'),
            'individual.required'                           => trans('validation.error_individual_required'),

            'dns_organization_jp.required'                  => trans('validation.error_dns_organization_jp_required'),
            'dns_organization_en.required'                  => trans('validation.error_dns_organization_en_required'),
            'dns_organization_en.alpha_num'                 => trans('validation.error_dns_organization_en_alpha_num'),
            'dns_owner_name.required'                       => trans('validation.error_dns_owner_name_required'),
            'dns_dept_name.required'                        => trans('validation.error_dns_dept_name_required'),
            'dns_addrs_jp.required'                         => trans('validation.error_dns_addrs_jp_required'),
            'dns_addrs_en.required'                         => trans('validation.error_dns_addrs_en_required'),
            'dns_addrs_en.alpha_num'                        => trans('validation.error_dns_addrs_en_alpha_num'),
            'dns_email_addrs.required'                      => trans('validation.error_dns_email_addrs_required'),
            'public_contact.required'                       => trans('validation.error_public_contact_required'),

            'dns_server.required'                           => trans('validation.error_dns_server_required'),
            'common_name.required'                          => trans('validation.error_common_name_required'),
            'organization_name_jp.required'                 => trans('validation.error_organization_name_jp_required'),
            'organization_name_en.required'                 => trans('validation.error_organization_name_en_required'),
            'organization_name_en.alpha_num'                => trans('validation.error_organization_name_en_alpha_num'),
            'prefectures_jp.required'                       => trans('validation.error_prefectures_jp_required'),
            'prefectures_en.required'                       => trans('validation.error_prefectures_en_required'),
            'prefectures_en.alpha_num'                      => trans('validation.error_prefectures_en_alpha_num'),
            'name_person_charge.required'                   => trans('validation.error_name_person_charge_required'),
            'phone_number.required'                         => trans('validation.error_phone_number_required'),
            'policy_contract_info.required'                 => trans('validation.error_policy_contract_info_rquired'),
            'policy_organization_name.required'             => trans('validation.error_policy_organization_name_required'),
            'policy_representative_name.required'           => trans('validation.error_ppolicy_representative_namerefectures_jp_required'),
            'policy_name.required'                          => trans('validation.error_policy_name_required'),
            'person_charge_info.required'                   => trans('validation.error_person_charge_info_required'),
            'person_charge_organization_name.required'      => trans('validation.error_person_charge_organization_name_required'),
            'person_charge_name.required'                   => trans('validation.error_person_charge_name_required'),
            'person_charge_dept_name.required'              => trans('validation.error_person_charge_dept_name_required'),
            'person_charge_zipcode.required'                => trans('validation.error_person_charge_zipcode_required'),
            'person_charge_tel.required'                    => trans('validation.error_person_charge_tel_required'),
            'person_charge_tel.numeric'                     => trans('validation.error_person_charge_tel_numeric'),
            'person_charge_email_addrs.required'            => trans('validation.error_person_charge_email_addrs_required'),
            'person_charge_email_addrs.email'               => trans('validation.error_person_charge_email_addrs_email'),     

        );
    }

    public function RuleNewCom()
    {
        return array(
            'plan'                                    => 'required',
            'domain'                                  => 'required',
            'service'                                 => 'required',
            'paymonth'                                => 'required',
            'payinvoice'                              => 'required',
            'generation'                              => 'required',
            'individual'                              => 'required',
            'dns_organization_jp'                     => 'required',
            'dns_organization_en'                     => 'required|alpha_num',
            'dns_owner_name'                          => 'required',
            'dns_dept_name'                           => 'required',
            'dns_addrs_jp'                            => 'required',
            'dns_addrs_en'                            => 'required|alpha_num', 
            'dns_phone'                               => 'required', 
            'dns_email_addrs'                         => 'required',
            'dns_server'                              => 'required', 
            'common_name'                             => 'required',
            'organization_name_jp'                    => 'required',
            'organization_name_en'                    => 'required|alpha_num',
            'prefectures_jp'                          => 'required',
            'prefectures_en'                          => 'required|alpha_num',
            'name_person_charge'                      => 'required',
            'phone_number'                            => 'required',
            'policy_contract_info'                    => 'required',
            'policy_organization_name'                => 'required',
            'policy_representative_name'              => 'required',
            'policy_name'                             => 'required',
            'person_charge_info'                      => 'required',
            'person_charge_organization_name'         => 'required',
            'person_charge_name'                      => 'required',
            'person_charge_dept_name'                 => 'required',
            'person_charge_zipcode'                   => 'required',
            //'person_charge_your_addrs'                => 'required',
            'person_charge_tel'                       => 'required|',
            'person_charge_email_addrs'               => 'required|email',

        );
    }

    public function MsgNewCom()
    {
        return array(
            'plan.required'                                 => trans('validation.error_plan_required'),
            'domain.required'                               => trans('validation.error_domain_required'),
            'service.required'                              => trans('validation.error_service_required'),
            'paymonth.required'                             => trans('validation.error_paymonth_required'),
            'payinvoice.required'                           => trans('validation.error_payinvoice_required'),
            'generation.required'                           => trans('validation.error_generation_required'),
            'individual.required'                           => trans('validation.error_individual_required'),
            'dns_organization_jp.required'                  => trans('validation.error_dns_organization_jp_required'),
            'dns_organization_en.required'                  => trans('validation.error_dns_organization_en_required'),
            'dns_organization_en.alpha_num'                 => trans('validation.error_dns_organization_en_alpha_num'),
            'dns_owner_name.required'                       => trans('validation.error_dns_owner_name_required'),
            'dns_dept_name.required'                        => trans('validation.error_dns_dept_name_required'),
            'dns_addrs_jp.required'                         => trans('validation.error_dns_addrs_jp_required'),
            'dns_addrs_en.required'                         => trans('validation.error_dns_addrs_en_required'),
            'dns_addrs_en.alpha_num'                        => trans('validation.error_dns_addrs_en_alpha_num'),

            'dns_phone.required'                            => trans('validation.error_dns_phone_required'),
            'dns_email_addrs.required'                      => trans('validation.error_dns_email_addrs_required'),

            'organization_jp.required'                      => trans('validation.error_organization_jp_required'),
            'furigana.required'                             => trans('validation.error_furigana_required'),
            'furigana.regex'                                => trans('validation.error_furigana_regex'),
            'organization_en.required'                      => trans('validation.error_organization_en_required'),
            'postal_code.required'                          => trans('validation.error_postal_code_required'),

            'address_jp.required'                           => trans('validation.error_address_jp_required'),
            'address_en.alpha_num'                          => trans('validation.error_address_en_alpha_num'),
            'address_en.required'                           => trans('validation.error_address_en_required'),
            'regist_date.required'                          => trans('validation.error_regist_date_required'),
            'regist_land_address.required'                  => trans('validation.error_regist_land_address_required'),

            'representative_jp.required'                    => trans('validation.error_representative_jp_required'),
            'representative_en.required'                    => trans('validation.error_representative_enpostal_code_required'),
            'representative_en.alpha_num'                   => trans('validation.error_representative_enpostal_code_alpha_num'),
            'representative_title.required'                 => trans('validation.error_representative_title_required'),
            'domain_person_regist.required'                 => trans('validation.error_domain_person_regist_required'),
            'domain_person_jp.required'                     => trans('validation.error_domain_person_jp_required'),
            'domain_person_en.required'                     => trans('validation.error_domain_person_en_required'),
            'domain_person_en.alpha_num'                    => trans('validation.error_domain_person_en_alpha_num'),

            'name_person_charge.required'                   => trans('validation.error_name_person_charge_required'),
            'phone_number.required'                         => trans('validation.error_phone_number_required'),
            'company_name.required'                         => trans('validation.error_company_name_required'),
            'your_address.required'                         => trans('validation.error_your_address_required'),
            'department.required'                           => trans('validation.error_department_required'),
            'domain_title.required'                         => trans('validation.error_domain_title_required'),
            'domain_phone.required'                         => trans('validation.error_domain_phone_required'),
            'domain_email.required'                         => trans('validation.error_domain_email_required'),
            'dns_server.required'                           => trans('validation.error_dns_server_required'),
            'common_name.required'                          => trans('validation.error_common_name_required'),
            'organization_name_jp.required'                 => trans('validation.error_organization_name_jp_required'),
            'organization_name_en.required'                 => trans('validation.error_organization_name_en_required'),
            'organization_name_en.alpha_num'                => trans('validation.error_organization_name_en_alpha_num'),
            'prefectures_jp.required'                       => trans('validation.error_prefectures_jp_required'),
            'prefectures_en.required'                       => trans('validation.error_prefectures_en_required'),
            'prefectures_en.alpha_num'                      => trans('validation.error_prefectures_en_alpha_num'),
            '.phone_number'                                 => trans('validation.error_phone_number_required'),
            'policy_contract_info.required'                 => trans('validation.error_policy_contract_info_rquired'),
            'policy_organization_name.required'             => trans('validation.error_policy_organization_name_required'),
            'policy_representative_name.required'           => trans('validation.error_ppolicy_representative_namerefectures_jp_required'),
            'policy_name.required'                          => trans('validation.error_policy_name_required'),
            'person_charge_info.required'                   => trans('validation.error_person_charge_info_required'),
            'person_charge_organization_name.required'      => trans('validation.error_person_charge_organization_name_required'),
            'person_charge_name.required'                   => trans('validation.error_person_charge_name_required'),
            'person_charge_dept_name.required'              => trans('validation.error_person_charge_dept_name_required'),
            'person_charge_title.required'                  => trans('validation.error_person_charge_title_required'),
            'person_charge_zipcode.required'                => trans('validation.error_person_charge_zipcode_required'),
            'person_charge_tel.required'                    => trans('validation.error_person_charge_tel_required'),
            'person_charge_tel.numeric'                     => trans('validation.error_person_charge_tel_numeric'),
            'person_charge_email_addrs.required'            => trans('validation.error_person_charge_email_addrs_required'),
            'person_charge_email_addrs.email'               => trans('validation.error_person_charge_email_addrs_email'),
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


    // move-jp
    public function rMoveJp()
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
            'domain_public_contact'                             => 'required',
            'domain_registered_name'                            => 'required',
            'domain_address_japan'                              => 'required',
            'domain_phone'                                      => 'required',

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

    public function mMoveJp()
    {
        return array(
            'app_plan_name.required'                                     => trans('validation.error_movejp_app_plan_name_required'),
            'app_domain_name.required'                                   => trans('validation.error_movejp_app_domain_name_required'),
            'app_service_start_date.required'                            => trans('validation.error_movejp_app_service_start_date_required'),
            'app_payment_method_1.required'                              => trans('validation.error_movejp_app_payment_method_1_required'),
            'app_payment_method_2.required'                              => trans('validation.error_movejp_app_payment_method_2_required'),
            'app_generation.required'                                    => trans('validation.error_movejp_app_generation_required'),

            'domain_transfe.required'                                    => trans('validation.error_movejp_domain_transfe_required'),
            'domain_owner.required'                                      => trans('validation.error_movejp_domain_owner_required'),
            'domain_transfer_work_year.required'                         => trans('validation.error_movejp_domain_transfer_work_year_required'),
            'domain_transfer_work_month.required'                        => trans('validation.error_movejp_domain_transfer_work_month_required'),
            'domain_transfer_work_day.required'                          => trans('validation.error_movejp_domain_transfer_work_day_required'),
            'domain_public_contact.required'                             => trans('validation.error_movejp_domain_public_contact_required'),
            'domain_registered_name.required'                            => trans('validation.error_movejp_domain_registered_name_required'),
            'domain_address_japan.required'                              => trans('validation.error_movejp_domain_address_japan_required'),
            'domain_phone.required'                                      => trans('validation.error_movejp_domain_phone_required'),

            'ssl_common_name.required'                                   => trans('validation.error_movejp_ssl_common_name_required'),
            'ssl_organization_name_japan.required'                       => trans('validation.error_movejp_ssl_organization_name_japan_required'),
            'ssl_organization_name_english.required'                     => trans('validation.error_movejp_ssl_organization_name_english_required'),
            'ssl_county_name_japan.required'                             => trans('validation.error_movejp_ssl_county_name_japan_required'),
            'ssl_county_name_english.required'                           => trans('validation.error_movejp_ssl_county_name_english_required'),
            'ssl_name_person.required'                                   => trans('validation.error_movejp_ssl_name_person_required'),
            'ssl_phone_number.required'                                  => trans('validation.error_movejp_ssl_phone_number_required'),
            'ssl_phone_number.numeric'                                   => trans('validation.error_movejp_ssl_phone_number_numeric'),

            'policyholders_organization_name.required'                   => trans('validation.error_movejp_policyholders_organization_name_required'),
            'policyholders_representative_name.required'                 => trans('validation.error_movejp_policyholders_representative_name_required'),
            'policyholders_name.required'                                => trans('validation.error_movejp_policyholders_name_required'),

            'person_organization_name.required'                          => trans('validation.error_movejp_person_organization_name_required'),
            'person_name.required'                                       => trans('validation.error_movejp_person_name_required'),
            'person_department_name.required'                            => trans('validation.error_movejp_person_department_name_required'),
            'person_your_address_1.required'                             => trans('validation.error_movejp_person_your_address_1_required'),
            'person_your_address_2.required'                             => trans('validation.error_movejp_person_your_address_2_required'),
            'person_tel.required'                                        => trans('validation.error_movejp_person_tel_required'),
            'person_tel.numeric'                                         => trans('validation.error_movejp_person_tel_numeric'),
            'person_email.required'                                      => trans('validation.error_movejp_person_email_required'),
            'person_email.email'                                         => trans('validation.error_movejp_person_email_email'),
        );
    }
}