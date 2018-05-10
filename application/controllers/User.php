<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('role')) 
    	{
    		redirect('login');
    	}
    	if ($this->session->userdata('role') == "3")
    	{
    		redirect('admin');
    	}
    }
	public function index()
	{

	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */