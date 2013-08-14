<?php
class Sub_Components extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('sub_components_model');
	}

	public function index()
{
            $this->create();
                    
           
}

public function show($sub_component_code)
{
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        
//        $sub_component_code = $this->session->userdata('sub_component_code');
//        $component_code = $this->session->userdata('component_code');
        
	$sub_component_details = $this->sub_components_model->get_sub_components($sub_component_code);
        
        $sub_component_contracts = $this->sub_components_model->get_sub_component_contracts($sub_component_code); 
        
        $data['contract_list'] = $sub_component_contracts;
        $data['sub_component_details'] = $sub_component_details;
        
//        $this->load->helper('url');
       
 
//	if (empty($data['programs']))
//	{
//		show_404();
//	}

	$data['title'] = 'Show Sub-component' ;

	$this->load->view('includes/header', $data);
	$this->load->view('sub_components/show_sub_component', $data);
	$this->load->view('includes/footer');
}



public function create()
{

        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
//        $data['success_message'] = $session_data['success_message'];
        
	$this->load->helper('form');
	$this->load->library('form_validation');
	
	$data['title'] = 'Create a Sub-Component';
        $this->form_validation->set_error_delimiters('<div style="width:470px; margin:20px;" class="alert alert-error">', '</div>');
       
	
//	$this->form_validation->set_rules('component_code', 'Component code', 'required');
        $this->form_validation->set_rules('sub_component_description', 'Sub-component description', 'required');
        $this->form_validation->set_rules('sub_component_title', 'Sub-component title', 'required');
        $this->form_validation->set_rules('sub_component_code', 'Sub-component code', 'required');
        $this->form_validation->set_rules('donor_cost', 'Donor cost', 'required');
        $this->form_validation->set_rules('local_cost', 'Local cost', 'required');
	
        $total_amount = $this->input->post('donor_cost') + $this->input->post('local_cost');
        
        $allocated = 0;

        $results = $this->sub_components_model->get_sub_components($this->session->userdata['component_code']);

         if($results != false)
           {
             foreach($results as $row)
             {
                $total = $row['donor_cost'] + $row['local_cost'];
                $allocated = $allocated + $total;
             }
           }

         $unallocated = $session_data = $this->session->userdata('component_amount') - $allocated;

        
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('includes/header', $data);	
		$this->load->view('sub_components/create_sub_component', $data);
		$this->load->view('includes/footer');
		
	}
	else if (($total_amount<= $unallocated) && ($this->input->post('donor_cost') >0) && $this->input->post('local_cost')>0)
	{       $data['title'] = 'Sub-Components List';
            
                $this->load->view('includes/header', $data);
		$data = $this->sub_components_model->set_sub_component();
                
                $this->session->set_userdata('sub_component_title', $data['sub_component_title']);
                $this->session->set_userdata('sub_component_code', $data['sub_component_code']);
                
                
                $this->load->view('sub_components/sub_component_success', $data);
                $this->load->view('includes/footer');
                
	}else {
                $this->load->view('includes/header', $data);	
		$this->load->view('sub_components/create_sub_component', $data);
		$this->load->view('includes/footer');
                }
}
}                                  