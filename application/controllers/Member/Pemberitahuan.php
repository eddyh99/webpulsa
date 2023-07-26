<?php
/*----------------------------------------------------------
    Modul Name  : Modul Pemberitahuan
    Desc        : Modul ini di gunakan untuk menerima pemberitahuan yang masuk
    Sub fungsi  : 
        - index    	: Menampilkan isi dari Pemberitahuan
        
------------------------------------------------------------*/ 
defined('BASEPATH') or exit('No direct script access allowed');

class Pemberitahuan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		$data	= array(
            'title'		 	=> NAMETITLE . ' - Pemberitahuan',
            'content'	 	=> 'member/pemberitahuan/index',
			'navbar'		=> 'member/template/navbar',
			'extra'		    => 'member/pemberitahuan/js/_js_index',
			'side5'			=> 'active',
			'breadcrumb'	=> 'Pemberitahuan'
		);



		// $this->load->view('member/profile/index');
		$this->load->view('member/template/wrapper', $data);
	}


}
