<?php
class Bank_charges extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('bank_charges_model');
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
            $data['title'] = 'Exchange gain/loss';

            $this->create_bank_charges();



        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
          }
        }


    public function bank_charge(){

   
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];

        
            $this->load->helper('form');
            $this->load->library('form_validation');
            $data['title'] = 'Create bank charges';

            $feed = $this->bank_charges_model->set_bank_charges();

            $data['msg'] = 'Bank charges successfully created!';

            $this->load->view('includes/header', $data);
            $this->load->view('transactions/success', $data );
            $this->load->view('includes/footer');

  }


    public function create_bank_charges(){

      if($this->session->userdata('logged_in'))
      {
 
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];

        
            $this->load->helper('form');
            $this->load->library('form_validation');
            
            $data['title'] = 'Valideate contract code';
            

            $this->load->view('includes/header', $data);
            $this->load->view('transactions/create_bank_charges');
            $this->load->view('includes/footer');

     } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

  
}                                  