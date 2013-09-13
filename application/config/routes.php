<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['view_financing'] = 'financing/view';
$route['create_financing'] = 'financing/create';
$route['financing'] = 'financing';

$route['view_operating_expenses'] = 'operating_expenses/view';
$route['create_operating_expenses'] = 'operating_expenses/create';
$route['operating_expenses'] = 'operating_expenses';

$route['view_goods'] = 'goods/view';
$route['create_goods'] = 'goods/create';
$route['goods'] = 'goods';

$route['view_training'] = 'training/view';
$route['create_training'] = 'training/create';
$route['training'] = 'training';

$route['view_consultancy'] = 'consultancy/view';
$route['create_consultancy'] = 'consultancy/create';
$route['consultancy'] = 'consultancy';

$route['view_works'] = 'works/view';
$route['create_work'] = 'works/create';
$route['works'] = 'works';

$route['view_contracts'] = 'contracts/view';
$route['create_contract'] = 'contracts/create';
$route['contracts'] = 'contracts';

$route['create_fund'] = 'funds/create';
$route['view_funds'] = 'funds/view';
$route['allocate_fund'] = 'funds/allocate';
$route['funds'] = 'funds';

$route['create_sub_component'] = 'sub_components/create';
$route['view_sub_component'] = 'sub_components/view';
$route['sub_components'] = 'sub_components';

$route['show_component'] = 'components/show/';
$route['create_component'] = 'components/create';
$route['view_component'] = 'components/view';
$route['component_success'] = 'components/components_success';
$route['components'] = 'components';


$route['programs/show/components/show/'] = 'components/show/';
$route['show_program'] = 'programs/show/';
$route['create_program'] = 'programs/create';
$route['view_program'] = 'programs/view';
$route['program_success'] = 'programs/programs_success';
$route['programs'] = 'programs';

$route['create_payment_certificate'] = 'payment_certificate/create_payment_certificate';
$route['new_transaction']            = 'payment_certificate/new_transaction';
$route['validate_contract_code']       = 'payment_certificate/validate_contract_code';
$route['validate_contract']       = 'payment_certificate/validate_contract';
$route['create_funders']          = 'payment_certificate/create_funders';

$route['validate_contract_code_req'] = 'payment_request/validate_contract_code';
$route['validate_contract_req']       = 'payment_request/validate_contract';
$route['new_transaction_req']            = 'payment_request/new_transaction';

$route['validate_contract_code_op'] = 'payment_request_for_op/validate_contract_code';
$route['validate_contract_op']       = 'payment_request_for_op/validate_contract';
$route['new_transaction_op']            = 'payment_request_for_op/new_transaction';

$route['validate_payment_certificate_code'] = 'application_for_withdrawal/validate_payment_certificate_code';
$route['validate_payment_certificate']       = 'application_for_withdrawal/validate_payment_certificate';
$route['new_transaction_with']            = 'application_for_withdrawal/new_transaction_with';

$route['create_application_for_special_transfer'] = 'application_for_special_transfer/create_application_for_special_transfer';
$route['create_bank_interest_earned'] = 'bank_interest_earned/create_bank_interest_earned';
$route['create_exchange_gain_loss'] = 'exchange_gain_loss/create_exchange_gain_loss';
$route['create_bank_charges'] = 'bank_charges/create_bank_charges';
$route['create_cash_transfer'] = 'cash_transfer/create_cash_transfer';

$route['logout'] = 'home/logout';

$route['default_controller'] = "home";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */