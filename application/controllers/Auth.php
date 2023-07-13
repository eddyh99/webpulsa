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
		$data	= array(
            'title'		 	=> NAMETITLE . ' - Homepage',
            'content'	 	=> 'auth/index',
			'navbar'		=> 'auth/tamplate/navbar',
			'extra'		    => 'auth/js/js_index',
		);

		$this->load->view('auth/tamplate/wrapper', $data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}

}
