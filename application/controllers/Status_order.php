<?php
/*----------------------------------------------------------
    Modul Name  : Modul Status Order
    Desc        : Modul ini di gunakan untuk melihat status orderan
    Sub fungsi  : 
        - index    	: Menampilkan isi dari Status Order
        
------------------------------------------------------------*/ 
defined('BASEPATH') or exit('No direct script access allowed');

class Status_order extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		$data	= array(
            'title'		 	=> NAMETITLE . ' - Status Order',
            'content'	 	=> 'member/status_order/index',
            'mainnavbar'    => 'member/template/main-navbar',
			'extra'		    => 'member/status_order/js/_js_index',
            'breadcrumb'	=> 'Status Order',
            'side13'        => 'active'
		);

		$this->load->view('member/template/wrapper', $data);
	}


}
