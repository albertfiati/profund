<?php
class Components extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('components_model');
                $this->load->model('funds_model');
	}

	public function index()
{
             if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');

            $data['username'] = $session_data['username'];
            $data['title'] = 'Components';


             $this->create();
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
                
}

public function show($idc)
{
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        
	$component_details = $this->components_model->get_component($idc);
        
        $component_sub_components = $this->components_model->get_sub_components($idc);
        $component_funds = $this->funds_model -> get_funds($idc);
        $data['component_funds'] = $component_funds;
        
        
        $data['component_sub_components'] = $component_sub_components;
        $data['component_details'] = $component_details;
        
//        $this->load->helper('url');
       

//	if (empty($data['programs']))
//	{
//		show_404();
//	}
        
        
         $unallocated = 0;
     
     $result = $this->funds_model->get_funds($component_details['component_code']);
     
     if($result)
       {
         
         foreach($result as $row)
         {
          
            $unallocated = $unallocated + $row['fund_amount'];

           
         }
        
       }
//
//         $this->session->set_userdata('unallocated', $unallocated);
       $data['unallocated'] = $unallocated;
        

	$data['title'] = 'Show Component' ;

	$this->load->view('includes/header', $data);
	$this->load->view('components/show_component', $data);
	$this->load->view('includes/footer');
}


public function create()
{
    if($this->session->userdata('logged_in'))
      {
           
 
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
//        $data['success_message'] = $session_data['success_message'];
        
	$this->load->helper('form');
	$this->load->library('form_validation');
	
	$data['title'] = 'Create a component';
        $this->form_validation->set_error_delimiters('<div style="width:470px; margin:20px;" class="alert alert-error">', '</div>');
       
	
	$this->form_validation->set_rules('component_code', 'Component code', 'required');
//	$this->form_validation->set_rules('program_code', 'Program code', 'required');
        $this->form_validation->set_rules('component_title', 'Component title', 'required');
        $this->form_validation->set_rules('implementing_agency', 'Implementing agency', 'required');
        $this->form_validation->set_rules('component_amount', 'Component amount', 'required');
        $this->form_validation->set_rules('component_amount', 'Component amount', 'required');
	
        $total = $this->input->post('component_amount');
        $allocated = 0;
        

        $results = $this->components_model->get_components($this->session->userdata['program_code']);

         if($results != false)
           {
             foreach($results as $row)
             {
      
                $allocated = $allocated + $row['component_amount'];
             
             }
           }

         $unallocated = $this->session->userdata('program_amount') - $allocated;
        $data['allocated'] = $allocated;
        
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('includes/header', $data);	
		$this->load->view('components/create_component', $data);
		$this->load->view('includes/footer');
		
	}
	else if ($unallocated >= $total )
//            && ($this->input->post('component_amount') >0)

	{
                $this->load->view('includes/header', $data);
		$data = $this->components_model->set_component();
               
                $data['title'] = 'Components List';
                
                $this->session->set_userdata('component_title', $data['component_title']);
                $this->session->set_userdata('component_code', $data['component_code']);
                $this->session->set_userdata('component_amount', $data['component_amount']);

                $this->load->view('components/component_success', $data);
                $this->load->view('includes/footer');
        } else {
                $this->load->view('includes/header', $data);	
		$this->load->view('components/create_component', $data);
		$this->load->view('includes/footer');
                }

      }
}    }                            