<?php
class Payment_advice_to_replenish_special_account extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('cash_transfer_model');
        $this->load->model('contracts_model');
        $this->load->model('sub_components_model');
        $this->load->model('components_model');
        $this->load->model('programs_model');
        $this->load->model('payment_advice_to_replenish_special_account_model');
        $this->load->library('session');
    }


	public function index() {
             if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');

            $data['username'] = $session_data['username'];
            $data['title'] = 'Application for withdrawal';

            $this->create_payment_advice_to_replenish_special_account();



        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
          }
        }



public function payment_advice_to_replenish_special_accounts(){

   
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];

        
            $this->load->helper('form');
            $this->load->library('form_validation');
            $data['title'] = 'Create payment advice to replenish special account';

            $feed = $this->payment_advice_to_replenish_special_account_model->set_payment_advice_to_replenish_special_account();

            $data['msg'] = 'Payment advice to replenish special account successfully created!';

            $this->load->view('includes/header', $data);
            $this->load->view('transactions/success', $data );
            $this->load->view('includes/footer');

  }


 



    public function create_payment_advice_to_replenish_special_account(){

      if($this->session->userdata('logged_in'))
      {
 
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];

        
            $this->load->helper('form');
            $this->load->library('form_validation');
            
            $data['title'] = 'Valideate contract code';
            

            $this->load->view('includes/header', $data);
            $this->load->view('transactions/create_payment_advice_to_replenish_special_account');
            $this->load->view('includes/footer');

     } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

  
}                                  