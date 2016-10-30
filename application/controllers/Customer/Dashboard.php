<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Customer {

	public function index()
	{
		$this->title = "Dashboard";
		$this->load->customer_template('dashboard/view', true);
	}

	public function addCars() {
		$this->load->customer_template('dashboard/addcars');
	}
}
