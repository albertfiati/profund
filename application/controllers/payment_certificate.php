<?php
class Payment_certificate extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('payment_certificate_model');
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
            $data['title'] = 'Payment_certificate';

            $this->validate_contract_code();

        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
        }

    public function validate_contract_code() {

        if($this->session->userdata('logged_in'))
      {
 
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];

        
            $this->load->helper('form');
            $this->load->library('form_validation');
            
            $data['title'] = 'Valideate contract code';
            

            $this->load->view('includes/header', $data);
            $this->load->view('transactions/get_contract');
            $this->load->view('includes/footer');

     } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }



    public function validate_contract() {
//        $this->load->view('transactions/create_payment_certificate', $_REQUEST);

        $contract_code = $_REQUEST[ 'contract_code' ];
        $contract      = $this->contracts_model->get_contract( $contract_code );

        $this->session->set_userdata('component_title', '');
        $this->session->set_userdata('program_title', '');

        $sub_component_code = $contract['sub_component_code'];

        $sub_component = $this->sub_components_model->get_sub_component($sub_component_code);
        $component_code = $sub_component['component_code'];

        $component = $this->components_model->get_component($component_code);
        $program_code = $component['program_code'];

        $program = $this->programs_model->get_program($program_code);

        $this->session->set_userdata('sub_component_code', $sub_component_code);
        $this->session->set_userdata('component_code', $component_code);
        $this->session->set_userdata('activity_type', $contract['activity_type']);

        $this->session->set_userdata('component_title', $component['component_title']);
        $this->session->set_userdata('component_title', $component['component_title']);
        $this->session->set_userdata('program_title', $program['program_title']);

        $this->session->set_userdata('contract_title', $contract['contract_title']);
        $this->session->set_userdata('contractor_code', $contract['contractor_code']);

        if ( count( $contract ) > 0 ) {
            // yup, found some contract
            redirect('new_transaction');
        } else {
            $this->validate_contract_code();
        }
    }

    public function new_transaction() {
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
//        $data['success_message'] = $session_data['success_message'];

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create payment transaction';
        $this->form_validation->set_error_delimiters('<div style="width:470px; margin:20px;" class="alert alert-error">', '</div>');

        $data['username'] = $session_data['username'];
        $component_code = $this->session->userdata('component_code');



        $funders = $this->components_model->get_funders($component_code);
        $data['funders'] = $funders;


        if ($this->form_validation->run() === FALSE) {
            $this->load->view('includes/header', $data);
            $this->load->view('transactions/create_payment_certificate', $data );
            $this->load->view('includes/footer');
        } else {
            $this->load->view('includes/header', $data);
            $this->load->view('transactions/create_payment_certificate', $data);

            $data['title'] = 'Create payment certificate';

            $this->load->view('includes/footer');
        }
    }

    public function create_payment_certificate(){

      if($this->session->userdata('logged_in'))
      {
 
        $session_data = $this->session->userdata('logged_in');
        $data = $this->payment_certificate_model->set_payment_certificate();

        $agency = '';

        $data['username'] = $session_data['username'];
        $data['title'] = 'payment_certificate';

       

        

        
        //make the deductions from the gross and put the data in db taking debit and credit after asking for edit.


            $this->load->view('includes/header', $data);
            //$this->load->view('transactions/donor_funds_pc', $data);
            $this->load->view('includes/footer');

     } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

  
}                                  