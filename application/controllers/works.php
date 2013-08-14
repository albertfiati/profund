<?php
class Works extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('works_model');
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
	
	$data['title'] = 'Create works contract';
        $this->form_validation->set_error_delimiters('<div style="width:470px; margin:20px;" class="alert alert-error">', '</div>');
       
	
        $this->form_validation->set_rules('date_of_tender_opening', 'Date of tender opening', 'required');
        $this->form_validation->set_rules('date_of_contract_award', 'Date of contract award', 'required');
        $this->form_validation->set_rules('date_of_signing_agreement', 'Date of signing agreement', 'required');
        $this->form_validation->set_rules('date_of_commencement', 'Date of commencement', 'required');
        $this->form_validation->set_rules('date_of_contract_completion', 'Date of contract completion', 'required');
	$this->form_validation->set_rules('date_of_defects_liability', 'Date of defects liability', 'required');
        
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('includes/header', $data);	
		$this->load->view('works/create_work', $data);
		$this->load->view('includes/footer');
		
	}
	else
	{       $data['title'] = 'Create works contract';
            
                $this->load->view('includes/header', $data);
		$data = $this->works_model->set_works();
                $this->load->view('works/works_success', $data);
                $this->load->view('includes/footer');
                
	}
}
}                                  