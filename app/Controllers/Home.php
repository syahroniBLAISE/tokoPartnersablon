<?php namespace App\Controllers;

class Home extends BaseController
{
	public $db2 ;
	public function __construct()
	{
		$this->db2 = \Config\Database::connect('home');
	}
	public function index()
	{

		$data['services'] 	= $this->db2->query('SELECT * FROM services')->getResultArray();
		$data['gambar'] 	= $this->db2->query('SELECT * FROM img_galery')->getResultArray();
		$data['artikel'] 	=  $this->db2->query('SELECT * FROM tanyajawab')->getResultArray();
		// dd($data['artikel']);
		// s
		echo view('home/header');
		echo view('home/nav');
		echo view('home/headerHero');
		echo view('home/section');
		echo view('home/index', $data);
		echo view('home/footer');
	}

	//--------------------------------------------------------------------

}
