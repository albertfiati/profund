<?php

class Goods_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
        
        
public function get_goods($contracts_code)
{
		$query = $this->db->get_where('contracts', array("contracts_code" => $contracts_code));
		return $query->result_array();
	
}

public function set_goods()
{
	$this->load->helper('url');
	
//	$slug = url_title($this->input->post('training_title'), 'dash', TRUE);
        
//        $component_code = $this->input->post('component_code');
//        $this->session->set_userdata('component_code', $component_code);
	
	$data = array(
            
                'contract_code' => $this->session->userdata('contract_code'),
		'date_of_letter_of_award' => $this->input->post('date_of_letter_of_award'),
                'delivery_date' => $this->input->post('delivery_date'),           
                'payment_terms' => $this->input->post('payment_terms'),
                
	);
	
	$this->db->insert('goods', $data);
        return $data;
        
}
}