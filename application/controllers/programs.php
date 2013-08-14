<?php
class Programs extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('programs_model');
	}

public function index()
{
        
            if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');

            $data['username'] = $session_data['username'];
            $data['title'] = 'Welcome';


             $this->view();
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
             
            
}

function logout() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('home', 'refresh');
    }

	public function view()
{
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        
	$data['programs'] = $this->programs_model->get_programs();

	if (empty($data['programs']))
	{
		show_404();
	}

	$data['title'] = 'List of all Programs' ;

	$this->load->view('includes/header', $data);
	$this->load->view('programs/view_program', $data);
	$this->load->view('includes/footer');
}

public function show($idp)
{
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        
	$program_details = $this->programs_model->get_program($idp);
        $program_components = $this->programs_model->get_components($idp);
        
        $data['program_components'] = $program_components;
        $data['program_details'] = $program_details;
//        $this->load->helper('url');
       

//	if (empty($data['programs']))
//	{
//		show_404();
//	}

	$data['title'] = 'Show Program' ;

	$this->load->view('includes/header', $data);
	$this->load->view('programs/show_program', $data);
	$this->load->view('includes/footer');
}

public function delete($id) {
        $this->programs_model->delete_program($id);
        $this->load->helper('url');
        redirect('/programs');
    }

public function programs_success()
{
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        
	$data['programs'] = $this->programs_model->get_programs();

	if (empty($data['programs']))
	{
		show_404();
	}

	$data['title'] = 'List of all Programs' ;

	$this->load->view('includes/header', $data);
	$this->load->view('programs/program_success', $data);
	$this->load->view('includes/footer');
    
}


public function view_program() {
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['title'] = 'View Program';
        $this->load->view('includes/header', $data);
        $this->load->view('programs/view_one_program', $data);
        $this->load->view('includes/footer');
    }


public function create()
{
        if($this->session->userdata('logged_in'))
        {
             
             
      
    
        $session_data = $this->session->userdata('logged_in');
        
        
        $data['username'] = $session_data['username'];
        
        
	$this->load->helper('form');
	$this->load->library('form_validation');
	
	$data['title'] = 'Create a Program';
	$this->form_validation->set_error_delimiters('<div style="width:470px; margin:20px;" class="alert alert-error">', '</div>');
        
	$this->form_validation->set_rules('program_title', 'Program title', 'required');
	$this->form_validation->set_rules('program_code', 'Program code', 'required');
        $this->form_validation->set_rules('start_date', 'Start date', 'required');
        $this->form_validation->set_rules('end_date', 'End date', 'required');
        $this->form_validation->set_rules('program_objective', 'Program objective', 'required');
        $this->form_validation->set_rules('program_currency', 'Program currency', 'required');
        $this->form_validation->set_rules('program_amount', 'Program amount', 'required');
	
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('includes/header', $data);	
		$this->load->view('programs/create_program');
		$this->load->view('includes/footer');
		
	}
	else
	{
                
                $this->load->view('includes/header', $data);
		$data = $this->programs_model->set_program();
                
                $this->session->set_userdata('program_title', $data['program_title']);
                $this->session->set_userdata('program_code', $data['program_code']);
                
                
		$this->load->view('programs/program_success', $data);
		$this->load->view('includes/footer');
	}
        
              
       }else
       {
         //If no session, redirect to login page
         redirect('login', 'refresh');
       }
 }
} 