<?php
class Funds extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('funds_model');
                $this->load->library('session');
	}

	public function index()
{
            $this->create();
           
}

private function isValid($fund_amount, $component_code)
{
        if ($fund_amount <= $this->unallocatedFunds($component_code))
            {
                return true;
            }
            
            return false;
        
}

private function unallocatedFunds($component_code)
{
     $unallocated = 0;
     
     $result = $this->funds_model->get_funds($component_code);
     
     if($result)
       {
         
         foreach($result as $row)
         {
          
            $unallocated = $unallocated + $row['fund_amount'];

           
         }
        
       }
//
//         $this->session->set_userdata('unallocated', $unallocated);
         return $unallocated;
}



public function success()
{
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $data['title'] = 'Funds success';
     
     $component_code = $this->session->userdata['component_code'];
     $component_funds = $this->funds_model->get_funds($component_code);
     $data['component_funds'] = $component_funds;
     
     $this->load->view('includes/header', $data);
     
		
                
                $this->load->view('funds/funds_success', $data);
                $this->load->view('includes/footer');
                
                
}

public function allocate()
{
//              $unallocated = 0;
//     
//     $result = $this->funds_model->get_funds($component_code = $this->session->userdata['component_code']);
//     
//     if($result)
//       {
//         
//         foreach($result as $row)
//         {
//          
//            $unallocated = $unallocated + $row['fund_amount'];
//
//           
//         }
//        
//       }
//
//         $this->session->set_userdata('unallocated', $unallocated);
//       $data['unallocated'] = $unallocated;
 
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
//      $data['success_message'] = $session_data['success_message'];
        
	$this->load->helper('form');
	$this->load->library('form_validation');
	
	$data['title'] = 'Allocate funds';
        $this->form_validation->set_error_delimiters('<div style="width:470px; margin:20px;" class="alert alert-error">', '</div>');
       
	
//        $this->form_validation->set_rules('component_code', 'Component code', 'required');
        $this->form_validation->set_rules('fund_donor', 'Fund donor', 'required');
        $this->form_validation->set_rules('fund_years', 'Fund years', 'required');
        $this->form_validation->set_rules('fund_amount', 'Estimated amount', 'required');
	
        $component_code = $this->session->userdata['component_code'];
        $fund_amount = $this->input->post('fund_amount');
        
                     $allocated = 0;
     
     $result = $this->funds_model->get_funds($component_code = $this->session->userdata['component_code']);
     
     if($result)
       {
         
         foreach($result as $row)
         {
          
            $allocated = $allocated + $row['fund_amount'];

           
         }
        
       }
       
       $unallocated = $session_data = $this->session->userdata('component_amount') - $allocated;
        
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('includes/header', $data);	
		$this->load->view('funds/allocate_fund', $data);
		$this->load->view('includes/footer');
		
	}
//        $this->isValid($fund_amount, $component_code)== false
	else if (($this->input->post('fund_amount')<= $unallocated) && ($fund_amount >0))
	{

                $data['title'] = 'Allocate funds';
               
//                
                
               
		    $data = $this->funds_model->set_fund();
                    redirect('funds/success');
                    
         }else {
                    $this->load->view('includes/header', $data);	
                    $this->load->view('funds/allocate_fund', $data);
                    $this->load->view('includes/footer');
                }
                
  
}
}                                  