<?php

class Payment_certificate_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
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

public function get_payment_certificates(){
    $query = $this->db->get('payment_certificate');
    return $query->result_array();
}

public function get_payment_certificate($payment_certificate_code){
    $query = $this->db->get('payment_certificate');
    return $query->row_array();
}

public function get_payment_certificates2($program_code){
    $query = $this->db->get_where('payment_certificate', array('program_code' => $program_code));
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

public function set_payment_certificate()
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
                'certificate_number' => $this->input->post('certificate_number'),
                'contract_code' => $this->input->post('contract_code'),
                'program_code' => $this->input->post('program_code'),
                'fund_donor' => $this->input->post('fund_donor'),
                'fund_donor_type' => $this->input->post('fund_donor_type'),
                'contractor' => $this->input->post('contractor'),
                'transaction_currency' => $this->input->post('transaction_currency'),             
                'agency' => $this->session->userdata['implementing_agency'],
                'rate_to_usd' => $this->input->post('rate_to_usd'),
                'gross_value_of_work_done' => $this->input->post('gross_value_of_work_done'),
                'location' => $this->input->post('location'),
                'reference_to_works_completed' => $this->input->post('location'),
                'fluctuation_in_amount_payable' => $this->input->post('fluctuation_in_amount_payable'),
                'liquidation_damages' => $this->input->post('liquidaion_damages'),
                'deduction_for_mobilisation_advance' => $this->input->post('deduction_for_mobilisation_advance'),
                'retention' => $this->input->post('retention'),
                'withholding_tax' => $this->input->post('withholding_tax'),
                'asroc_dues' => $this->input->post('asroc_dues'),
                'other_deductions' => $this->input->post('other_deductions'),
                'net_amount_payable' => $net_amount_payable,
                'amount_payable_by_donors' => $this->input->post('amount_payable_to_donors'),
                'amount_payable_by_local_sources' => $this->input->post('amount_payable_by_local_sources'),
                'make_payment_direct_to' => $this->input->post('amake_direct_payment_to'),
                'payment_method' => $this->input->post('payment_method'),
                'contractor_code' => $this->session->userdata['contractor_code'],
                'debit_account' => $this->session->userdata['contractor_code'],
                'credit_account' => $this->session->userdata['contractor_code']
    );          

    
    $this->db->insert('payment_certificate', $data);
        return $data;
        
}
}