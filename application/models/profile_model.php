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
		if($result) 
		{
			return true;
		}
		return false;
	}
	
	public function insertUserProfile($data) {
		$this->setTable('user_profile');
		return $this->insert($data);
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