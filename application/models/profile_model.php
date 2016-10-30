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
}