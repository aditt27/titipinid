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
		$number = floor($number);
		if(3*($number-1)<=sizeof($news) && $number>0)
		{
			$data = array(
				'pinned' => $pin,
				'news' => $news,
				'gambar' => $gambar,
				'page' => 'news',
				'number' => $number
			);
			$this->load->view('header', $data);
			$this->load->view('isinews', $data);
			$this->load->view('footer');
		}
		else
		{
			redirect('news');
		}
	}
	public function detail($id_news)
	{
		$where = array('id_news' => $id_news);
		$data = $this->m_news->getNewsWhere($where);
		$judul = $this->m_news->getListJudul();
		if(isset($data['0']))
		{
			$gbr = $data['0']['id_gambar'];
			if($gbr!=NULL)
			{
				$where = array('id' => $gbr);
				$gbr = $this->m_gambar->getGambar($where);
				$data = array(
					'news' => $data['0'],
					'page' => 'detailNews',
					'gambar' => $gbr['0'],
					'judul' => $judul
				);
			}
			else
			{
				$data = array(
					'news' => $data['0'],
					'page' => 'detailNews',
					'judul' => $judul
				);
			}
			$this->load->view('header', $data);
			$this->load->view('detailnews', $data);
			$this->load->view('footer');
		}
		else
		{
			redirect('news');
		}
	}
}

?>