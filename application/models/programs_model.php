<?php

class Programs_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
        
        
public function get_programs()
{
		$query = $this->db->get('programs');
		return $query->result_array();
	
}

public function get_single_program($program_code)
{
		$query = $this->db->get_where('programs', array("program_code" => $program_code));
		return $query->result_array();
	
}

public function get_program($idp) 
    {

        $query = $this->db->get_where('programs', array('program_code' => $idp));
        return $query->row_array();
    }
    
public function get_components($idp) 
    {
        $query = $this->db->get_where('components', array('program_code' => $idp));
        return $query->result_array();
    }
    

    
public function delete_program($idp) 
    {
        $this->db->delete('programs', array('program_title' => $idp));
    }

public function set_program()
{
	$this->load->helper('url');
	
	$slug = url_title($this->input->post('program_title'), 'dash', TRUE);
	
	$data = array(
                'program_title' => $this->input->post('program_title'),
                'slug' => $slug,
		'program_code' => $this->input->post('program_code'),
                'program_objective' => $this->input->post('program_objective'),
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
                'program_currency' => $this->input->post('program_currency'),
                'program_amount' => $this->input->post('program_amount')
                
	);
        
	
	$this->db->insert('programs', $data);
        return $data;
}
}