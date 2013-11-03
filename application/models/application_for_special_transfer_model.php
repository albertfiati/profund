<?php

class Application_for_special_transfer_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
        
        
    public function set_application_for_special_transfer()
{
        $this->load->helper('url');    

    
    $data = array(
                
                'date_of_application' => $this->input->post('date_of_application'), 
                'new_application_number' => $this->input->post('new_application_number'), 
                'transfer_type' => $this->input->post('transfer_type'), 
                'donor_account_name' => $this->input->post('donor_account_name'), 
                'transaction_currency' => $this->input->post('transaction_currency'), 
                'rate_to_cedi' => $this->input->post('rate_to_cedi'),
                'rate_to_usd' => $this->input->post('rate_to_usd'),
                
                'advance_amount_requested' => $this->input->post('advance_amount_requested'),
                'programme_id' => $this->input->post('programme_id'),
                'remarks' => $this->input->post('remarks')
                
    );          

    
    $this->db->insert('application_for_special_transfer', $data);
        return $data;
        
}
}