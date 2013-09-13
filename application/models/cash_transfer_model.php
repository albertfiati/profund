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
     
                   
                    
        );
        
       // $this->db->insert('components', $data);
            return true;
        
}
}