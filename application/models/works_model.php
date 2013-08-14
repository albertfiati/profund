<?php

class Works_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
        
        
        public function get_works($contracts_code)
{
		$query = $this->db->get_where('contracts', array("contracts_code" => $contracts_code));
		return $query->result_array();
	
}

public function set_works()
{
	$this->load->helper('url');
	
	$slug = url_title($this->input->post('works_title'), 'dash', TRUE);
        
//        $component_code = $this->input->post('component_code');
//        $this->session->set_userdata('component_code', $component_code);
	
	$data = array(
               
              
                'contract_code' => $this->session->userdata('contract_code'),
		'date_of_tender_opening' => $this->input->post('date_of_tender_opening'),
                'date_of_contract_award' => $this->input->post('date_of_contract_award'),           
                'date_of_signing_agreement' => $this->input->post('date_of_signing_agreement'),
                'date_of_commencement' => $this->input->post('date_of_commencement'),
                'date_of_contract_completion' => $this->input->post('date_of_contract_completion'),
                'date_of_defects_liability' => $this->input->post('date_of_defects_liability')
                
	);
	
	$this->db->insert('works', $data);
        return $data;
        
}
}