<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends customer{

    public function __construct()
    {
        parent::__construct();
    }
	
	public $target_dir = "./uploads/";
	
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
		$this->data['user_id'] = get_logindata('id');
		$this->data['city_id'] = $this->input->post('city');
		$this->data['provinces_id'] = $this->input->post('province');
		$this->data['postal_code'] = $this->input->post('postal');
		$this->data['DOB'] = $this->input->post('dob');
		$this->data['address'] = $this->input->post('address');
		$this->data['Status'] = $this->input->post('status');
		$this->data['about'] = $this->input->post('about');
		$this->data['image'] = str_replace('.','',$this->target_dir) . $_FILES["image"]["name"];
		
		$this->saveImage($this->data['image']);
		
		$this->checkProfileInfoExists($this->data);		
	}
	
	public function checkProfileInfoExists($data){
		$return = $this->profile_model->checkUserProfile($data['user_id']);
		//var_dump($return);exit;
		if($return) {
			$this->profile_model->UpdateUserProfile($data);
			redirect('Customer/profile/index');
		} 
		else {
			$this->profile_model->insertUserProfile($data);
			redirect('Customer/profile/index');
		}
		
	}
	
	public function selectCitiesByProvinceId($id) {	
		$this->data['cities'] = $this->home_model->selectCitiesByProvince($id);
		echo json_encode($this->data);
	}
	
	public function saveImage($image) {
		
		$message = '';
		$this->target_dir = "./uploads/";
		$target_file = $this->target_dir . basename($image);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		
		if (file_exists($target_file)) {
			$message = "Sorry, file already exists.";
			return $message;
			$uploadOk = 0;
		}
		
		// Check file size
		if ($_FILES["image"]["size"] > 500000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "PNG" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
				echo "The file ". basename( $image ) . " has been uploaded.";
				var_dump($image);exit;
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
	}
}