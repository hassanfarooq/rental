<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public $table;
    
    public function setTable($table){
        $this->table = $table;
    }
    
    public function get($column, $value){
        $this->db->where($column, $value);
        $result = $this->db->get($this->table);
        if($result->num_rows() > 0) {
            return $result;
        }
        return FALSE;
    }
    
    public function get_all(){
        $result = $this->db->get($this->table);
        if($result->num_rows() > 0) {
            return $result;
        }
        return FALSE;
    }
    
    public function insert($data){
        $result = $this->db->insert($this->table, $data);
        if($this->db->affected_rows()) {
            return $this->db->insert_id();
        }
        return FALSE;
    }
    
    public function update($data, $column, $value){
        $this->db->where($column, $value);
        $this->db->update($this->table, $data);
        if($this->db->affected_rows()) {
            return true;
        }
        return FALSE;
    }
    
    public function delete($column, $value){
        $this->db->where($column, $value);
        $this->db->delete($this->table);
        if($this->db->affected_rows()) {
            return true;
        }
        return FALSE;
    }
    
    public function count_all(){
        return $this->db->count_all($this->table);
    }
}