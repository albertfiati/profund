<?php
class Consultancy extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('consultancy_model');
                $this->load->library('session');
	}

	public function index()
{
            $this->create();
                    
           
}

//	public function view($slug)
//{
//	$data['news_item'] = $this->news_model->get_news($slug);
//
//	if (empty($data['news_item']))
//	{
//		show_404();
//	}
//
//	$data['title'] = $data['news_item']['title'];
//
//	$this->load->view('templates/header', $data);
//	$this->load->view('news/view', $data);
//	$this->load->view('templates/footer');
//}
//

public function create()
{
    
 
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
//        $data['success_message'] = $session_data['success_message'];
        
	$this->load->helper('form');
	$this->load->library('form_validation');
	
	$data['title'] = 'Create consultancy contract';
        $this->form_validation->set_error_delimiters('<div style="width:470px; margin:20px;" class="alert alert-error">', '</div>');
       
	$this->form_validation->set_rules('consultancy_title', 'Works title', 'required');
//	$this->form_validation->set_rules('contract_code', 'Contract code', 'required');
        $this->form_validation->set_rules('date_of_agreement', 'Date of agreement', 'required');
        $this->form_validation->set_rules('date_of_commencement', 'Date of commencement', 'required');
        $this->form_validation->set_rules('date_of_completion', 'Date of completion', 'required');
        $this->form_validation->set_rules('payment_terms', 'Payment terms', 'required');
        
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('includes/header', $data);	
		$this->load->view('consultancy/create_consultancy', $data);
		$this->load->view('includes/footer');
		
	}
	else
	{       $data['title'] = 'Create consultancy contract';
            
                $this->load->view('includes/header', $data);
		$data = $this->consultancy_model->set_consultancy();
                $this->load->view('consultancy/consultancy_success', $data);
                $this->load->view('includes/footer');
                
	}
}
}                                  