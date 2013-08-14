<?php
class Financing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('financing_model');
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
	
	$data['title'] = 'Create fiancing contract';
        $this->form_validation->set_error_delimiters('<div style="width:470px; margin:20px;" class="alert alert-error">', '</div>');

//	$this->form_validation->set_rules('contract_code', 'Contract code', 'required');
        $this->form_validation->set_rules('facility', 'Facility', 'required');
        $this->form_validation->set_rules('currency', 'Currency', 'required');
        $this->form_validation->set_rules('rate_to_usd', 'Rate to USD', 'required');
        $this->form_validation->set_rules('value_date', 'Value date', 'required');
        $this->form_validation->set_rules('donors_ref', 'Donors reference', 'required');
        $this->form_validation->set_rules('external_commit', 'External commitment', 'required');
        $this->form_validation->set_rules('local_commit', 'Local commitment', 'required');
        
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('includes/header', $data);	
		$this->load->view('financing/create_financing', $data);
		$this->load->view('includes/footer');
		
	}
	else
	{       $data['title'] = 'Create financing contract';
            
                $this->load->view('includes/header', $data);
		$data = $this->financing_model->set_financing();
                $activity_type = $this->session->userdata('activity_type');
                $hrefs = '';
                 
                                if ($activity_type == 'works') {
                    $hrefs = 'works';
                } else if ($activity_type == 'consultancy'){
                    $hrefs = 'consultancy';
                } else if ($activity_type == 'goods'){
                    $hrefs = 'goods';
                }else if ($activity_type == 'operating_expenses'){
                    $hrefs = 'operating_expenses';
                
                }else if ($activity_type == 'fund'){
                    $hrefs = 'fund';
                }else if ($activity_type == 'training'){
                    $hrefs = 'training';
                }
                
                $this->session->set_userdata('href1', $hrefs);
                
                
                $this->load->view('financing/financing_success', $data);
                
               
                
                $this->load->view('includes/footer');
                
	}

}   }                               