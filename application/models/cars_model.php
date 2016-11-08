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
	
}