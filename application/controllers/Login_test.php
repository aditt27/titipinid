<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_test extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('unit_test');
		$this->load->model('m_login');
	}
	public function index()
	{
		$this->good_login();
		$this->login_using_email();
		$this->wrong_password();
		echo $this->unit->report();
	}
	public function good_login()
	{
		$temp = $this->m_login->getPengguna();
		$indx = rand(0, (sizeof($temp)-1));
		$where = array(
			'username_pengguna' => $temp[$indx]['username_pengguna'],
			'password_pengguna' => $temp[$indx]['password_pengguna']
		);
		$cek = $this->m_login->cek_login("pengguna",$where);
		$test = count($cek);
		$expected_result = 1;
		$test_name = 'Username and Password Matched to Database';

		$this->unit->run($test, $expected_result, $test_name);
		
	}
	public function login_using_email()
	{
		$temp = $this->m_login->getPengguna();
		$indx = rand(0,sizeof($temp)-1);
		$where = array(
			'username_pengguna' => $temp[$indx]['email_pengguna'],
			'password_pengguna' => $temp[$indx]['password_pengguna']
		);
		$cek = $this->m_login->cek_login("pengguna",$where);
		$test = count($cek);
		$expected_result = 0;
		$test_name = 'User login using email';

		$this->unit->run($test, $expected_result, $test_name);
	}
	public function wrong_password()
	{
		$temp = $this->m_login->getPengguna();
		$indx = rand(0,sizeof($temp)-1);
		$where = array(
			'username_pengguna' => $temp[$indx]['username_pengguna'],
			'password_pengguna' => 'wrong Password'
		);
		$cek = $this->m_login->cek_login("pengguna",$where);
		$test = count($cek);
		$expected_result = 0;
		$test_name = 'User login using wrong password';

		$this->unit->run($test, $expected_result, $test_name);
	}

}

/* End of file Login_test.php */
/* Location: ./application/controllers/Login_test.php */