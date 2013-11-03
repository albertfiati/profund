<?php
class Contractors_ledger extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('payment_certificate_model');
        $this->load->model('contracts_model');
        $this->load->model('sub_components_model');
        $this->load->model('components_model');
        $this->load->model('programs_model');
        $this->load->model('application_for_withdrawal_model');
        $this->load->library('session');
    }


	public function index() {
             if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');

            $data['username'] = $session_data['username'];
            $data['title'] = "Contractor's ledger";

            $this->validate_report_form();

        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
        }

    public function validate_report_form() {

        if($this->session->userdata('logged_in'))
      {
 
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];

        
            $this->load->helper('form');
            $this->load->library('form_validation');
            
            $data['title'] = 'Validate report form';
            

            $this->load->view('includes/header', $data);
            $this->load->view('reports/reports_form');
            $this->load->view('includes/footer');

     } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }


public function get_program_code($contract_code){
        //$contract_code = ;
        $contract      = $this->contracts_model->get_contract( $contract_code );

        //$this->session->set_userdata('component_title', '');

        $sub_component_code = $contract['sub_component_code'];

        $sub_component = $this->sub_components_model->get_sub_component($sub_component_code);
        $component_code = $sub_component['component_code'];

        $component = $this->components_model->get_component($component_code);
        $program_code = $component['program_code'];
        return $program_code;
    }

public function check_contract_program($contract_code, $program_code){
        $checked_program = $this->get_program_code($contract_code);

        if ($checked_program == $program_code){
            return true;
        }else{
        return false;
        }
}

public function say(){
    $sheege = 'The test alert';
    return $sheege;
}

public function get_contract_details($contract_code){
        $contract_details = $this->contracts_model->get_contract($contract_code);
        return $contract_details;
    }


public function create_contractors_ledger() {
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create contractors ledger';
        $this->form_validation->set_error_delimiters('<div style="width:470px; margin:20px;" class="alert alert-error">', '</div>');

        $agency = $this->input->post('agency');
        $program_code = $this->input->post('program_code');

        $payment_certificates = $this->payment_certificate_model->get_payment_certificates();
        $data['payment_certificates'] = $payment_certificates;
        $all_applications = $this->application_for_withdrawal_model->get_application_for_withdrawals();
        $data['all_applications'] = $all_applications;
        $all_contracts = $this->contracts_model->get_contracts();
 

        //$data['myClass'] = $this;

        $certs = Array();
        $contract_codes = Array();
        $selected_contracts = Array();


       foreach ($payment_certificates as $payment_cert){
                           
               $c_code = $payment_cert['contract_code'];                                   
               $arrow = $this->check_contract_program($c_code, $program_code);
               if($arrow){

                  array_push($certs, $payment_cert);

                      if (!in_array($c_code, $contract_codes)){
                      array_push($contract_codes, $c_code );
                   }

                   //foreach ($all_contracts as $contract_object){
                       

                }

              

               

               //}
        }

        foreach ($contract_codes as $contract_c){
                           $said_contract = $this->contracts_model->get_contract($contract_c);
                           array_push($selected_contracts, $said_contract);

            }
                 


           $data['certs'] = $certs;
           $data['certss'] = $payment_certificates;
           $data['selected_contracts'] = $selected_contracts;
           $data['contract_codes'] = $contract_codes;



           $this->load->view('includes/header', $data);
           $this->load->view('reports/Contractors_ledger/report', $data);
           $this->load->view('includes/footer');


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