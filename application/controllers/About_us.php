<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller {

	public function index()
	{
		$data = array('page'=>'about');
		$this->load->view('header', $data);
		$this->load->view('about');
		$this->load->view('footer', $data);
	}

}

/* End of file About_us.php */
/* Location: ./application/controllers/About_us.php */