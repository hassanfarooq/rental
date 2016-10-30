<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_model extends MY_Model {

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

    public function selectCitiesByProvince($id)
    {
        $sql = "select * from cities where province_id = " . $id;
        $result = $this->db->query($sql);
        if($result->num_rows() > 0) {
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

    public function selectCarsByManufacturer($manf_id) 
    {
        $sql = "select * from cars where manf_id = " . $manf_id;        
        $result = $this->db->query($sql);
        if($result->num_rows() > 0) {
            $result = $result->result_array();
            return $result;
        }
		return false;
    }
}