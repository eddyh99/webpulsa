<?php
/*----------------------------------------------------------
    Modul Name  : Modul Harga
    Desc        : Modul ini di gunakan untuk Melihat produk harga
    Sub fungsi  : 
        - index    	: Menampilkan isi dari produk harga
        
------------------------------------------------------------*/ 
defined('BASEPATH') or exit('No direct script access allowed');

class Harga extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		$data	= array(
            'title'		 	=> NAMETITLE . ' - Harga',
            'content'	 	=> 'member/harga/index',
			'mainnavbar'    => 'member/template/main-navbar',
			'extra'		    => 'member/harga/js/_js_index',
            'breadcrumb'	=> 'Harga',
            'side14'        => 'active'
		);

		$this->load->view('member/template/wrapper', $data);
	}


}
