<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		$data['page'] = "news";
		$this->load->view('header', $data);
		$this->load->view('isinews');
		$this->load->view('footer');
	}
}

?>