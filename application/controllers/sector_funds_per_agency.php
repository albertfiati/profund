<?php
class Sector_funds_per_agency extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('payment_certificate_model');
        $this->load->model('contracts_model');
        $this->load->model('sub_components_model');
        $this->load->model('components_model');
        $this->load->model('programs_model');
        $this->load->model('application_for_withdrawal_model');
        $this->load->model('funds_model');
       
        $this->load->library('session');
    }


	public function index() {
             if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');

            $data['username'] = $session_data['username'];
            $data['title'] = "Sector funds";

            $this->validate_sector_funds_per_agency();

        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
        }

    public function validate_sector_funds_per_agency() {

        if($this->session->userdata('logged_in'))
      {
 
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];

        
            $this->load->helper('form');
            $this->load->library('form_validation');
            
            $data['title'] = 'Validate sector funds per agency';
            

            $this->load->view('includes/header', $data);
            $this->load->view('reports/sector_funds_per_agency/sector_funds_per_agency_form');
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


public function create_sector_funds_per_agency() {
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create sector_funds';
        $this->form_validation->set_error_delimiters('<div style="width:470px; margin:20px;" class="alert alert-error">', '</div>');

        $program_code = $this->input->post('program_code');

        $year = $this->input->post('year');

        $program = $this->programs_model->get_program($program_code);
        $data['program'] = $program;

        $program_funds = $this->funds_model->get_program_funds($program_code);
        $data['program_funds'] = $program_funds;
        $applications = $this->application_for_withdrawal_model->get_application_for_withdrawals($program_code);
        $data['applications'] = $applications;

        $certificates = $this->payment_certificate_model->get_payment_certificates2($program_code);
        $data['certificates'] = $certificates;




        

           $this->load->view('includes/header', $data);
           $this->load->view('reports/sector_funds_per_agency/report', $data);
           $this->load->view('includes/footer');


    }



  
}                                  