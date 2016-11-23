<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car extends Customer {
	
    public function __construct()
    {
		parent::__construct();
    }

    public function index()
    {
		
		$user_id = get_logindata('id');	
		$this->data['cars'] = $this->rental_cars_model->selectAlLCarsByShowroom($user_id);		
		$this->load->customer_template('cars', $this->data);
    }

    public function edit($id)
	{
            $user_id = $_SESSION['customer']['id'];
		$data = array(
            'car' => $this->cars_model->selectById($id)
		);
		$this->load->customer_template('editcar', $data);
	}
        
    public function saveCar()
    {
        $target_dir = "./assets/customer/img/uploads/cars/";
        $target_file = $target_dir . basename($_FILES["car_image"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

        if(isset($_POST["submit"])) {

            $check = getimagesize($_FILES["car_image"]["tmp_name"]);
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
        if ($_FILES["car_image"]["size"] > 500000) {
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
            if (move_uploaded_file($_FILES["car_image"]["tmp_name"], $target_file)) {
                    echo "The file ". basename( $_FILES["car_image"]["name"]). " has been uploaded.";
            } else {
                    echo "Sorry, there was an error uploading your file.";
            }
        }
        $this->data = array(
            'showroom_id' => $_POST['showroom'],
            'manufacturer_id' => $_POST['manufacturer'],
            'car_id' => $_POST['car'],
            'car_model' => $_POST['model'],
            'car_description' => $_POST['description'],
            'price_per_day' => $_POST['rent_per_day'],
            'availability' => $_POST['availability'],
			'available_date_from' => $_POST['availabile_date_from'],
			'available_date_to' => $_POST['availabile_date_to'],
            'status' => $_POST['status'],
			'color' => $_POST['color'],
			'door' => $_POST['door'],
            'car_image' => str_replace('.','',$target_dir) . $_FILES["car_image"]["name"]
        );
		
		//endinfo($this->data);
        $this->rental_cars_model->insert($this->data);
        redirect('customer/car/index');
    }	

    public function selectCitiesByProvinceId($id)
    {
            $data['cities'] = $this->car_model->selectCitiesByProvince($id);
            echo json_encode($data);
    }
    public function selectCarByManufacturer($id)
    {
            $data['cars'] = $this->cars_model->selectCarsByManufacturer($id);
            echo json_encode($data);
    }	
    
    public function addCar()
    {
		$user_id = get_logindata('id');
		
		$this->data['showroom_list'] = $this->showroom_model->get('user_id', $user_id);
		$this->data['manufacturers'] = $this->manufacturer_model->get_all();
		$this->data['models'] = $this->models_model->get_all();
		
		$this->load->customer_template('addcars', $this->data);
    }

    public function updateCar()
    {
        $this->rental_cars_model->update($this->data);
        $this->load->customer_template('addcars', $this->data);
    }	
}
