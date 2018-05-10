<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
		if($this->session->userdata('role')){
            $data_user = $this->session->userdata('role');
            if($this->session->userdata('role') == "3")
            {
                redirect('admin');
            }
            else
            {
                redirect('user');
            }
        }
	}
	public function index()
	{
		if ($this->input->post()) {
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
					'id' => $cek['id_pengguna'],
					'username' => $cek['username_pengguna'],
					'nama' => $cek['nama_pengguna'],
					'role' => $cek['role'],
					'status' => "login"
					);

				$this->session->set_userdata($data_session);
				if($this->session->userdata('role')=="3")
				{
					redirect('admin');
				}
				else
				{
					redirect('user');
				}
			}else{
				echo "Username dan password salah !";
			}
		}
		else{
			$data['page'] = "login";
			$this->load->view('header', $data);
			$this->load->view('login');
			$this->load->view('footer', $data);
		}
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */