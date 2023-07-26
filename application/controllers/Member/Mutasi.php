<?php
/*----------------------------------------------------------
    Modul Name  : Modul Mutasi Saldo
    Desc        : Modul ini di gunakan untuk mengecek history Mutasi yang tersedia
    Sub fungsi  : 
        - index    	: Menampilkan isi dari Mutasi member
        
------------------------------------------------------------*/ 
defined('BASEPATH') or exit('No direct script access allowed');

class Mutasi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		$data	= array(
            'title'		 	=> NAMETITLE . ' - Mutasi Saldo',
            'content'	 	=> 'member/mutasi/index',
			'navbar'		=> 'member/template/navbar',
			'extra'		    => 'member/mutasi/js/_js_index',
			'side4'			=> 'active',
			'breadcrumb'	=> 'Mutasi Saldo'
		);



		// $this->load->view('member/profile/index');
		$this->load->view('member/template/wrapper', $data);
	}


}
