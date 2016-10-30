<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends customer{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('profile_model');
    }

    public function index(){

        $data = array(
            'showroom_count' => $this->profile_model->showroomCount(),
            'cars_count' => $this->profile_model->carscount(),
            //'book_cars' => $this->profile_model->bookcars(),
            //'unbook_cars' => $this->profile_model->unbookcars()
        );
        $this->load->customer_template('profile/profile', $data);

    }

}