<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile_model extends MY_Model{
	
	public function showroomCount()
	{
	  $sql = "select count(*) as showroom_count
				  from showroom
				  where user_id = " . get_logindata('id');
	  $result = $this->db->query($sql);
	  if($result->num_rows() > 0)
	  {
		  $result = $result->result_array();
		  return $result[0]['showroom_count'];
	  }
	  return '0';
	}

	public function carscount(){

	  $sql = "select count(*) as cars_count
				from rental_cars c,showroom s
				where c.showroom_id = s.showroom_id
				and s.user_id = ".get_logindata('id');
	  $result = $this->db->query($sql);
	  if ($result->num_rows() > 0 ){

		  $result = $result->result_array();
		  return $result[0]['cars_count'];
	  }

	}
	
	public function selectProvinces(){
		$this->setTable('provinces');
		return $this->get_all();
	}
	
	public function checkUserProfile($id){
		$sql = "select count(*) as user from user_profile where user_id = " . $id;
		$result = $this->db->query($sql);
		$result = $result->result_array();
		//var_dump((int)$result[0]['user']);
		if(((int)$result[0]['user']) > 0) 
		{
			return true;
		}
		return false;
	}
	
	public function insertUserProfile($data) {
		$this->setTable('user_profile');
		return $this->insert($data);
	}
	
	public function UpdateUserProfile($data) {
		$this->setTable('user_profile');
		
		$set = "set ";
		
		if(!empty($data['cnic'])) {
			$set .= "cnic = '" . $data['cnic'] ."', ";
		}
		
		if(!empty($data['contact_no'])) {
			$set .= "contact_no = '" . $data['contact_no'] . "', ";
		}
		
		if(!empty($data['city_id'])) {
			$set .= "city_id = " . $data['city_id'] . ", ";
		}
		
		if($data['provinces_id'] != 0 && !empty($data['provinces_id'])) {
			$set .= "provinces_id = " . $data['provinces_id'] . ", ";
		}
		
		if(!empty($data['postal_code'])) {	
			$set .= "postal_code = " . $data['postal_code'] . ", ";
		}
		
		if(!empty($data['dob'])) {
			$set .= "dob = '" . $data['dob'] ."', ";
		}
		
		if(!empty($data['address'])) {
			$set .= "address = '" . $data['address'] ."', ";
		}
		
		if(!empty($data['status'])) {
			$set .= "status = " . $data['status']. ", ";
		}
		
		if(!empty($data['about'])) {
			$set .= "about = '" . $data['about'] ."' ";
		}
		
		if(!empty($data['image'])) {
			$set .= "image = '" . $data['image'] ."' ";
		}
		
		$sql = "update user_profile " . $set . "where user_id = " .get_logindata('id');
		$sql = str_replace(', where', ' where',$sql);
		var_dump($sql);
		$this->db->query($sql);
		if($this->db->affected_rows()) {
            return true;
        }
        return FALSE;
	}
	
	public function selectUserProfile() {
		$sql = "select * from user_profile up join provinces p on p.provinces_id = up.provinces_id join cities c on c.city_id = up.city_id where user_id = " .get_logindata('id');
		$result = $this->db->query($sql);
		if($result->num_rows() > 0) {
			$result = $result->result_array();
			return $result;
		}
	}
}