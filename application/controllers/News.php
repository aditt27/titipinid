<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function view()
	{
		$this->load->view('header');
		$this->load->view('isinews');
		$this->load->view('footer');
	}
}
