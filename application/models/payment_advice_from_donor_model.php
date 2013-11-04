<?php

class Payment_advice_from_donor_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
        
        
    public function set_payment_advice_from_donor()
{
        $this->load->helper('url');    

    
    $data = array(
                
                'date_paid' => $this->input->post('date_of_application'), 
                'application_number' => $this->input->post('new_application_number'), 
                'transaction_type' => $this->input->post('transfer_type'), 
                'donor_account' => $this->input->post('donor_account_name'), 
                'transaction_currency' => $this->input->post('transaction_currency'), 
                'rate_to_cedi' => $this->input->post('rate_to_cedi'),
                'rate_to_usd' => $this->input->post('rate_to_usd'),
                
               
                'amount_paid' => $this->input->post('amount_paid')
                
    );          

    
    $this->db->insert('payment_advice_from_donor', $data);
        return $data;
        
}
}