<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}

/* End of file Logout.php */
/* Location: ./application/controllers/Logout.php */