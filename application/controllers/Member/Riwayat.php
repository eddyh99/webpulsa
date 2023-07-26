<?php
/*----------------------------------------------------------
    Modul Name  : Modul Riwayat
    Desc        : Modul ini di gunakan untuk mengecek history yang tersedia
    Sub fungsi  : 
        - index    	: Menampilkan isi dari Riwayat member
        
------------------------------------------------------------*/ 
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		$data	= array(
            'title'		 	=> NAMETITLE . ' - Riwayat Transaksi',
            'content'	 	=> 'member/riwayat/index',
			'navbar'		=> 'member/template/navbar',
			'extra'		    => 'member/riwayat/js/_js_index',
			'side2'			=> 'active',
			'breadcrumb'	=> 'Riwayat Transaksi'
		);



		// $this->load->view('member/profile/index');
		$this->load->view('member/template/wrapper', $data);
	}


}
