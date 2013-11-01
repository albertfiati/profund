<?php

class Bank_charges_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
        
        
    public function set_bank_charges(){
        $this->load->helper('url');    

    
            $data = array(
                
                'effective_date' => $this->input->post('effective_date'), 
                'transaction_currency' => $this->input->post('transaction_currency'), 
                'rate_to_cedi' => $this->input->post('rate_to_cedi'),
                'rate_to_usd' => $this->input->post('rate_to_usd'),

                'amount_charged' => $this->input->post('amount_charged'), 
                'operating_cost_account' => $this->input->post('operating_cost_account'), 
                'account_type' => $this->input->post('account_type'), 
                'programme_id' => $this->input->post('programme_id'),
                'component_code' => $this->input->post('component_code'),
               
                
                'remarks' => $this->input->post('remarks')                
    );          

    
    $this->db->insert('bank_charges', $data);
        return $data;
        
     }
}