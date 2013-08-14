<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->library('form_validation');
 }

 function index()
 {
   
   
   $this->load->helper(array('form'));
   $data['title'] = 'Login: PROFUND';

   $this->load->view('includes/login_header', $data);
   $this->load->view('pages/login', $data);
   $this->load->view('includes/login_footer');


  

 }
 

}


