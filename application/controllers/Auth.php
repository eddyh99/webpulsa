<?php
/*----------------------------------------------------------
    Modul Name  : Modul Auth
    Desc        : Modul ini di gunakan untuk menampilkan landing page, Error 404
				  User Signup, Login, Reset Pass,  
    Sub fungsi  : 
        - page404    	: berfungsi Menampilkan Error 404
        
------------------------------------------------------------*/ 
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
	    $_SESSION["identify"]=rand(1000,9999);
		$data	= array(
            'title'		 	=> NAMETITLE . ' - Homepage',
            'content'	 	=> 'auth/index',
			'navbar'		=> 'template/navbar',
			'extra'		    => 'auth/js/js_index',
		);

		$this->load->view('template/wrapper', $data);
	}
	
	public function history(){
		$data	= array(
            'title'		 	=> NAMETITLE . ' - Riwayat Transaksi',
            'content'	 	=> 'auth/history',
			'navbar'		=> 'template/navbar',
		);

		$this->load->view('template/wrapper', $data);
	}

	public function harga(){
		$data	= array(
            'title'		 	=> NAMETITLE . ' - Harga',
            'content'	 	=> 'auth/harga',
			'navbar'		=> 'template/navbar',
		);

		$this->load->view('template/wrapper', $data);
	}

	public function agen(){
		$data	= array(
            'title'		 	=> NAMETITLE . ' - Agen',
            'content'	 	=> 'auth/agen',
			'navbar'		=> 'template/navbar',
		);

		$this->load->view('template/wrapper', $data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}

}
