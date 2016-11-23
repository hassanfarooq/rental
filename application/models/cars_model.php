<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cars_model extends MY_Model {
    public function __construct(){
		parent::__construct();
	}
	
	public function selectCarsByManufacturer($manf_id) {
		$sql = "select * from cars where manf_id = " . $manf_id;        
        $result = $this->db->query($sql);
        if($result->num_rows() > 0) {
            $result = $result->result_array();
            return $result;
        }
		return false;
	}
	
    public function selectById($id)
    {
        $sql = "select * from rental_cars rc,showroom s,manufacturer m,cars c 
                where rc.showroom_id = s.showroom_id 
                and rc.manufacturer_id = m.manf_id
                and rc.car_id = c.car_id
                and rent_id = ".$id;
        $result = $this->db->query($sql);
        if($result->num_rows() > 0) {
            $result = $result->result_array();
            return $result;
        }
        return false;
    }
}