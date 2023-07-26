<?php
/*----------------------------------------------------------
    Modul Name  : Modul Deposit
    Desc        : Modul ini di gunakan untuk melakukan proses Deposit
    Sub fungsi  : 
        - index    	: Menampilkan isi dari Deposit member
        
------------------------------------------------------------*/ 
defined('BASEPATH') or exit('No direct script access allowed');

class Reseller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		$data	= array(
            'title'		 	=> NAMETITLE . ' - Reseller',
            'content'	 	=> 'member/reseller/index',
			'extra'		    => 'member/reseller/js/_js_index',
		);

		$this->load->view('member/template/wrapper', $data);
	}


}
