<?php

class Application_for_withdrawal_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
        
        
public function get_application_for_withdrawals(){
    $query = $this->db->get('application_for_redrawal');
    return $query->result_array();
}

public function get_application_for_withdrawals2($program_code){
    $query = $this->db->get_where('application_for_redrawal', array("program_code" => $program_code));
    return $query->result_array();
}

public function get_contract($contract_code) 
    {

        $query = $this->db->get_where('contracts', array('contract_code' => $contract_code));
        return $query->row_array();
    }
    
public function get_contract_type_details($type, $contract_code)
{
    $query = $this->db->get_where($type , array('contract_code' => $contract_code));
    return $query->result_array();
}
    
public function set_contract()
{
	$this->load->helper('url');
	
	$slug = url_title($this->input->post('contract_title'), 'dash', TRUE);

	$sub_component_code = $this->session->userdata['sub_component_code'];
        
	$data = array(
               
                'contract_code' => $this->input->post('contract_code'),
                'contract_title' => $this->input->post('contract_code'),
                'activity_type' => $this->input->post('activity_type'), 
		'sub_component_code' => $sub_component_code,
                'proc_type' => $this->input->post('proc_type'),            
                'slug' => $slug,
                'status' => $this->input->post('status'),
                'date_of_no_objection' => $this->input->post('date_of_no_objection'),
                
	);
	
	$this->db->insert('payment_certificate', $data);
        return $data;
        
}

public function set_payment_request_for_op()
{
    $this->load->helper('url');    

     $fluctuation_in_amount_payable = $this->input->post('fluctuation_in_amount_payable');
        $liquidation_damages = $this->input->post('liquidaion_damages');
        $deduction_for_mobilisation_advance = $this->input->post('deduction_for_mobilisation_advance');
        $retention = $this->input->post('retention');
        $withholding_tax = $this->input->post('withholding_tax');
        $asroc_dues = $this->input->post('asroc_dues');

        $deductions = $fluctuation_in_amount_payable + $liquidation_damages + $deduction_for_mobilisation_advance + $retention
                                   + $withholding_tax + $withholding_tax + $asroc_dues;

        $gross_value_of_work_done = $this->input->post('gross_value_of_work_done');
        $net_amount_payable = $gross_value_of_work_done - $deductions;

    $data = array(
 
                'date_received' => $this->input->post('date_received'), 
                'stage' => $this->input->post('stage'), 
                'asset_account' => $this->input->post('asset_account'),
                'location' => $this->input->post('location'),
                'transaction_currency' => $this->input->post('transaction_currency'),             
                'agency' => 'agency',
                'rate_to_usd' => $this->input->post('rate_to_usd'),
                'gross_value_of_work_done' => $this->input->post('gross_value_of_work_done'),
                'fluctuation_in_amount_payable' => $this->input->post('fluctuation_in_amount_payable'),
                'liquidation_damages' => $this->input->post('liquidaion_damages'),
                'deduction_for_mobilisation_advance' => $this->input->post('deduction_for_mobilisation_advance'),
                'retention' => $this->input->post('retention'),
                'withholding_tax' => $this->input->post('withholding_tax'),
                'asroc_dues' => $this->input->post('asroc_dues'),
                'net_amount_payable' => $net_amount_payable,
                'amount_payable_by_donors' => $this->input->post('amount_payable_to_donors'),
                'make_payment_direct_to' => $this->input->post('amake_direct_payment_to'),
                'payment_method' => $this->input->post('payment_method'),
                'contractor_code' => 'contractor_code',
                'debit_account' => 'debit_account',
                'credit_account' => 'credit_account'
    );          

    
    $this->db->insert('payment_request_for_op', $data);
        return $data;
        
}
}