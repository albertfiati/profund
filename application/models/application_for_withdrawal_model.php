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

public function set_application_for_withdrawal()
{
    $this->load->helper('url');    

    
    $data = array(
                
                'application_number' => $this->input->post('application_number'), 
                'certificate_number' => $this->input->post('certificate_number'), 
                'date_of_memo' => $this->input->post('date_of_memo'), 
                'pv_date' => $this->input->post('pv_date'), 
                'pv_number' => $this->input->post('pv_number'), 
                'program_code' => $this->input->post('program_code'),
                'contract_code' => $this->input->post('contract_code'),
                
                'fund_donor' => $this->input->post('fund_donor'),
                'agency' => $this->input->post('agency'),
                'net_amount_payable' => $this->input->post('net_amount_payable'),
                
                'amount_payable_by_local_sources' => $this->input->post('amount_payable_by_local_sources'),
                //'make_payment_direct_to' => $this->input->post('amake_direct_payment_to'),
                'fund_donor_type' => $this->input->post('fund_donor_type'),
                'amount_payable_by_donor' => $this->input->post('amount_payable_to_donor')
               // 'payment_method' => $this->input->post('payment_method'),
                //'contractor_code' => 'contractor_code',
               // 'debit_account' => 'debit_account',
                //'credit_account' => 'credit_account'
    );          

    
    $this->db->insert('application_for_redrawal', $data);
        return $data;
        
}
}