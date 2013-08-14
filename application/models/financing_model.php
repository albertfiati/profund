<?php

class Financing_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
        
        
        public function get_works($contracts_code)
{
		$query = $this->db->get_where('contracts', array("contracts_code" => $contracts_code));
		return $query->result_array();
	
}

public function set_financing()
{
	$this->load->helper('url');
	
//	$slug = url_title($this->input->post('financing_title'), 'dash', TRUE);
        
//        $component_code = $this->input->post('component_code');
//        $this->session->set_userdata('component_code', $component_code);
	
	$data = array(
               
                
                'contract_code' => $this->session->userdata('contract_code'),
//                'slug' => $slug,
                'facility' => $this->input->post('facility'),
		'currency' => $this->input->post('currency'),
                'rate_to_usd' => $this->input->post('rate_to_usd'),           
                'value_date' => $this->input->post('value_date'),
                'donors_ref' => $this->input->post('donors_ref'),
                'ext_commit' => $this->input->post('external_commit'),
                'local_commit' => $this->input->post('local_commit'),
                
	);
	
	$this->db->insert('financing', $data);
        return $data;
        
}
}