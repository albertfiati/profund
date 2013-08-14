<?php

class Components_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
        
public function get_components($program_code)
{
	$query = $this->db->get_where('components', array('program_code' => $program_code));
        return $query->result_array();

}


public function get_single_component($component_code)
{
		$query = $this->db->get_where('components', array("component_code" => $component_code));
		return $query->result_array();
	
}

public function get_component($idc) 
    {
//        if ($idp === FALSE)
//        {
//            $query = $this->db->get('programs');
//            return $query->result_array();
//        }

        $query = $this->db->get_where('components', array('component_code' => $idc));
        return $query->row_array();
    }
    
public function get_sub_components($idc) 
    {
        $query = $this->db->get_where('sub_components', array('component_code' => $idc));
        return $query->result_array();
    }

public function set_component()
{
	$this->load->helper('url');
	
	$slug = url_title($this->input->post('component_title'), 'dash', TRUE);
        
        $program_code = $this->session->userdata['program_code'];
	
	$data = array(
 
                'component_code' => $this->input->post('component_code'), 
		'program_code' => $program_code,
                'component_title' => $this->input->post('component_title'),
                'implementing_agency' => $this->input->post('implementing_agency'),             
                'slug' => $slug,
                'component_amount' => $this->input->post('component_amount')
                
	);
	
	$this->db->insert('components', $data);
        return $data;
        
}
}