<?php

class Bank_charges_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
        
        
    public function set_bank_charges()
{
        $this->load->helper('url');
        

        
        $data = array(
     
                   
                    
        );
        
       // $this->db->insert('components', $data);
            return true;
        
}
}