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
		//$this->getHeaderData();
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
		$this->showroom_model->setTable('showroom');
		$this->home_model->setTable('home_model');
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

	public  $showroom_model, //showroom Model instance
		$car_model, //car Model instance
		$detail_model, //detail Model instance
		$home_model, //home Model instance
		$profile_model, //profile Model instance
		$search_model, //search Model instance
		$user_model; //user Model instance
		
	// Setting up variable that contain all view data
	public $data = array();

	public function __construct(){
		parent::__construct();
		if(!$this->is_login_customer()){
			redirect(site_url('Customer/Login'));
		}
		$this->init();
	}
	
	public function init()
	{
		$this->loadModels();
		$this->setTableToModel();
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
		$models = array(
            "showroom_model",
            "car_model",
            "detail_model",
            "home_model",
            "profile_model",
            "search_model",
            "user_model"
        );
        foreach($models as $model)
        {
            $this->load->model($model);
        }
		$this->assignModelInstance();
		
	}
	
	private function assignModelInstance()
    {
        $this->showroom_model = new showroom_model();
        $this->car_model = new car_model();
        $this->detail_model = new detail_model();
        $this->home_model = new home_model();
        $this->profile_model = new profile_model();
        $this->search_model = new search_model();
        $this->user_model = new user_model();
    }
	
	private function setTableToModel()
	{
		$this->car_model->setTable('car');
		$this->showroom_model->setTable('showroom');
		$this->profile_model->setTable('profile_model');
		$this->user_model->setTable('user_model');
	}
}