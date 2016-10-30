<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car extends Customer {
	
    public function __construct()
    {
            parent::__construct();
            $this->load->model('car_model');
    }

    public function index()
    {
            $user_id = $_SESSION['customer']['id'];
            $data = array(
                    'showroom_list' => $this->car_model->selectAllShowroomByUserId($user_id),
                    'model' => $this->car_model->SelectAllModels(),
                    'cars' => $this->car_model->selectAlLCarsByShowroom($user_id)
            );
            $this->load->customer_template('cars',$data);
    }

    public function edit($id)
	{
            $user_id = $_SESSION['customer']['id'];
		$data = array(
			'car' => $this->car_model->selectCarByCarId($id)
			//'province' => $this->showroom_model->selectAllProvinces()
		);
		$this->load->customer_template('editcar', $data);
	}
        
    public function saveShowroom()
    {
        $target_dir = "./assets/customer/img/uploads/showroom/";
        $target_file = $target_dir . basename($_FILES["showroom_image"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

        if(isset($_POST["submit"])) {

            $check = getimagesize($_FILES["showroom_image"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["showroom_image"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
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
                    echo "The file ". basename( $_FILES["showroom_image"]["name"]). " has been uploaded.";
            } else {
                    echo "Sorry, there was an error uploading your file.";
            }
        }
        $data = array(
            'user_id' => $_SESSION['customer']['id'],
            'showroom_name' => $_POST['showroom_name'],
            'owner_name' => $_POST['showroom_owner'],
            'description' => $_POST['description'],
            'address' => $_POST['address'],
            'province' => $_POST['province'],
            'city' => $_POST['city'],
            'status' => $_POST['status'],
            'showroom_image' => str_replace('.','',$target_dir) . $_FILES["showroom_image"]["name"]
        );

        $this->showroom_model->saveShowroom($data);
        redirect('customer/car/index');
    }	

    public function selectCitiesByProvinceId($id)
    {
            $data['cities'] = $this->car_model->selectCitiesByProvince($id);
            echo json_encode($data);
    }
    public function selectCarByManufacturer($id)
    {
            $data['cars'] = $this->car_model->selectCarsByManufacturer($id);
            echo json_encode($data);
    }	
    
    public function addCar()
    {
            $this->load->customer_template('addcars',true);
    }	
}
