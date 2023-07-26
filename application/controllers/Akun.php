<?php
/*----------------------------------------------------------
    Modul Name  : Modul Akun
    Desc        : Modul ini di gunakan untuk aktivitas akun setelah login  
    Sub fungsi  : 

------------------------------------------------------------*/ 
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function profile()
	{	
		$data	= array(
            'title'		 	=> 'Akun Saya - '.NAMETITLE,
            'content'	 	=> 'akun/profile',
			'navbar'		=> 'template/navbar',
		);

		$this->load->view('template/wrapper', $data);
	}
	
	public function pengaturan(){
		$data	= array(
            'title'		 	=> 'Pengaturan - '.NAMETITLE,
            'content'	 	=> 'akun/pengaturan',
			// 'navbar'		=> 'template/navbar',
		);

		$this->load->view('template/wrapper', $data);
	}
	
	public function deposit(){
		$data	= array(
            'title'		 	=> 'Deposit - '.NAMETITLE,
            'content'	 	=> 'akun/deposit',
			'navbar'		=> 'template/navbar',
		);

		$this->load->view('template/wrapper', $data);
	}
	
	public function riwayat(){
		$data	= array(
            'title'		 	=> 'Riwayat Transaksi - '.NAMETITLE,
            'content'	 	=> 'akun/riwayat',
			// 'navbar'		=> 'template/navbar',
		);

		$this->load->view('template/wrapper', $data);
	}
	
	public function notifikasi(){
		$data	= array(
            'title'		 	=> 'Pemberitahuan - '.NAMETITLE,
            'content'	 	=> 'akun/notifikasi',
			'navbar'		=> 'template/navbar',
		);

		$this->load->view('template/wrapper', $data);
	}
	
	public function mutasi(){
		$data	= array(
            'title'		 	=> 'Mutasi Saldo - '.NAMETITLE,
            'content'	 	=> 'akun/mutasi',
			// 'navbar'		=> 'template/navbar',
		);

		$this->load->view('template/wrapper', $data);
	}
}
