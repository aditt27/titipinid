<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

	public function index()
	{
		$data = array('page'=>'service');
		$this->load->view('header', $data);
		$this->load->view('layanan');
		$this->load->view('footer', $data);
	}

}
