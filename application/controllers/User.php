<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		session_start();
		if(!isset($_SESSION['stat_login']) && !isset($_SESSION['username']) && !isset($_SESSION['password']))
		{
			redirect(base_url('user/login'));
		}
		else
		{
			echo "<head><title>" . $_SESSION['name'] . "</title></head>";
			echo "<h2>Halo " . $_SESSION['name'] . "</h2>";
			echo "<p><a href='" . base_url('user/logout') . "'>logout</a></p>";
		}
	}

	public function registerasi()
	{
		$this->load->view('register');
	}
	public function add_user()
	{
		session_start();
		if (isset($_POST["daftar"]))
		{
			$captcha = $_POST["captcha"];
			if($captcha == $_SESSION["bilangan"])
			{
				$this->load->model('mymodel');
				$data = array(
					'username' => $this->input->post('username'),
					'name' => $this->input->post('name'),
					'password' => $this->input->post('password')
					);
				//$data = $this->mymodel->insert('user', $data);
				$dataDB = $this->load->model('mymodel');
				$dataDB = $this->mymodel->GetData('user');
			   	$dataDB = array('dataDB' => $dataDB);
			   	$num =0;
			   	foreach ($dataDB as $temp) {
			   	}
			   	foreach ($temp as $dataDB) {
			   		if($dataDB['username'] == $data['username'])
			   		{
			   			$num++;
			   			break;
			   		}
			   	}
				if($num==0)
				{
					$data = $this->mymodel->insert('user', $data);
					echo "<h2>Selamat, Anda telah terdaftar di website kami.</h2><br/>";
					echo "<a href='";
					echo base_url("user/login");
					echo "'><h4>login?</h4></a>";
				}
				else
				{
					echo "<h2>Proses registerasi gagal, Username telah digunakan <br/>Silahkan coba lagi!</h2>";
					echo "<a href='";
					echo base_url("user/registerasi");
					echo "'><h5>Kembali</h5></a>";
				}
			}
			else
			{
				echo "<h2>Captcha salah</h2>";
				echo "<a href='";
				echo base_url('user/registerasi');
				echo "'>kembali</a>";
			}
		}
	}
	public function login()
	{
		session_start();
		if(!isset($_SESSION['stat_login']) && !isset($_SESSION['username']) && !isset($_SESSION['password']))
		{
			$this->load->view('login');
		}
		else
		{
			redirect(base_url('user'));
		}
	}
	public function do_login()
	{
		session_start();
		$this->load->model('mymodel');
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
			);
		$dataDB = $this->load->model('mymodel');
		$dataDB = $this->mymodel->GetData('user');
       	$dataDB = array('dataDB' => $dataDB);
       	$num =0;
       	foreach ($dataDB as $temp) {
       	}
       	foreach ($temp as $dataDB) {
       		if($dataDB['username'] == $data['username'])
       		{
       			$num++;
       			if($dataDB['password'] == $data['password'])
       			{
       				$num++;
       			}
       			break;
       		}
       	}
       	if($num==2)
       	{
       		$_SESSION['stat_login']=1;
       		$_SESSION['username']=$dataDB['username'];
       		$_SESSION['name']=$dataDB['name'];
       		$_SESSION['password']=$dataDB['password'];
       		echo "<h2>Login berhasil.</h2><br/>";
			echo "Halo " . $dataDB['name'];
       	}
       	else
       	{
       		echo "<h2>Login Gagal :(</h2><br/>";
			echo "<h4>Username atau Password salah, <a href='";
			echo base_url("user/login");
			echo "'>coba lagi?</a></h4>";
       	}
	}
	public function captcha()
	{
		$this->load->view('captcha');
	}
	public function logout()
	{
		session_start();
		if(!isset($_SESSION['stat_login']) && !isset($_SESSION['username']) && !isset($_SESSION['password']))
		{
			$this->load->view('login');
		}
		else
		{
			session_destroy();
			echo "<h2>Logout berhasil</h2>";
			echo "<a href='";
			echo base_url("user/login");
			echo "'><h4>login?</h4></a>";
		}
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */