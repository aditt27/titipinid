<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	function cek_login($table,$where){		
		$res = $this->db->get_where($table,$where);
		return $res->result_array();
	}	
	function updatePengguna($data, $where){		
		$res = $this->db->update('pengguna', $data, $where);
		return $res;
	}	
	function getPengguna(){
        $res=$this->db->get('pengguna'); // Kode ini berfungsi untuk memilih tabel yang akan ditampilkan
        return $res->result_array(); // Kode ini digunakan untuk mengembalikan hasil operasi $res menjadi sebuah array
    }

}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */