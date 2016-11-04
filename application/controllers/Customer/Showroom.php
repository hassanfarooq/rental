<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Showroom extends Customer {
	
	public function __construct() {
		parent::__construct();
	}
	
	public $target_dir = "./assets/customer/img/uploads/showroom/";
	
    public function index()
	{
		$user_id = $_SESSION['customer']['id'];
		$this->data['showroom'] = $this->showroom_model->selectAllShowrooms($user_id);

		$this->load->customer_template('showroom', $this->data);
	}
        
    public function edit($id)
	{
		$data = array(
			'showroom' => $this->showroom_model->selectById($id),
			'province' => $this->showroom_model->selectAllProvinces()
		);
		$this->load->customer_template('editshowroom', $data);
	}
	
    public function addShowroom()
	{
		$this->data['province'] = $this->showroom_model->selectAllProvinces();
		$this->load->customer_template('addshowroom', $this->data);
	}
        
	public function selectCitiesByProvinceId($id)
	{
		$data['cities'] = $this->showroom_model->selectCitiesByProvinceId($id);
		echo json_encode($data);
	}
        
	
	public function saveShowroom()
	{
		
		$this->data = array(
			'user_id' => $_SESSION['customer']['id'],
			'showroom_name' => $_POST['showroom_name'],
			'owner_name' => $_POST['showroom_owner'],
			'description' => $_POST['description'],
			'address' => $_POST['address'],
			'province' => $_POST['province'],
			'city' => $_POST['city'],
			'status' => $_POST['status'],
			'showroom_image' => str_replace('.','',$this->target_dir) . $_FILES["showroom_image"]["name"]
		);
		
		$return = $this->saveImage($this->data['showroom_image']);
		if($return === true) {
			$showroom_id = $this->showroom_model->AddShowroom($this->data);
			redirect('customer/showroom/index');
		} else {
			$this->data['error'] = $return;
			$this->load->customer_template('addshowroom', $this->data);
		}
	}
	
	public function saveImage($image)
	{
		$message = '';
		$target_file = $this->target_dir . basename($image);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		
		if (file_exists($target_file)) {
			$message = "Sorry, file already exists.";
			return $message;
			$uploadOk = 0;
		}
		// Check file size
		if ($_FILES["showroom_image"]["size"] > 500000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "PNG" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["showroom_image"]["tmp_name"], $target_file)) {
				echo "The file ". basename( $image ) . " has been uploaded.";
				return true;
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
	}
	
	public function selectCarByManufacturer($id)
	{
		$data['cars'] = $this->addcar_model->selectCarsByManufacturer($id);
		echo json_encode($data);
	}	
	
	public function deleteShowroom($id) {
		$return = $this->showroom_model->delete('showroom_id',$id);
		redirect('customer/showroom/index');
	}
}
