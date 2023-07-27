<?php
/*----------------------------------------------------------
    Modul Name  : Modul User
    Desc        : Modul ini di gunakan untuk menampilkan User Signup, Login, Reset Pass,  
    Sub fungsi  : 
        - page404    	    : berfungsi Menampilkan Error 404
        - register          : berfungsi untuk Register member
        - Login             : berfungsi untuk login
        - forgot-password   : berfungsi untuk lupa password
        
------------------------------------------------------------*/ 
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function register()
	{	
		$data	= array(
            'title'		 	=> 'Mendaftar - '.NAMETITLE,
            'content'	 	=> 'auth/register',
			'extra'			=> 'auth/js/js_login'
			// 'navbar'		=> 'template/navbar',
		);

		$this->load->view('template/wrapper', $data);
	}
    
    public function signup(){
        $this->form_validation->set_rules('user_name', 'Nama Pengguna', 'trim|required');
	    $this->form_validation->set_rules('user_phone', 'No HP', 'trim|required');
	    $this->form_validation->set_rules('user_email', 'e-mail', 'trim|required');
	    $this->form_validation->set_rules('user_password', 'Password', 'trim|required|min_length[8]|max_length[12]');
	    $this->form_validation->set_rules('user_confirm_password', 'Confirm Password', 'trim|required|min_length[8]|max_length[12]|matches[user_password]');

	    if ($this->form_validation->run() == FALSE){
	        $this->session->set_flashdata("failed",validation_errors());
	        redirect ("/");
		}

	    $username   = $this->security->xss_clean($this->input->post('user_name'));
	    $phone      = $this->security->xss_clean($this->input->post('user_phone'));
	    $email      = $this->security->xss_clean($this->input->post('user_email'));
	    $passwd     = $this->security->xss_clean($this->input->post('user_password'));
	    
	    $postdata=array(
	            "user_login"    => $username,
	            "user_phone"    => $phone,
	            "user_email"    => $email,
	            "user_pass"     => sha1($passwd)
	        );

	    $result=baseapi(URLAPI."/v1/data/user/register",json_encode($postdata));
	    if ($result->code!=200){
	        $this->session->set_flashdata("failed",json_encode($result->message));
	        redirect ("/");
	    }
	   
        redirect ("user/success");
    }
    
    public function success(){
        $data	= array(
            'title'		 	=> 'Sukses Register - '.NAMETITLE,
            'content'	 	=> 'user/success',
			// 'navbar'		=> 'template/navbar',
		);

		$this->load->view('template/wrapper', $data);
    }
    
    public function activate($token){
	    $result=baseapi(URLAPI."/v1/data/user/activate_account?token=".$token);
	    if ($result->code!=200){
	        $this->session->set_flashdata("failed",json_encode($result->message));
	        redirect ("/");
	    }
	   
        $data	= array(
            'title'		 	=> 'Sukses Aktivasi - '.NAMETITLE,
            'content'	 	=> 'user/activate',
			'navbar'		=> 'template/navbar',
		);

		$this->load->view('template/wrapper', $data);
    }
    
    
    public function login(){
        $data	= array(
            'title'		 	=> 'Masuk - '.NAMETITLE,
            'content'	 	=> 'auth/login',
			'extra'			=> 'auth/js/js_login',
			// 'navbar'		=> 'template/navbar',
		);

		$this->load->view('template/wrapper', $data);
    }
    
    public function signin(){
	    $this->form_validation->set_rules('username', 'Nama Pengguna', 'trim|required');
	    $this->form_validation->set_rules('password', 'Password', 'trim|required');

	    if ($this->form_validation->run() == FALSE){
	        $this->session->set_flashdata("failed",validation_errors());
	        redirect ("/");
		}

	    $username   = $this->security->xss_clean($this->input->post('username'));
	    $passwd     = $this->security->xss_clean($this->input->post('password'));

	    $postdata=array(
	            "user_login"    => $username,
	            "user_pass"     => sha1($passwd)
	        );

	    $result=baseapi(URLAPI."/v1/data/user/signin",json_encode($postdata));
	    if (@$result->code!=200){
	        $this->session->set_flashdata("failed",json_encode($result->message));
	        redirect ("/");
	    }
	    
	    $ses_user=array(
	            "username"  => $username,
	            "phone"     => $result->message->user_phone,
	            "email"     => $result->message->user_email
	        );
	    $_SESSION["logged_in"]=$ses_user;
        redirect ("member/profile");
    }
}
