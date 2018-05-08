<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	function cek_login($table,$where){		
		$res = $this->db->get_where($table,$where);
		return $res->result_array();
	}	

}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */