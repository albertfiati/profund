<?php
class Payment_advice_from_donor extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('payment_request_model');
        $this->load->model('contracts_model');
        $this->load->model('sub_components_model');
        $this->load->model('components_model');
        $this->load->model('programs_model');
        $this->load->model('payment_advice_from_donor_model');
        $this->load->library('session');
    }


    public function index() {
             if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');

            $data['username'] = $session_data['username'];
            $data['title'] = 'Payment_certificate';

            $this->validate_contract_code_req();

        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
        }

    public function validate_contract_code_ad_don() {

        if($this->session->userdata('logged_in'))
      {
 
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];

        
            $this->load->helper('form');
            $this->load->library('form_validation');
            
            $data['title'] = 'Valideate contract code';
            

            $this->load->view('includes/header', $data);
            $this->load->view('transactions/get_payment_cert_pay_ad_don');
            $this->load->view('includes/footer');

     } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }



    public function validate_contract_ad_don() {
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
            redirect('new_transaction_ad_don');
        } else {
            $this->validate_contract_code();
        }
    }

    public function new_transaction_ad_don() {
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
//        $data['success_message'] = $session_data['success_message'];

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create payment advice from donor';
        $this->form_validation->set_error_delimiters('<div style="width:470px; margin:20px;" class="alert alert-error">', '</div>');

        $data['username'] = $session_data['username'];
        $component_code = $this->session->userdata('component_code');



        $funders = $this->components_model->get_funders($component_code);
        $data['funders'] = $funders;


        if ($this->form_validation->run() === FALSE) {
            $this->load->view('includes/header', $data);
            $this->load->view('transactions/create_payment_advice_from_donor', $data );
            $this->load->view('includes/footer');
        } else {
            $this->load->view('includes/header', $data);
            $this->load->view('transactions/create_payment_advice_from_donor', $data);

            $data['title'] = 'Create payment advice from donor';

            $this->load->view('includes/footer');
        }
    }

    public function create_payment_advice_from_donor(){

    if($this->session->userdata('logged_in'))
      {
 
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['title'] = 'Create payment advice from donor';

        $form_data = $this->payment_advice_from_donor_model->set_payment_advice_from_donor();

        

        $data['msg'] = 'Payment advice from donor successfully created!';

        $this->load->view('includes/header', $data);
        $this->load->view('transactions/success', $data );

        $this->load->view('includes/footer');

        

   
       

     } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

  
}                                  