<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_gambar');
		$this->load->model('m_news');
		$this->load->model('m_login');
		if(!$this->session->userdata('role')){
            redirect('login');
        }
        if($this->session->userdata('role') != '3'){
            redirect('user');
        }
	}
	public function index()
	{
		redirect('admin/dashboard');
	}
	public function dashboard()
	{
		if ($this->input->post()) 
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
					'nama_pengguna' => $this->input->post('nama'),
					'email_pengguna' => $this->input->post('email'),
					'no_hp_pengguna' => $this->input->post('phone')
					);
				if($this->input->post('password'))
				{
					$data['password_pengguna'] = hash('sha256', $this->input->post('password'));
				}
				$res = $this->m_login->updatePengguna($data, $where);
				$data = array(
					'page' => 'dashboard',
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
				$this->load->view('admin/header',$data);
				$this->load->view('admin/dashboard', $data);
				$this->load->view('admin/footer');
            }
            else
            {
            	$data = array(
					'page' => 'dashboard',
					'update' => $update
				);
				$this->load->view('admin/header',$data);
				$this->load->view('admin/dashboard', $data);
				$this->load->view('admin/footer');
            }
		}
		else
		{
			$data['page'] = "dashboard";
			$this->load->view('admin/header',$data);
			$this->load->view('admin/dashboard');
			$this->load->view('admin/footer');
		}
	}
	public function createNews()
	{
		$tag = $this->m_news->getTag();
		$data = array('tag' => $tag, 'page' => "createNews");
		$this->load->view('admin/header',$data);
		$this->load->view('admin/createNews',$data);
		$this->load->view('admin/footer');
	}
	public function newsList()
	{
		$data = $this->m_news->getNewsList();
		$data = array(
			'data' => $data,
			'page' => 'newsList'
		);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/newsList',$data);
		$this->load->view('admin/footer');
	}
	public function editNews($id_news)
	{
		$where = array('id_news' => $id_news);
		$data = $this->m_news->getWhere($where);
		$gbr = $data['0']['id_gambar'];
		$tag = $this->m_news->getTag();
		if($gbr!=NULL)
		{
			$where = array('id' => $gbr);
			$gbr = $this->m_gambar->getGambar($where);
			$data = array(
				'data' => $data['0'],
				'tag' => $tag,
				'page' => 'editNews',
				'gambar' => $gbr['0']
			);
		}
		else
		{
			$data = array(
				'data' => $data['0'],
				'tag' => $tag,
				'page' => 'editNews'
			);
		}		
		//echo var_dump($data);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/editNews',$data);
		$this->load->view('admin/footer');
	}
	public function deleteNews($id_news)
	{
		$where = array('id_news' => $id_news);
		$data = $this->m_news->getWhere($where);
		$gbr = $data['0']['id_gambar'];
		if($gbr!=NULL)
		{
			$this->m_news->deleteNews($where);
			$where = array('id' => $gbr);
			$gbr = $this->m_gambar->getGambar($where);
			$path_to_file = 'uploads/img/news/'.$gbr['0']['nama_file'];
			$path_to_file = realpath(FCPATH.$path_to_file); 
			unlink($path_to_file);
			$this->m_gambar->deleteGambar($where);
			redirect('admin/newsList');
		}
		else
		{
			$this->m_news->deleteNews($where);
			redirect('admin/newsList');
		}		
	}
	public function update_news()
	{
		$data = array();  
		if($this->input->post())
		{ 
			// Jika user menekan tombol Submit (Simpan) pada form      
			// lakukan upload file dengan memanggil function upload yang ada di m_gambar.php      
			if($pin = $this->input->post('PinFlag'))
			{
				$where = array('PinFlag' => $pin);
				$data = array('PinFlag' => 0);
				$data = $this->m_news->updateNews($data, $where);
			}  
			else
			{
				$pin='0';
			}
			if($this->input->post('tag') == '-1')
			{
				$tag = array('id_tag' => '', 'nama_tag' => $this->input->post('new_tag'));
				$this->m_news->addTag($tag);
				$temp = array('nama_tag' => $this->input->post('new_tag'));
				$tag = $this->m_news->getTagWhere($temp);
				$tag = $tag['0'];
			}
			else
			{
				$tag['id_tag'] = $this->input->post('tag'); 
			}
			if($_FILES["input_gambar"]["name"]!=NULL)
			{
				if($this->input->post('id_gambar')!=NULL)
				{
					$temp = array('id'=>$this->input->post('id_gambar'));
					$path_to_file = 'uploads/img/news/'.$this->input->post('nama_file');
					$path_to_file = realpath(FCPATH.$path_to_file); 
					unlink($path_to_file);
					$upload = $this->m_gambar->upload();   
					if($upload['result'] == "success")
					{ 
						// Jika proses upload sukses         
						// Panggil function save yang ada di m_gambar.php untuk menyimpan data ke database        
						$this->m_gambar->updateGambar($upload, $temp);   
						date_default_timezone_set('Asia/Jakarta');
						$date = date('Y-m-d H:i:s');
						$data = array(
							'judul_news' => $this->input->post('judul_news'),
							'isi_news' => $this->input->post('isi_news'),
							'PinFlag' => $pin,
							'id_tag' => $tag['id_tag'],
							'id_author' => $this->input->post('id_author')
						);
						$where = array('id_news'=>$this->input->post('id_news'));
						$data = $this->m_news->updateNews($data, $where);
						redirect('admin/newsList'); 
						// Redirect kembali ke halaman awal / halaman view data      
					}
					else
					{ 
						// Jika proses upload gagal        
						$data = array(
							'judul_news' => $this->input->post('judul_news'),
							'isi_news' => $this->input->post('isi_news')
						);
						$data['message'] = $upload['error'];
						redirect('admin/editNews/'.$this->input->post('id_news'));
						// Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan      
					}
				}
				else
				{
					$upload = $this->m_gambar->upload();   
					if($upload['result'] == "success")
					{ 
						// Jika proses upload sukses         
						// Panggil function save yang ada di m_gambar.php untuk menyimpan data ke database        
						$this->m_gambar->save($upload);      
						$where = array(            
							'nama_file' => $upload['file']['file_name'],      
							'ukuran_file' => $upload['file']['file_size'],      
							'tipe_file' => $upload['file']['file_type']    
						);    
						$gbr = $this->m_gambar->getGambar($where);         
						$gbr['0']['id'];
						$data = array(
							'judul_news' => $this->input->post('judul_news'),
							'isi_news' => $this->input->post('isi_news'),
							'id_author' => $this->input->post('id_author'),
							'id_tag' => $tag['id_tag'],
							'PinFlag' => $pin,
							'id_gambar' => $gbr['0']['id']
						);
						$where = array('id_news'=>$this->input->post('id_news'));
						$data = $this->m_news->updateNews($data, $where);
						redirect('admin/newsList'); 
						// Redirect kembali ke halaman awal / halaman view data      
					}
					else
					{ 
						// Jika proses upload gagal        
						$data = array(
							'judul_news' => $this->input->post('judul_news'),
							'isi_news' => $this->input->post('isi_news')
						);
						$data['message'] = $upload['error'];
						redirect('admin/editNews/'.$this->input->post('id_news'));
						// Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan      
					}    
				}
			}
			else
			{
				$data = array(
					'judul_news' => $this->input->post('judul_news'),
					'isi_news' => $this->input->post('isi_news'),
					'id_tag' => $tag['id_tag'],
					'PinFlag' => $pin,
					'id_author' => $this->input->post('id_author')
				);
				$where = array('id_news'=>$this->input->post('id_news'));
				$data = $this->m_news->updateNews($data, $where);
				redirect('admin/newsList'); 
				// Redirect kembali ke halaman awal / halaman view data   
			} 
		}
		else
		{
			redirect('admin/newsList');
		}
	}
	public function save_news()
	{    
		$data = array();     
		if($this->input->post())
		{ 
			// Jika user menekan tombol Submit (Simpan) pada form      
			// lakukan upload file dengan memanggil function upload yang ada di m_gambar.php  
			if($pin = $this->input->post('PinFlag'))
			{
				$where = array('PinFlag' => $pin);
				$data = array('PinFlag' => 0);
				$data = $this->m_news->updateNews($data, $where);
			}  
			else
			{
				$pin='0';
			} 
			if($this->input->post('tag') == '-1')
			{
				$tag = array('id_tag' => '', 'nama_tag' => $this->input->post('new_tag'));
				$this->m_news->addTag($tag);
				$temp = array('nama_tag' => $this->input->post('new_tag'));
				$tag = $this->m_news->getTagWhere($temp);
				$tag = $tag['0'];
			}
			else
			{
				$tag['id_tag'] = $this->input->post('tag'); 
			}
			if($_FILES["input_gambar"]["name"]!=NULL)
			{
				$upload = $this->m_gambar->upload();   
				if($upload['result'] == "success")
				{ 
					// Jika proses upload sukses         
					// Panggil function save yang ada di m_gambar.php untuk menyimpan data ke database        
					$this->m_gambar->save($upload);      
					$where = array(            
						'nama_file' => $upload['file']['file_name'],      
						'ukuran_file' => $upload['file']['file_size'],      
						'tipe_file' => $upload['file']['file_type']    
					);    
					$gbr = $this->m_gambar->getGambar($where);         
					$gbr['0']['id'];
					date_default_timezone_set('Asia/Jakarta');
					$date = date('Y-m-d H:i:s');
					$data = array(
						'judul_news' => $this->input->post('judul_news'),
						'isi_news' => $this->input->post('isi_news'),
						'PinFlag' => $pin,
						'id_tag' => $tag['id_tag'],
						'id_author' => $this->input->post('id_author'),
						'waktu_news' => $date,
						'id_gambar' => $gbr['0']['id']
					);
					$data = $this->m_news->addNews($data);
					redirect('admin/newsList'); 
					// Redirect kembali ke halaman awal / halaman view data      
				}
				else
				{ 
					// Jika proses upload gagal        
					$data = array(
						'judul_news' => $this->input->post('judul_news'),
						'isi_news' => $this->input->post('isi_news')
					);
					$data['message'] = $upload['error'];
					$this->load->view('admin/header');
					$this->load->view('admin/createNews', $data);
					$this->load->view('admin/footer');
					// Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan      
				}    
			}
			else
			{
				date_default_timezone_set('Asia/Jakarta');
				$date = date('Y-m-d H:i:s');
				$data = array(
					'judul_news' => $this->input->post('judul_news'),
					'isi_news' => $this->input->post('isi_news'),
					'PinFlag' => $pin,
					'id_tag' => $tag['id_tag'],
					'id_author' => $this->input->post('id_author'),
					'waktu_news' => $date,
					'id_gambar' => NULL
				);
				$data = $this->m_news->addNews($data);
				redirect('admin/newsList'); 
				// Redirect kembali ke halaman awal / halaman view data      
			} 
		}
		else
		{
			redirect('admin/createNews');
		}
	}
	public function test()
	{
		echo $_FILES==NULL;
		echo "   ";
		$_FILES['test'] = "A";
		echo $_FILES!=NULL;
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */