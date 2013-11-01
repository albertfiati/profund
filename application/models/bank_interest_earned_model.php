<?php

class Bank_interest_earned_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
        
        
    public function set_bank_interest_earned(){
        $this->load->helper('url');    

    
            $data = array(
                
                'effective_date' => $this->input->post('effective_date'), 
                'transaction_currency' => $this->input->post('transaction_currency'), 
                'rate_to_cedi' => $this->input->post('rate_to_cedi'),
                'rate_to_usd' => $this->input->post('rate_to_usd'),
                'amount_earned' => $this->input->post('amount_earned'), 
                'interest_account' => $this->input->post('interest_account'), 
                'account_type' => $this->input->post('account_type'), 
                'programme_id' => $this->input->post('programme_id'),
                'component_code' => $this->input->post('component_code'),
                'donor_account_name' => $this->input->post('donor_account_name'), 
   
                'gain_loss_account' => $this->input->post('gain_loss_account'),
                
                'remarks' => $this->input->post('remarks')
                
    );          

    
    $this->db->insert('bank_interest_earned', $data);
        return $data;
        
     }
}