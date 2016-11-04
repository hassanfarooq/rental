<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class car_model extends MY_Model {
    
    public function selectShowroomById($id)
    {
        $sql = "select * from showroom where user_id = " . $id;
        $result = $this->db->query($sql);
        if($result->num_rows() > 0)
        {
            $result = $result->result_array();
            return $result;

        } return false;
    }
    public function selectAllProvinces()
    {
        $sql = "select * from provinces";
        $result = $this->db->query($sql);
        if($result->num_rows() > 0) {
            $result = $result->result_array();
            return $result;
        }
        return false;
    }

    public function selectAllCities()
    {
        $sql = "select * from cities";
        $result = $this->db->query($sql);
        if($result->num_rows() > 0) {
            $result = $result->result_array();
            return $result;
        }
        return false;
    }

	public function selectAllShowroomByUserId($id)
	{
		$this->setTable('showroom');
		return $this->get('user_id', $id);
	}
	
    public function selectAlLCarsByShowroom($id)
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
			join manufacturer m on m.manf_id = c.car_id
			join cities ci on ci.city_id = s.city
			join provinces p on p.provinces_id = s.province
			where user_id = " . $id;
		$result = $this->db->query($sql);
		if ($result->num_rows() > 0) {
			$result = $result->result_array();
			return $result;
		}
		return false;
	}

	public function allSiteCars(){
		$sql = "SELECT DISTINCT c.car_name, c.car_id FROM cars c, rental_cars rc
					WHERE c.car_id = rc.car_id
				";
		$result = $this->db->query($sql);
		if ($result->num_rows() > 0) {
			return $result->result_array();
		}
		return false;
	}
        
        public function selectCarByCarId($car_id){
            $sql = "select * from "
                    . "rental_cars rc join showroom s "
                        . "on s.showroom_id = rc.showroom_id and s.user_id =" . $user_id . "and s.showroom_id = " . $showroom_id; 
            
            $result = $this->db->query($sql);
		if ($result->num_rows() > 0) {
			return $result->result_array();
		}
		return false;
        }

}