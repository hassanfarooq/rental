<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index() {
        $this->load->view('customer/login/login');
    }

    public function register($data = array()){
        $this->load->view('customer/login/register', $data);
    }

    public function create_customer(){
        $data = $this->input->post();

        $return = $this->form_validate($data);
        if($return === true)
        {
			$target_dir = "./uploads/";
            $result = array(
                'username' => $data['name'],
                'email'=> $data['email'],
                'password' => md5($data['password']),
                'role_id' => 2,
            );

            $this->getConfirmation($this->user_model->create($result));
        }
        else
        {
            $data['errors'] = $return;
            $this->register($data);
        }
    }

    private function form_validate($data){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            return validation_errors();
        }
        else
        {
            return $this->user_model->check_email($data['email']) ? 'Email alraedy exists' : true;
        }
    }

    private function getConfirmation($id){
        if($id)
        {
            $this->session->set_userdata('flashData', array(
                "status" => 'success',
                "message" => 'Registration Succeed. Please Login'
            ));
        } else {
            $this->session->set_userdata('flashData', array(
                "status" => 'error',
                "message" => 'Error 507: Bad Request please try again.'
            ));
        }
        redirect('Customer/Login');
    }

    public function getLoggedIn(){
        $data = $this->input->post();
        if(isset($data) && isset($data['email']) && isset($data['password'])) {
            $result = $this->user_model->Authentication($data['email'], md5($data['password']));
            if(isset($result) && !empty($result)) {
			
                $this->session->set_userdata('customer', array(
                    'login' => true,
                    'id'    => $result['user_id'],
                    'name'  => $result['username'],
                    'email' => $result['email'],
                    'image' => $result['user_image'],
                    'role_id'=> $result['role_id'],
                    'role_desc' => $result['role_desc']
                ));
            } else {
                $this->session->set_userdata('flashData', array(
                    "status" => 'error',
                    "message" => 'Invalid Email or Password'
                ));
            }
        } else {
            $this->session->set_userdata('flashData', array(
                "status" => 'error',
                "message" => 'Email and Password is required'
            ));
        }		
        redirect('Customer/Dashboard');
    }

    public function logout(){
        $this->session->unset_userdata('customer');
        redirect('customer/login');
    }
}