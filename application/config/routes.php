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

$route['validate_contract_code_req'] = 'payment_request/validate_contract_code_req';
$route['validate_contract_req']       = 'payment_request/validate_contract_req';
$route['new_transaction_req']            = 'payment_request/new_transaction_req';
$route['create_payment_request'] = 'payment_request/create_payment_request';

$route['validate_contract_code_op'] = 'payment_request_for_op/validate_contract_code_op';
$route['validate_contract_op']       = 'payment_request_for_op/validate_contract_op';
$route['new_transaction_op']            = 'payment_request_for_op/new_transaction_op';
$route['create_payment_request_op'] = 'payment_request_for_op/create_payment_request_op';

$route['validate_payment_certificate_code'] = 'application_for_withdrawal/validate_payment_certificate_code';
$route['validate_payment_certificate']       = 'application_for_withdrawal/validate_payment_certificate';
$route['new_transaction_with']            = 'application_for_withdrawal/new_transaction_with';
$route['create_application_for_with'] = 'application_for_withdrawal/create_application_for_with';


$route['application_for_transfer'] = 'application_for_special_transfer/application_for_transfer';
$route['create_application_for_special_transfer'] = 'application_for_special_transfer/create_application_for_special_transfer';

$route['bank_interest_earned'] = 'bank_interest_earned/exchange_gain_or_loss';
$route['create_bank_interest_earned'] = 'bank_interest_earned/create_bank_interest_earned';

$route['exchange_gain_or_loss'] = 'exchange_gain_loss/exchange_gain_or_loss';
$route['create_exchange_gain_loss'] = 'exchange_gain_loss/create_exchange_gain_loss';

$route['create_bank_interest_earned'] = 'bank_interest_earned/create_bank_interest_earned';
$route['bank_interests_earned'] = 'bank_interest_earned/bank_interests_earned';

$route['create_bank_charges'] = 'bank_charges/create_bank_charges';
$route['bank_charge'] = 'bank_charges/bank_charge';

$route['create_cash_transfer'] = 'cash_transfer/create_cash_transfer';
$route['cash_transfers'] = 'cash_transfer/cash_transfers';

$route['validate_contract_code_pay_inst_bank'] = 'payment_instruction_to_bank/validate_contract_code_pay_inst_bank';
$route['validate_contract_pay_inst_bank']       = 'payment_instruction_to_bank/validate_contract_pay_inst_bank';
$route['create_payment_instruction_to_bank']            = 'payment_instruction_to_bank/create_payment_instruction_to_bank';
$route['new_transaction_pay_inst_bank']            = 'payment_instruction_to_bank/new_transaction_pay_inst_bank';


$route['validate_contract_code_ad_don'] = 'payment_advice_from_donor/validate_contract_code_ad_don';
$route['validate_contract_ad_don']       = 'payment_advice_from_donor/validate_contract_ad_don';
$route['create_payment_advice_from_donor']            = 'payment_advice_from_donor/create_payment_advice_from_donor';
$route['new_transaction_ad_don']            = 'payment_advice_from_donor/new_transaction_ad_don';

$route['create_payment_advice_to_replenish_special_account'] = 'payment_advice_to_replenish_special_account/create_payment_advice_to_replenish_special_account';
$route['payment_advice_to_replenish_special_accounts'] = 'payment_advice_to_replenish_special_account/payment_advice_to_replenish_special_accounts';

//Reports
$route['validate_report_form'] = 'contractors_ledger/validate_report_form';
$route['create_contractors_ledger'] = 'contractors_ledger/create_contractors_ledger';

$route['validate_sector_funds'] = 'sector_funds/validate_sector_funds';
$route['create_sector_funds'] = 'sector_funds/create_sector_funds';

$route['validate_sector_funds_per_agency'] = 'sector_funds_per_agency/validate_sector_funds_per_agency';
$route['create_sector_funds_per_agency'] = 'sector_funds_per_agency/create_sector_funds_per_agency';

$route['logout'] = 'home/logout';

$route['default_controller'] = "home";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */