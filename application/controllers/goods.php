<?php
class Goods extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('goods_model');
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
	
	$data['title'] = 'Create goods contract';
        $this->form_validation->set_error_delimiters('<div style="width:470px; margin:20px;" class="alert alert-error">', '</div>');
       
	
	$this->form_validation->set_rules('date_of_letter_of_award', 'Date of letter of award', 'required');
        $this->form_validation->set_rules('delivery_date', 'Delivery date', 'required');
        $this->form_validation->set_rules('payment_terms', 'Terms of payment', 'required');
        
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('includes/header', $data);	
		$this->load->view('goods/create_goods', $data);
		$this->load->view('includes/footer');
		
	}
	else
	{       $data['title'] = 'Create goods contract';
            
                $this->load->view('includes/header', $data);
		$data = $this->goods_model->set_goods();
                $this->load->view('goods/goods_success', $data);
                $this->load->view('includes/footer');
                
	}
}
}                                  