<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
	public function __construct()
	{
		parent::__construct();		
		$this->load->model('m_login');
		if($this->session->userdata('role')){
			redirect('home');
        }
	}
	public function index()
	{
		$data['page'] = "daftar";
		if ($this->input->post()) 
		{
			$post = array(
				'id_pengguna' => '',
				'username_pengguna' => $this->input->post('username'),
				'password_pengguna' => hash('sha256', $this->input->post('password')),
				'nama_pengguna' => $this->input->post('name'),
				'email_pengguna' => $this->input->post('email'),
				'no_hp_pengguna' => $this->input->post('phone'),
				'role' => '1'
			);
			$where1 = array('username_pengguna' => $post['username_pengguna']);
			$where2 = array('email_pengguna' => $post['email_pengguna']);
			$cek1 = $this->m_login->cek_login("pengguna",$where1);
			$cek2 = $this->m_login->cek_login("pengguna",$where2);
			if(count($cek1)==0)
			{
				if(count($cek2)==0)
				{
					$this->m_login->addPengguna($post);
					$cek = $this->m_login->getWhere($where1);
					$cek = $cek[0];
					$data_session = array(
						'id' => $cek['id_pengguna'],
						'username' => $cek['username_pengguna'],
						'email' => $cek['email_pengguna'],
						'nama' => $cek['nama_pengguna'],
						'phone' => $cek['no_hp_pengguna'],
						'role' => $cek['role'],
						'status' => "login"
					);
					$this->session->set_userdata($data_session);
					redirect('home');
				}
				else
				{
					$data = array(
						'page' => $data['page'],
						'post' => $post,
						'alert' => 'Email telah digunakan'
					);
				}
			}
			else
			{
				$data = array(
					'page' => $data['page'],
					'post' => $post,
					'alert' => 'Username telah digunakan'
				);
			}
			$this->load->view('header', $data);
			$this->load->view('daftar');
			$this->load->view('footer', $data);
		}
		else
		{
			$this->load->view('header', $data);
			$this->load->view('daftar');
			$this->load->view('footer', $data);
		}
	}

}

/* End of file Daftar.php */
/* Location: ./application/controllers/Daftar.php */