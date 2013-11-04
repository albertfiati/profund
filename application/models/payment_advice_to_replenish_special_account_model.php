<?php

class Payment_advice_to_replenish_special_account_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
        
        
    public function set_payment_advice_to_replenish_special_account(){
        $this->load->helper('url');    

    
            $data = array(
                
                'date_paid' => $this->input->post('date_paid'), 
                'payment_instruction_number' => $this->input->post('payment_instruction_number'), 
                'transaction_type' => $this->input->post('transaction_type'), 
                'application_number' => $this->input->post('application_number'), 

                'donor_account' => $this->input->post('donor_account'), 
                'special_account' => $this->input->post('special_account'), 

                'transaction_currency' => $this->input->post('transaction_currency'), 
                'rate_to_cedi' => $this->input->post('rate_to_cedi'),
                'rate_to_usd' => $this->input->post('rate_to_usd'),

                'transferred_amount' => $this->input->post('amount_charged'), 
                       
    );          

    
    $this->db->insert('payment_advice_to_replenish_special_account', $data);
        return $data;
        
     }
}