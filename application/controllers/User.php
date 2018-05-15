<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
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
        $data['page'] = "user";
        $this->load->view('header', $data);
        $this->load->view('user/home', $data);
        $this->load->view('footer');
	}
    public function editProfile()
    {
        if($this->input->post())
        {
            $where = array('id_pengguna' => $this->session->userdata('id'));
            $email = $this->m_login->getListEmail($where);
            $update = 'true';
            for($i=0; $i<count($email); $i++)
            {
                if($email[$i]['email_pengguna'] == $this->input->post('email'))
                {
                    $update = 'false';
                    break;
                }
            }
            if($update == 'true')
            {
                $data = array(
                    'nama_pengguna' => $this->input->post('name'),
                    'email_pengguna' => $this->input->post('email'),
                    'no_hp_pengguna' => $this->input->post('phone')
                );
                if($this->input->post('password'))
                {
                    $data['password_pengguna'] = hash('sha256', $this->input->post('password'));
                }
                $this->m_login->updatePengguna($data, $where);
                $data = array(
                    'page' => 'editprofile',
                    'update' => $update
                );
                $cek = $this->m_login->cek_login("pengguna",$where);
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
                $this->load->view('header',$data);
                $this->load->view('user/editprofile', $data);
                $this->load->view('footer');
            }
            else
            {
                $data = array(
                    'page' => 'editprofile',
                    'update' => $update
                );
                $this->load->view('header',$data);
                $this->load->view('user/editprofile', $data);
                $this->load->view('footer');
            }
        }
        else
        {
            $data['page'] = "editprofile";
            $this->load->view('header', $data);
            $this->load->view('user/editprofile', $data);
            $this->load->view('footer');
        }
    }

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
