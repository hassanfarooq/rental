<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Site {
	
	public function index()
	{
		$this->data['provinces'] = $this->home_model->selectAllProvinces();
		$this->data['cities'] = $this->home_model->selectAllCities();
		$this->data['manufacturer'] = $this->home_model->selectAllManufacturer();
		$this->data['showroom'] = $this->showroom_model->get_all();
		$this->load->site_template('template', $this->data);
	}

	public function selectCitiesByProvinceId($id) 
	{	
		$data['cities'] = $this->home_model->selectCitiesByProvince($id);
		echo json_encode($data);
	}
	
	public function selectCarByManufacturer($id)
	{
		$data['cars'] = $this->home_model->selectCarsByManufacturer($id);
		echo json_encode($data);
	}
}
