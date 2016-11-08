<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* Parent Controller for all main site controllers */
class Site extends CI_Controller {

	// Setting up meta variables
	public  $title = 'E-Car Rental', // page title
			$description = 'E-Car Rental', // meta description
			$keywords = 'car, showroom'; // meta keywords

	// Global variable that stores model instance
	public  $home_model,
			$cars_model, //car Model instance
			$city_model, //car Model instance
			$manufacturer_model, //Manufacturer Model, Model instance
			$models_model, //Car Model, Model instance
			$provinces_model, //Car Model, Model instance
			$rental_cars_model, //Car Model, Model instance
			$showroom_model, //showroom Model instance
			$user_model, //user Model instance
			$user_profile_model; //profile Model instance

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

	private function loadModels(){
		$models = array(
			"home_model",
			"cars_model",
			"city_model",
			"manufacturer_model",
            "models_model",
			"provinces_model",
			"rental_cars_model",
			"showroom_model",
			"user_model",
			"user_profile_model"
        );
        foreach($models as $model)
        {
            $this->load->model($model);
        }
		$this->assignModelInstance();
		
	}

	private function assignModelInstance(){
        $this->home_model = new home_model();
		$this->cars_model = new cars_model();
		$this->city_model = new city_model();
		$this->manufacturer_model = new manufacturer_model();
		$this->models_model = new models_model();
		$this->provinces_model = new provinces_model();
		$this->rental_cars_model = new rental_cars_model();
		$this->showroom_model = new showroom_model();
        $this->user_model = new user_model();
		$this->user_profile_model = new user_profile_model();
    }
	
	private function setTableToModel(){
		//$this->home_model->setTable('cars');
		$this->cars_model->setTable('cars');
		$this->city_model->setTable('cities');
		$this->manufacturer_model->setTable('manufacturer');
		$this->models_model->setTable('models');
		$this->provinces_model->setTable('provinces');
		$this->rental_cars_model->setTable('rental_cars');
		$this->showroom_model->setTable('showroom');
		$this->user_model->setTable('user');
		$this->user_profile_model->setTable('user_profile');
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

	public  $cars_model, //car Model instance
			$city_model, //car Model instance
			$manufacturer_model, //Manufacturer Model, Model instance
			$models_model, //Car Model, Model instance
			$provinces_model, //Car Model, Model instance
			$rental_cars_model, //Car Model, Model instance
			$showroom_model, //showroom Model instance
			$user_model, //user Model instance
			$user_profile_model; //profile Model instance
		
	// Setting up variable that contain all view data
	public $data = array();

	public function __construct(){
		parent::__construct();
		if(!$this->is_login_customer()){
			redirect(site_url('Customer/Login'));
		}
		$this->init();
	}
	
	/* Initializing and load Application Models */
	public function init() {
		$this->loadModels();
		$this->setTableToModel();
	}

	/* Check User session or login */
	public function is_login_customer() {
		$check_session = $this->session->userdata('customer');
		if(isset($check_session) && !empty($check_session)) {
			if($check_session['login'] == true) {
				return true;
			}
		}
		return false;
	}
        
	/* Loading Models */	
    private function loadModels(){
		$models = array(
			"cars_model",
			"city_model",
			"manufacturer_model",
            "models_model",
			"provinces_model",
			"rental_cars_model",
			"showroom_model",
			"user_model",
			"user_profile_model"
        );
        foreach($models as $model)
        {
            $this->load->model($model);
        }
		$this->assignModelInstance();
		
	}
	
	private function assignModelInstance(){
        $this->cars_model = new cars_model();
		$this->city_model = new city_model();
		$this->manufacturer_model = new manufacturer_model();
		$this->models_model = new models_model();
		$this->provinces_model = new provinces_model();
		$this->rental_cars_model = new rental_cars_model();
		$this->showroom_model = new showroom_model();
        $this->user_model = new user_model();
		$this->user_profile_model = new user_profile_model();
    }
	
	private function setTableToModel(){
		$this->cars_model->setTable('cars');
		$this->city_model->setTable('cities');
		$this->manufacturer_model->setTable('manufacturer');
		$this->models_model->setTable('models');
		$this->provinces_model->setTable('provinces');
		$this->rental_cars_model->setTable('rental_cars');
		$this->showroom_model->setTable('showroom');
		$this->user_model->setTable('user');
		$this->user_profile_model->setTable('user_profile');
	}
}