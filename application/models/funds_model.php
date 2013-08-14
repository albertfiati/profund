<?php

class Funds_model extends CI_Model {

public function __construct()
{
	$this->load->database();
}
        
        
public function get_funds($component_code)
{
	$query = $this->db->get_where('funds', array("component_code" => $component_code));
	
        
        if($query -> num_rows() >= 1)
           {
             return $query->result_array();
           }
           else
           {
             return false;
           }
	
}


//
//private function checkComponentAmount($component_code)
//{
//        $query = $this->db->get_where('components', array("component_code" => $component_code));
//	return $query->result_array();
//}
//
//private function unallocatedFunds($component_code){
//    
//        $query = $this->db->get_where('components', array("component_code" => $component_code));
//	return $query->result_array();
//    
//}

public function set_fund()
{
	$this->load->helper('url');

        
    
        $component_code = $this->session->userdata['component_code'];
	
	$data = array(
               
//		'fund_code' => $this->input->post('fund_code'),
                'component_code' => $component_code,                                
                'fund_donor' => $this->input->post('fund_donor'),
                'fund_code'  => $this->input->post('fund_donor') . $this->input->post('fund_years'),
                'fund_years' => $this->input->post('fund_years'),
                'fund_amount' => $this->input->post('fund_amount')
                
	);
	
	$this->db->insert('funds', $data);
        return $data;
        
}
}