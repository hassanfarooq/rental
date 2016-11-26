<?php

    function info($object){
        echo "<pre>";
        print_r($object);
        echo "</pre>";
    }
	
	function endInfo($object){
        echo "<pre>";
        print_r($object);
        echo "</pre>";
        exit();
    }

    function get_logindata($object){
        $return = false;
        $ci =& get_instance();
        $user = $ci->session->userdata('customer');
        if(isset($user) && !empty($user) ){
            switch($object){
                case 'id':{
                    $return = $user['id'];
                    break;
                }
                case 'name':{
                    $return = $user['name'];
                    break;
                }
                case 'email':{
                    $return = $user['email'];
                    break;
                }
                case 'image':{
                    $return = $user['image'];
                    break;
                }
                case 'role_name':{
                    $return = $user['role_desc'];
                    break;
                }
            }
        }
        return $return;
    }
	
	function saveImage($image) {
		
		$message = '';
		$target_dir = "./uploads/";
		$target_file = $target_dir . basename($image);
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
			if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
				echo "The file ". basename( $image ) . " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
	}
	
	function GUID() {
		/*if (function_exists('com_create_guid') === true)
		{
			echo trim(com_create_guid(), '{}');
		}*/

		return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
	}