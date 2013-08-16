<?php
class Payment_certificate extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('contracts_model');
                $this->load->library('session');
	}

	public function index() {
            $this->contract();
        }

//	public function view($slug)
//{
//	$data['news_item'] = $this->news_model->get_news($slug);
//
//	if (empty($data['news_item']))
//	{
//		show_404();
//	}
//
//	$data['title'] = $data['news_item']['title'];
//
//	$this->load->view('templates/header', $data);
//	$this->load->view('news/view', $data);
//	$this->load->view('templates/footer');
//}
//

    public function show() {
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



//        $this->load->helper('url');
//	if (empty($data['programs']))
//	{
//		show_404();
//	}

        $data['title'] = 'Show contract';

        $this->load->view('includes/header', $data);

        if ($type == 'works') {
            $this->load->view('contracts/show_contract', $data);
        } else if ($type == 'goods') {
            $this->load->view('goods/show_goods', $data);
        } else if ($type == 'consultancy') {
            $this->load->view('consultancy/show_consultancy', $data);
        } else if ($type == 'operating_expenses') {
            $this->load->view('operating_expenses/show_operating_expenses', $data);
        } else if ($type == 'training') {
            $this->load->view('training/show_training', $data);
        }


        $this->load->view('includes/footer');
    }

    public function contract() {
        $this->load->helper('form');
        $this->load->view('transactions/get_contract');
    }

    public function validate_contract() {
//        $this->load->view('transactions/create_payment_certificate', $_REQUEST);
        $contract_code = $_REQUEST[ 'contract_code' ];
        $contract      = $this->contracts_model->get_contract( $contract_code );
        
        if ( count( $contract ) > 0 ) {
            // yup, found some contract
            $this->new_transaction( $contract );
        } else {
            $this->load->helper( 'form' );
            $this->load->view( 'transactions/get_contract' );
        }
    }

    public function new_transaction( $contract ) {
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['contract'] = $contract;
//        $data['success_message'] = $session_data['success_message'];

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create payment transaction for ' . $contract[ 'contract_code' ];
        $this->form_validation->set_error_delimiters('<div style="width:470px; margin:20px;" class="alert alert-error">', '</div>');


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

    public function create() {
        echo 'something';
    }
}                                  