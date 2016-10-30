<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detail_model extends MY_Model {

	public function index($id) 
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
		from rental_cars rc 
		join showroom s on s.showroom_id = rc.showroom_id 
		join cars c on c.car_id = rc.car_id
		join manufacturer m on m.manf_id = rc.manufacturer_id 
		join cities ci on ci.city_id = s.city
		join provinces p on p.provinces_id = s.province
		where rc.rent_id = " . $id;
				
		$result = $this->db->query($sql); 
		if($result->num_rows() > 0)
		{
			$result = $result->result_array();
			return $result;
		}
	}
    public function searchByCriteria($data)
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
				join cars c on c.car_id = ". $data['car'] . "
				join manufacturer m on m.manf_id = ". $data['manufacturer'] ."
				join cities ci on ci.city_id = " . $data['city']. "
				join provinces p on p.provinces_id = ". $data['province'] . "
				where date_format(available_date_from,'%m/%d/%Y') <= '" .$data['pick-up-date']. "'
				and date_format(available_date_from,'%m/%d/%Y') <= '".$data['drop-off-date']."'";
		$result = $this->db->query($sql);
		if($result->num_rows() > 0) 
		{
			$result = $result->result_array();
			return $result;
		}
		return false;
	}
}