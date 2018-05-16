<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class News_test extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('unit_test');
		$this->load->model('m_gambar');
		$this->load->model('m_news');
	}
	public function index()
	{
		$this->testIndex();
		$this->testPage();
		$this->testDetail();
		echo $this->unit->report();
	}

	public function testIndex()
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
		$test = $data['news'][0]['judul_news'];
		$test_name = 'judul news';
		$this->unit->run($test, 'is_string', $test_name);

	}

	public function testPage()
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
		$number = 1;
		if(3*($number-1)<sizeof($news) && $number>0)
		{
			$data = array(
				'pinned' => $pin,
				'news' => $news,
				'gambar' => $gambar,
				'page' => 'news',
				'number' => $number
			);
		}

		$test = $data['news'][0]['judul_news'];
		$test_name = 'judul news halaman 1 yang berarti ';
		$this->unit->run($test, 'is_string', $test_name);
	}

	public function testDetail()
	{
		$where = array('id_news' => 13);
		$data = $this->m_news->getNewsWhere($where);
		$judul = $this->m_news->getListJudul();

		$test1 = $data;
		$test_name = 'news id 13';
		$this->unit->run($test1, 'is_array', $test_name);

		$test2 = $data;
		$test_name = 'list judul';
		$this->unit->run($test2, 'is_array', $test_name);
	}
}
