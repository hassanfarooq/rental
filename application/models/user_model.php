<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends MY_Model {

    public function create($data){
        if($this->db->insert('users',$data)) {
            return $this->db->insert_id();
        }
        return false;
    }

    public function check_email($data){
        $sql = "select * from users where email = '$data'";
        $result = $this->db->query($sql);
        if($result->num_rows() > 0){
            return true;
        }
        return false;
    }

    public function Authentication($email,$password) {
        $sql = "select * from users u,user_roles ur where u.role_id = ur.role_id and (u.email = '$email' and u.password = '$password')";
        $result = $this->db->query($sql);
        if($result->num_rows() == 1){
            $result = $result->result_array();
            return $result[0];
        }
        return false;
    }
}