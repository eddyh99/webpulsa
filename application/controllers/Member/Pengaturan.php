<?php
/*----------------------------------------------------------
    Modul Name  : Modul Pengaturan
    Desc        : Modul ini di gunakan untuk dapat mengubah profile, password, PIN, dan Keamanan
    Sub fungsi  : 
        - index    	: Menampilkan isi dari Pengaturan
        
------------------------------------------------------------*/ 
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		$data	= array(
            'title'		 	=> NAMETITLE . ' - Pengaturan',
            'content'	 	=> 'member/pengaturan/index',
			'navbar'		=> 'member/template/navbar',
			'extra'		    => 'member/pengaturan/js/_js_index',
			'side6'			=> 'active',
            'breadcrumb'	=> 'Pengaturan'
		);

		$this->load->view('member/template/wrapper', $data);
	}


}
