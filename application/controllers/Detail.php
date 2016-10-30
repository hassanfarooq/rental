<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends Site {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('detail_model');
	}
	
	public function index($id) 
	{
		$data['detail_item'] = $this->detail_model->index($id);
		$this->load->site_template('detail-item', $data);
	}
}