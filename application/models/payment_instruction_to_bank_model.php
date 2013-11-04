<?php

class Payment_instruction_to_bank_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
        
        
    public function set_payment_instruction_to_bank()
     {
        $this->load->helper('url');    

    
    $data = array(
                
                'date_paid' => $this->input->post('date_of_application'), 
                'payment_instruction_number' => $this->input->post('payment_instruction_number'),
                'payment_source' => $this->input->post('payment_source'), 
                'application_number' => $this->input->post('application_number'),
                'designated_account' => $this->input->post('designated_account'), 
                'transaction_currency' => $this->input->post('transaction_currency'), 
                
                
                'rate_to_cedi' => $this->input->post('rate_to_cedi'),
                'rate_to_usd' => $this->input->post('rate_to_usd'),
                'amount_paid' => $this->input->post('amount_paid'),
                'payment_bank_name' => $this->input->post('payment_bank_name'),
                'payment_instruction' => $this->input->post('payment_instruction'),
                'contractor_account' => $this->input->post('contractor_account'),
                'payment_advice_ref' => $this->input->post('amount_paid')
                
    );          

    
    $this->db->insert('payment_instruction_to_bank', $data);
        return $data;
        
    }
}