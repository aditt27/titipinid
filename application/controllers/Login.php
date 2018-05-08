<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
	public function index()
	{
		$this->load->view('Login/header');
		$this->load->view('Login/formLogin');
		$this->load->view('Login/footer');
	}

	public function do_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email_pengguna' => $email,
			'password_pengguna' => md5($password)
			);
		$cek = $this->m_login->cek_login("pengguna",$where);
		if(count($cek) > 0){
			$cek = $cek[0];
			$data_session = array(
				'nama' => $cek['nama_pengguna'],
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			echo $this->session->userdata('nama');
			echo "berhasil";
		}else{
			echo "Username dan password salah !";
		}
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */