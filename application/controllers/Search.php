<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends Site {
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('search_model');
		$this->data['items'] = $this->search_model->selectAll();
		$this->data['provinces'] = $this->search_model->selectAllProvinces();
		$this->data['manufacturer'] = $this->search_model->selectAllManufacturer();
		$this->data['color'] = $this->search_model->selectCarColor();
		$this->data['door'] = $this->search_model->selectCarDoor();
		$this->data['model'] = $this->search_model->selectModel();
	}

	public function index()
	{
		$this->data['items'] = $this->search_model->selectAll();
		$this->data['provinces'] = $this->search_model->selectAllProvinces();
		$this->data['manufacturer'] = $this->search_model->selectAllManufacturer();
		$this->data['color'] = $this->search_model->selectCarColor();
		$this->data['door'] = $this->search_model->selectCarDoor();
		$this->data['model'] = $this->search_model->selectModel();
		$this->load->site_template('search', $this->data);
	}
	
	public function searchByCriteria()
	{	
		if(isset($_GET) || !empty($_GET)) 
		{
			$data = array(
				'province' => $_GET['province-select'],
				'city' => $_GET['city-select'],
				'manufacturer' => $_GET['manufacturer-select'],	
				'car' => $_GET['car-select'],
				'model' => $_GET['model-select'],
				'color' => $_GET['color'][0],
				'door' => $_GET['door'][0],
				'pick-up-date' => $_GET['pick-up-date'],
				'pick-up-time' => $_GET['pick-up-time'],
				'drop-off-date' => $_GET['drop-off-date'],
				'drop-off-time' => $_GET['drop-off-time']
			);
			$data['items'] = $this->search_model->searchByCriteria($data);
			$this->load->site_template('search', $data);
		}
	}
	public function filterSearchBar()
	{	
		if(isset($_GET) || !empty($_GET)) 
		{
			$result = array();
			
			if(isset($_GET['province-select']) && $_GET['province-select'] != 'Select Province')
			{
				$result['province'] = $_GET['province-select'];
			} else {
				$result['province'] = null;
			}
			
			if(isset($_GET['city-select']) && $_GET['city-select'] != 'Select City')
			{
				$result['city'] = $_GET['city-select'];
			} else {
				$result['city'] = null;
			}
			
			if(isset($_GET['manufacturer-select']) && $_GET['manufacturer-select'] != 'Select Manufacturer')
			{
				$result['manufacturer'] = $_GET['manufacturer-select'];
			} else {
				$result['manufacturer'] = null;
			}
			
			if(isset($_GET['manufacturer-select']) && $_GET['manufacturer-select'] != 'Select Manufacturer')
			{
				$result['manufacturer'] = $_GET['manufacturer-select'];
			} else {
				$result['manufacturer'] = null;
			}
			
			if(isset($_GET['car-select']) && $_GET['car-select'] != 'Select Car')
			{
				$result['car'] = $_GET['car-select'];
			} else {
				$result['car'] = null;
			}
			
			if(isset($_GET['model-select']) && $_GET['model-select'] != 'Select Model')
			{
				$result['model'] = $_GET['model-select'];
			} else {
				$result['model'] = null;
			}
			
			if(isset($_GET['color']) && !empty($_GET['color']))
			{
				$result['color'] = $_GET['color'][0];
			} else {
				$result['color'] = null;
			}
			
			if(isset($_GET['door']) && !empty($_GET['door']))
			{
				$result['door'] = $_GET['door'][0];
			} else {
				$result['door'] = null;
			}
			
			if(isset($_GET['pick-up-date']) && !empty($_GET['pick-up-date']))
			{
				$result['pick-up-date'] = $_GET['pick-up-date'];
			} else {
				$result['pick-up-date'] = null;
			}
			
			if(isset($_GET['pick-up-time']) && !empty($_GET['pick-up-time']))
			{
				$result['pick-up-time'] = $_GET['pick-up-time'];
			} else {
				$result['pick-up-time'] = null;
			}
			
			if(isset($_GET['drop-off-date']) && !empty($_GET['drop-off-date']))
			{
				$result['drop-off-date'] = $_GET['drop-off-date'];
			} else {
				$result['drop-off-date'] = null;
			}
			
			if(isset($_GET['drop-off-time']) && !empty($_GET['drop-off-time']))
			{
				$result['drop-off-time'] = $_GET['drop-off-time'];
			} else {
				$result['drop-off-time'] = null;
			}
			
			
			/*
			$data = array(
				'province' => $_GET['province-select'],
				'city' => $_GET['city-select'],
				'manufacturer' => $_GET['manufacturer-select'],	
				'car' => $_GET['car-select'] ? !empty($_GET['car-select']) : null,
				'model' => $_GET['model-select'],
				'color' => $_GET['color'][0],
				'door' => $_GET['door'][0],
				'pick-up-date' => $_GET['pick-up-date'],
				'pick-up-time' => str_replace(' PM','',str_replace(' AM','', $_GET['pick-up-time'])),
				'drop-off-date' => $_GET['drop-off-date'],
				'drop-off-time' => str_replace(' PM','',str_replace(' AM','', $_GET['drop-off-time']))
			);*/
			$this->data['items'] = $this->search_model->searchByCriteria($result);
			//$this->load->site_template('search', $this->data);
			echo json_encode($this->data);
		}
	}
}
