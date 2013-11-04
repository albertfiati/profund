<?php
class Cash_transfer extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('cash_transfer_model');
        $this->load->model('contracts_model');
        $this->load->model('sub_components_model');
        $this->load->model('components_model');
        $this->load->model('programs_model');
        $this->load->library('session');
    }


	public function index() {
             if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');

            $data['username'] = $session_data['username'];
            $data['title'] = 'Application for withdrawal';

            $this->create_cash_transfer();



        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
          }
        }


    public function cash_transfers(){

   
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];

        
            $this->load->helper('form');
            $this->load->library('form_validation');
            $data['title'] = 'Create cash transfer';

            $feed = $this->cash_transfer_model->set_cash_transfer();

            $data['msg'] = 'Cash transfer successfully created!';

            $this->load->view('includes/header', $data);
            $this->load->view('transactions/success', $data );
            $this->load->view('includes/footer');



  }




    public function create_cash_transfer(){

      if($this->session->userdata('logged_in'))
      {
 
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];

        
            $this->load->helper('form');
            $this->load->library('form_validation');
            
            $data['title'] = 'Create cash transfer';
            

            $this->load->view('includes/header', $data);
            $this->load->view('transactions/create_cash_transfer');
            $this->load->view('includes/footer');

     } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

  
}                                  