<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends customer{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){

        $this->data['showroom_count'] = $this->profile_model->showroomCount();
		$this->data['cars_count'] = $this->profile_model->carscount();
		$this->data['provinces'] = $this->profile_model->selectProvinces();
		$this->data['user_data'] = $this->profile_model->selectUserProfile();
        $this->load->customer_template('profile/profile', $this->data);

    }
	
	public function profileInfo(){
		$this->data['cnic'] = $this->input->post('cnic');
		$this->data['contact_no'] = $this->input->post('contact');
		$this->data['image'] = $this->input->post('image');
		$this->data['user_id'] = get_logindata('id');
		$this->data['city_id'] = $this->input->post('city');
		$this->data['provinces_id'] = $this->input->post('province');
		$this->data['postal_code'] = $this->input->post('postal');
		$this->data['DOB'] = $this->input->post('dob');
		$this->data['address'] = $this->input->post('address');
		$this->data['Status'] = $this->input->post('status');
		$this->data['about'] = $this->input->post('about');
		
		$this->checkProfileInfoExists($this->data);		
	}
	
	public function checkProfileInfoExists($data){
		$return = $this->profile_model->checkUserProfile($data['user_id']);
		if($return) {
			$this->profile_model->insertUserProfile($data);
			redirect('Customer/profile');
		} 
		else {
			echo "old";
			exit;
		}
		
	}
	
	public function selectCitiesByProvinceId($id) {	
		$this->data['cities'] = $this->home_model->selectCitiesByProvince($id);
		echo json_encode($this->data);
	}
}