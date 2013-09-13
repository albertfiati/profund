<?php

class Bank_interest_earned_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
        
        
    public function set_bank_interest_earned()
{
        $this->load->helper('url');
        

        
        $data = array(
     
                   
                    
        );
        
       // $this->db->insert('components', $data);
            return true;
        
}
}