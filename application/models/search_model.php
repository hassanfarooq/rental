<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class search_model extends MY_Model {

	public function selectAll() 
	{
		$sql = "select 
					rent_id,
					c.car_name,
					rc.car_description,
					m.manf_name,
					ci.city_name,
					p.provinces_name,	
					rc.car_model,
					rc.price_per_day,
					rc.availability,
					rc.car_image,
					rc.status
				from rental_cars rc join showroom s on s.showroom_id = rc.showroom_id
				join cars c on c.car_id = rc.car_id
				join manufacturer m on m.manf_id = rc.manufacturer_id
				join cities ci on ci.city_id = s.city
				join provinces p on p.provinces_id = s.province";
		$result = $this->db->query($sql); 
		
		if($result->num_rows() > 0)
		{
			$result = $result->result_array();
			return $result;
		}
	}
    public function searchByCriteria($data)
	{			
		$where = " where rc.status = 1";
		
		if(!empty($data['province'])) {
			$where .= " and p.provinces_id = " . $data['province'];
		}
		
		if(!empty($data['city'])) {
			$where .= " and ci.city_id = " . $data['city'];
		}
		
		if(!empty($data['manufacturer'])) {
			$where .= " and m.manf_id = " . $data['manufacturer'];
		}
		
		if(!empty($data['car'])) {
			$where .= " and c.car_id = " . $data['car'];
		}
		
		if(!empty($data['model'])) {
			$where .= " and rc.car_model = " . $data['model'];
		}
		
		if(!empty($data['color'])) {
			$where .= " and rc.color = '" . $data['color'] . "'";
		}
		
		if(!empty($data['door'])) {
			$where .= " and rc.door = " . $data['door'];
		}
		
		if(!empty($data['pick-up-date'])) {
			$where .= " and date_format(available_date_to,'%m/%d/%Y') <= '" . $data['pick-up-date'] . "'";
		}
		
		if(!empty($data['pick-up-time'])) {
			$where .= " and `pick-up-time` >= '" . $data['pick-up-time'] . "'";
		}
		
		if(!empty($data['drop-off-date'])) {
			$where .= " and date_format(available_date_from,'%m/%d/%Y') <= '" . $data['drop-off-date'] . "'";
		}
		
		if(!empty($data['drop-off-time'])) {
			$where .= " and `drop-off-time` <= '" . $data['drop-off-time'] . "'";
		}
	
		$sql = "select * from rental_cars rc join showroom s on s.showroom_id = rc.showroom_id
				join cars c on c.car_id = rc.car_id
				join manufacturer m on m.manf_id = rc.manufacturer_id
				join cities ci on ci.city_id = s.city
				join provinces p on p.provinces_id = s.province" . $where; 
		
		$result = $this->db->query($sql);
		if($result->num_rows() > 0) 
		{
			$result = $result->result_array();
			return $result;
		}
		return false;
	}
	
	public function selectAllProvinces()
	{
		$sql = "select * from provinces";
		$result = $this->db->query($sql);
		if($result->num_rows() > 0) 
		{
			$result = $result->result_array();
			return $result;
		}
		return false;
	}
	
	public function selectAllManufacturer()
    {
        $sql = "select * from manufacturer";
        $result = $this->db->query($sql);
        if($result->num_rows() > 0) {
            $result = $result->result_array();
            return $result;
        }
        return false;
    }
	
	public function selectCarColor()
    {
        $sql = "select distinct color as color from rental_cars";
        $result = $this->db->query($sql);
        if($result->num_rows() > 0) {
            $result = $result->result_array();
            return $result;
        }
        return false;
    }
	
	public function selectCarDoor()
    {
        $sql = "select distinct door as door from rental_cars";
        $result = $this->db->query($sql);
        if($result->num_rows() > 0) {
            $result = $result->result_array();
            return $result;
        }
        return false;
    }
	
	public function selectModel()
    {
        $sql = "select * from models";
        $result = $this->db->query($sql);
        if($result->num_rows() > 0) {
            $result = $result->result_array();
            return $result;
        }
        return false;
    }
}