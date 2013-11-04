<?php

class Cash_transfer_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
        
        
    public function set_cash_transfer()
{
        $this->load->helper('url');    

    
    $data = array(
                
                'date_transferred' => $this->input->post('date_transferred'), 
                'pay_instruction_number' => $this->input->post('pay_instruction_number'), 
                'donor_account_code' => $this->input->post('donor_account_code'), 
                'application_number' => $this->input->post('application_number'), 
                'transfer_from_account' => $this->input->post('transfer_from_account'), 
                'transfer_to_account' => $this->input->post('transfer_to_account'), 
                'transaction_currency' => $this->input->post('transaction_currency'), 
                'rate_to_cedi' => $this->input->post('rate_to_cedi'),
                'rate_to_usd' => $this->input->post('rate_to_usd'),
                
                'transferred_amount' => $this->input->post('transferred_amount'),
              
                'remarks' => $this->input->post('remarks')             
    );          

    
    $this->db->insert('cash_transfer', $data);
        return $data;
        
}
}