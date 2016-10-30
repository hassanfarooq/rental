<?php

    function info($object)
    {
        echo "<pre>";
        print_r($object);
        echo "</pre>";
    }

    function endInfo($object)
    {
        echo "<pre>";
        print_r($object);
        echo "</pre>";
        exit();
    }

    function get_logindata($object){
        $return = false;
        $ci =& get_instance();
        $user = $ci->session->userdata('customer');
        if(isset($user) && !empty($user) ){
            switch($object){
                case 'id':{
                    $return = $user['id'];
                    break;
                }
                case 'name':{
                    $return = $user['name'];
                    break;
                }
                case 'email':{
                    $return = $user['email'];
                    break;
                }
                case 'image':{
                    $return = $user['image'];
                    break;
                }
                case 'role_name':{
                    $return = $user['role_desc'];
                    break;
                }
            }
        }
        return $return;
    }