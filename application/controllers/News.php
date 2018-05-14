<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_gambar');
		$this->load->model('m_news');
	}

	public function index()
	{
		$news=array();
		$temp = $this->m_news->getNewsList();
		for($i=0; $i<sizeof($temp); $i++)
		{
			$news[$i] = $temp[sizeof($temp)-(1 + $i)];
		}
		$temp = $this->m_gambar->getAllGambar();
		$gambar = array();
		$pin = array();
		for($i=0; $i<sizeof($news); $i++)
		{
			for($j=0; $j<sizeof($temp); $j++)
			{
				if($news[$i]['id_gambar']==$temp[$j]['id'])
				{
					$gambar[$i]=$temp[$j];
					if($news[$i]['PinFlag']=='1')
					{
						$pin = $news[$i];
						$pin['gambar'] = $gambar[$i];
					}
					break;
				}
			}
		}
		$data = array(
			'pinned' => $pin,
			'news' => $news,
			'gambar' => $gambar,
			'page' => 'news'
		);
		$this->load->view('header', $data);
		$this->load->view('isinews', $data);
		$this->load->view('footer');
	}
	public function page($number)
	{

	}
}

?>