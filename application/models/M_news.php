<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_news extends CI_Model {

	public function getNews(){
        $res=$this->db->get('news'); // Kode ini berfungsi untuk memilih tabel yang akan ditampilkan
        return $res->result_array(); // Kode ini digunakan untuk mengembalikan hasil operasi $res menjadi sebuah array
    }
    public function getNewsWhere($where){
        $this->db->select('e.id_news, e.judul_news, p.nama_pengguna as author, e.isi_news, e.PinFlag, e.id_gambar, e.waktu_news ')
			->from('news as e ')
			->join('pengguna as p', 'e.id_author = p.id_pengguna') 
			->where($where);
		$res = $this->db->get();
	    return $res->result_array();
    }
    public function getListJudul(){
        $this->db->select('id_news, judul_news')
            ->from('news');
        $res = $this->db->get();
        return $res->result_array();
    }
    public function getNewsList(){
    	$this->db->select('e.id_news, e.judul_news, e.isi_news, e.PinFlag, e.id_gambar, p.nama_pengguna as author, e.waktu_news ')
			->from('news as e ')
			->join('pengguna as p', 'e.id_author = p.id_pengguna') ;
		$res = $this->db->get();
	    return $res->result_array();
    }
	public function addNews($data){
        $res = $this->db->insert('news', $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
        return $res; // Kode ini digunakan untuk mengembalikan hasil $res
    }
 
    public function updateNews($data, $where){
        $res = $this->db->update('news', $data, $where); // Kode ini digunakan untuk merubah record yang sudah ada dalam sebuah tabel
        return $res;
    }
 
    public function deleteNews($where){
        $res = $this->db->delete('news',$where); // Kode ini digunakan untuk menghapus record yang sudah ada
        return $res;
    }
    public function getWhere($where){
	    $res=$this->db->get_where('news', $where);
	    return $res->result_array();
	}

}

/* End of file M_news.php */
/* Location: ./application/models/M_news.php */