<?php
class Exchange_gain_loss extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('exchange_gain_loss_model');
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
            $data['title'] = 'Exchange gain or loss';

            $this->create_exchange_gain_loss();



        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
          }
    }

    public function exchange_gain_or_loss(){

   
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];

        
            $this->load->helper('form');
            $this->load->library('form_validation');
            $data['title'] = 'Create exchange gain or loss';

            $feed = $this->exchange_gain_loss_model->set_exchange_gain_loss();

            $data['msg'] = 'Exchange gain or loss successfully created!';

            $this->load->view('includes/header', $data);
            $this->load->view('transactions/success', $data );
            $this->load->view('includes/footer');
    }

    
    public function create_exchange_gain_loss(){

      if($this->session->userdata('logged_in'))
      {
 
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];

        //$feed = $this->exchange_gain_loss_model->set_exchange_gain_loss();

        
            $this->load->helper('form');
            $this->load->library('form_validation');
            $data['title'] = 'Create exchange gain or loss';

            $this->load->view('includes/header', $data);
            $this->load->view('transactions/create_exchange_gain_loss', $data );
            $this->load->view('includes/footer');

     } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
}                                  