<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* Parent Controller for all main site controllers */
class Site extends CI_Controller {

	// Setting up meta variables
	public  $title = 'E-Car Rental', // page title
			$description = 'E-Car Rental', // meta description
			$keywords = 'car, showroom'; // meta keywords

	// Global variable that stores model instance
	public  $cars_model; // Car model

	// Setting up variable that contain all view data
	public $data = array();


	public function __construct(){
		parent::__construct();
		$this->init();
	}

	private function init()
	{
		$this->loadModels();
                $this->setTableToModel();
		$this->getHeaderData();
	}

	private function loadModels()
	{
		$this->load->model('car_model');
                $this->load->model('showroom_model');
                $this->load->model('home_model');
		//$this->cars_model = new $this->car_model();
	}

        private function setTableToModel()
        {
            $this->car_model->setTable('car');
            $this->car_model->setTable('showroom');
            $this->car_model->setTable('home_model');
        }
        
	public function getHeaderData()
	{
		$this->data['headerCars'] = $this->cars_model->allSiteCars();
	}
}

/* Parent Controller for all site admin controllers */
class Customer extends CI_Controller {

	// Setting up meta variables
	public  $title = 'E-Car Rental', // page title
			$description = 'E-Car Rental', // meta description
			$keywords = 'car, showroom'; // meta keywords

	// Setting up variable that contain all view data
	public $data = array();

	public function __construct(){
		parent::__construct();
		if(!$this->is_login_customer()){
			redirect(site_url('Customer/Login'));
		}
	}

	public function is_login_customer() {
		$check_session = $this->session->userdata('customer');
		if(isset($check_session) && !empty($check_session)) {
			if($check_session['login'] == true) {
				return true;
			}
		}
		return false;
	}
        
        private function loadModels()
	{
		$this->load->model('car_model');
                $this->load->model('showroom_model');
                $this->load->model('home_model');
		//$this->cars_model = new $this->car_model();
	}
}