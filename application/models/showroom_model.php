<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class showroom_model extends MY_Model {

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

    public function selectCitiesByProvinceId($id)
    {
        $sql = "select * from cities where province_id = " . $id;
        $result = $this->db->query($sql);
        if($result->num_rows() > 0) {
            $result = $result->result_array();
            return $result;
        }
        return false;
    }
        
    public function selectAllShowrooms($id)
    {
        $sql = "select 
					showroom_id,
					user_id,
					showroom_name,
					owner_name,
					description,
					address,
					provinces_name,
					city_name,
					status,
					showroom_image
				from showroom s join provinces p on p.provinces_id = s.province
				join cities c on c.city_id = s.city
				where user_id = " . $id;
        $result = $this->db->query($sql);
        if($result->num_rows() > 0) {
            $result = $result->result_array();
            return $result;
        }
        return false;
    }
		
	public function AddShowroom($data) {
		$this->setTable('showroom');
		return $this->insert($data);
	}	
}