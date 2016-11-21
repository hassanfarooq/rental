<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Showroom extends Site {	

	public function index()
	{
		$this->data['provinces'] = $this->provinces_model->get_all();
		$this->data['showroom'] = $this->showroom_model->get_all();
		$this->load->site_template('Showroom', $this->data);
	}
}
