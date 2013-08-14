<?php

class Sub_components_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
        
        


public function get_sub_components($component_code)
{
	$query = $this->db->get_where('sub_components', array('sub_component_code' => $component_code));
//	$query = $this->db->get_where('components', array('component_code' => $idc));
        return $query->row_array();
        
//        if($query -> num_rows() == 1)
//           {
//             return $query->result_array();
//           }
//           else
//           {
//             return false;
//           }
	
}
    
public function get_sub_component_contracts($sub_component_code) 
    {
        $query = $this->db->get_where('contracts', array('sub_component_code' => $sub_component_code));
        return $query->result_array();
    }
    
public function contract_details($contract_code) 
    {
        $query = $this->db->get_where('contracts', array('sub_component_code' => $sub_component_code));
        return $query->result_array();
    }

public function set_sub_component()
{
	$this->load->helper('url');
	
	$slug = url_title($this->input->post('sub_component_title'), 'dash', TRUE);
        
        $component_code = $this->session->userdata['component_code'];
	$total_amount = $this->input->post('donor_cost') + $this->input->post('local_cost');
        
	$data = array(
               
                'sub_component_title' => $this->input->post('sub_component_title'),
		'component_code' => $component_code,
                'sub_component_code' => $this->input->post('sub_component_code'),            
                'slug' => $slug,
                'sub_component_description' => $this->input->post('sub_component_description'),
               
                'local_cost' => $total_amount,
                
	);
	
	$this->db->insert('sub_components', $data);
        return $data;
        
}
}