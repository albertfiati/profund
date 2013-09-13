<?php

class Application_for_special_transfer_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
        
        
    public function set_application_for_specia_transfer()
{
        $this->load->helper('url');
        

        
        $data = array(
     
                   
                    
        );
        
       // $this->db->insert('components', $data);
            return true;
        
}
}