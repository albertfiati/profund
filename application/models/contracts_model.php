<?php

class Contracts_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
        
public function get_contracts()
{
        $query = $this->db->get('contracts');
        return $query->result_array();
    
}
        

public function get_contract($contract_code) 
    {

        $query = $this->db->get_where('contracts', array('contract_code' => $contract_code));
        return $query->row_array();
    }
    
public function get_contract_type_details($type, $contract_code)
{
    $query = $this->db->get_where($type , array('contract_code' => $contract_code));
    return $query->result_array();
}
    
public function set_contract()
{
	$this->load->helper('url');
	
	$slug = url_title($this->input->post('contract_title'), 'dash', TRUE);

	$sub_component_code = $this->session->userdata['sub_component_code'];
        
	$data = array(
               
                'contract_code' => $this->input->post('contract_code'),
                'contract_title' => $this->input->post('contract_code'),
                'activity_type' => $this->input->post('activity_type'), 
		'sub_component_code' => $sub_component_code,
                'proc_type' => $this->input->post('proc_type'),            
                'slug' => $slug,
                'status' => $this->input->post('status'),
                'date_of_no_objection' => $this->input->post('date_of_no_objection'),
                
	);
	
	$this->db->insert('contracts', $data);
        return $data;
        
}
}