<?php
/*----------------------------------------------------------
    Modul Name  : Modul Profile
    Desc        : Modul ini di gunakan untuk memanajemen akun dari member area  
    Sub fungsi  : 
        - index    	: Menampilkan isi dari profile member
        
------------------------------------------------------------*/ 
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		// $data	= array(
        //     'title'		 	=> NAMETITLE . ' - Member Profile',
        //     'content'	 	=> 'member/profile/index',
		// 	// 'navbar'		=> 'auth/tamplate/navbar',
		// 	'extra'		    => 'member/profile/js/_js_index',
		// );



		$this->load->view('member/profile/index');
		// $this->load->view('member/template/wrapper', $data);
	}


}
