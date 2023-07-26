<?php
/*----------------------------------------------------------
    Modul Name  : Modul Deposit
    Desc        : Modul ini di gunakan untuk melakukan proses Deposit
    Sub fungsi  : 
        - index    	: Menampilkan isi dari Deposit member
        
------------------------------------------------------------*/ 
defined('BASEPATH') or exit('No direct script access allowed');

class Deposit extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		$data	= array(
            'title'		 	=> NAMETITLE . ' - Deposit',
            'content'	 	=> 'member/deposit/index',
			'navbar'		=> 'member/template/navbar',
			'extra'		    => 'member/deposit/js/_js_index',
			'side3'			=> 'active',
            'breadcrumb'	=> 'Deposit'
		);

		$this->load->view('member/template/wrapper', $data);
	}


}
