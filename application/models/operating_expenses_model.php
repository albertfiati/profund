<?php

class Operating_expenses_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
        
        
        public function get_operating_expenses($contracts_code)
{
		$query = $this->db->get_where('contracts', array("contracts_code" => $contracts_code));
		return $query->result_array();
	
}

public function set_operating_expenses()
{
	$this->load->helper('url');
	
//	$slug = url_title($this->input->post('consultancy_title'), 'dash', TRUE);
        
//        $component_code = $this->input->post('component_code');
//        $this->session->set_userdata('component_code', $component_code);
	
	$data = array(
            
                'contract_code' => $this->session->userdata('contract_code'),
		'date_of_agreement' => $this->input->post('date_of_agreement'),
                'date_of_commencement' => $this->input->post('date_of_commencement'),           
                'date_of_completion' => $this->input->post('date_of_completion'),
                'payment_terms' => $this->input->post('payment_terms'),
                
	);
	
	$this->db->insert('operating_expenses', $data);
        return $data;
        
}
}