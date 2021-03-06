<?php
class Contracts extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('contracts_model');
        $this->load->model('sub_components_model');
        $this->load->model('components_model');
        $this->load->model('programs_model');
                $this->load->library('session');
	}

	public function index()
{
            $this->create();
                    
           
}





public function show()
{
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        
//        $contract_code = $this->session->userdata('contract_code');
        $contract_code = 'SC00001';
        
	$contract_details = $this->contracts_model->get_contract($contract_code);
        $data['contract_details'] = $contract_details;
        $type = $contract_details['activity_type'];
        
        
        $contract_type_details = $this->contracts_model->get_contract_type_details($type, $contract_code);
        
        $data['contract_type_details'] = $contract_type_details;
        $data['type'] = $type;



	$data['title'] = 'Show contract';

	$this->load->view('includes/header', $data);
        
        if ($type == 'works'){
            $this->load->view('contracts/show_contract', $data);
        }else if ($type == 'goods'){
            $this->load->view('goods/show_goods', $data);
        }else if ($type == 'consultancy'){
            $this->load->view('consultancy/show_consultancy', $data);
        }else if ($type == 'operating_expenses'){
            $this->load->view('operating_expenses/show_operating_expenses', $data);
        }else if ($type == 'training'){
            $this->load->view('training/show_training', $data);
        }
        
        
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
       
	
	$this->form_validation->set_rules('contract_code', 'Contract code', 'required');
        $this->form_validation->set_rules('contract_title', 'Contract title', 'required');
//        $this->form_validation->set_rules('sub_component_code', 'Sub-component code', 'required');
        $this->form_validation->set_rules('proc_type', 'Procurement type', 'required');
        $this->form_validation->set_rules('activity_type', 'Activity type', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('date_of_no_objection', 'Date of no objection', 'required');
        
	
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('includes/header', $data);	
		$this->load->view('contracts/create_contract', $data);
		$this->load->view('includes/footer');
		
	}
	else
	{       $data['title'] = 'Create contract';
            
                $this->load->view('includes/header', $data);
		$data = $this->contracts_model->set_contract();
                $activity_type = $data['activity_type'];
                $href = '';
                

                
                $data['href'] = 'financing';
                $this->session->set_userdata('contract_code', $data['contract_code']);
                $this->session->set_userdata('activity_type', $data['activity_type']);
                $this->load->view('contracts/contract_success', $data);
                
               
                $this->load->view('includes/footer');
                
	}
}
}                                  