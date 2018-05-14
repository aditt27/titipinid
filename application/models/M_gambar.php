<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_gambar extends CI_Model 
{
	// Fungsi untuk menampilkan semua data gambar  
	public function getAllGambar()
	{    
		$res = $this->db->get('gambar');
		return $res->result_array();  
	}

	public function getGambar($where)
	{	
		$res = $this->db->get_where('gambar',$where);
		return $res->result_array();	
	}
	// Fungsi untuk melakukan proses upload file  
	public function upload()
	{    
		$config['upload_path'] = realpath(FCPATH.'uploads/img/news/');   
		$config['allowed_types'] = 'jpg|png|jpeg';    
		$config['max_size']  = '2048';    
		$config['remove_space'] = TRUE;      
		$this->load->library('upload', $config); 
		// Load konfigurasi uploadnya    
		if($this->upload->do_upload('input_gambar'))
		{ 
			// Lakukan upload dan Cek jika proses upload berhasil      
			// Jika berhasil :      
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
			return $return;    
		}
		else
		{      
			// Jika gagal :      
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      
			return $return;    
		}  
	}    

	// Fungsi untuk menyimpan data ke database  
	public function save($upload)
	{    
		$data = array(            
			'nama_file' => $upload['file']['file_name'],      
			'ukuran_file' => $upload['file']['file_size'],      
			'tipe_file' => $upload['file']['file_type']    
		);        
		$this->db->insert('gambar', $data);  
	}
	public function updateGambar($upload, $where)
	{    
		$data = array(            
			'nama_file' => $upload['file']['file_name'],      
			'ukuran_file' => $upload['file']['file_size'],      
			'tipe_file' => $upload['file']['file_type']    
		);        
		$this->db->update('gambar', $data, $where);  
	}
	public function deleteGambar($where)
	{
		$res = $this->db->delete('gambar', $where); // Kode ini digunakan untuk menghapus record yang sudah ada
        return $res;
	}

}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */