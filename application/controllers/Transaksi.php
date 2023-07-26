<?php
/*----------------------------------------------------------
    Modul Name  : Modul Auth
    Desc        : Modul ini di gunakan untuk menampilkan landing page, Error 404
				  User Signup, Login, Reset Pass,  
    Sub fungsi  : 
        - page404    	: berfungsi Menampilkan Error 404
        
------------------------------------------------------------*/ 
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getbrand()
	{	
	    $this->form_validation->set_rules('jenis', 'Tipe Produk', 'trim|required');
	    if ($this->form_validation->run() == FALSE){
		    $message=array(
		            "success"   => false,
		            "message"   => validation_errors()
		        );
		    echo json_encode($message);
            return;
		}
	    $jenis      = $this->security->xss_clean($this->input->post('jenis'));
	    $result     = baseapi(URLAPI."/v1/data/data/getdata?jenis=".$jenis);
	    echo json_encode($result->message);
	}

	public function getvoucher()
	{	
	    $this->form_validation->set_rules('jenis', 'Tipe Produk', 'trim|required');
	    $this->form_validation->set_rules('brand', 'Provider', 'trim|required');
	    
	    if ($this->form_validation->run() == FALSE){
		    $message=array(
		            "success"   => false,
		            "message"   => validation_errors()
		        );
		    echo json_encode($message);
            return;
		}

	    $jenis      = $this->security->xss_clean($this->input->post('jenis'));
	    $brand      = $this->security->xss_clean($this->input->post('brand'));

	    $result     = baseapi(URLAPI."/v1/data/data/getvoucher?jenis=".$jenis."&brand=".$brand);
	    echo json_encode($result->message);
	}
	
	public function order(){
	    $this->form_validation->set_rules('voucher', 'Produk', 'trim|required');
	    $this->form_validation->set_rules('nope', 'No HP', 'trim|required');
	    $this->form_validation->set_rules('carabayar', 'Cara Bayar', 'trim|required');

	    $tipeproduk      = $this->security->xss_clean($this->input->post('tipeproduk'));
	    
	    if (($tipeproduk=="token")||($tipeproduk=="tagihan")||($tipeproduk=="games")){
    	    $this->form_validation->set_rules('account', 'Account', 'trim|required');
	    }
	    
	    if ($this->form_validation->run() == FALSE){
	        $this->session->set_flashdata("failed",validation_errors());
	        redirect ("/");
		}

	    $produk     = $this->security->xss_clean($this->input->post('voucher'));
	    $nope       = $this->security->xss_clean($this->input->post('nope'));
	    $carabayar  = $this->security->xss_clean($this->input->post('carabayar'));

	    if (($tipeproduk=="token")||($tipeproduk=="tagihan")||($tipeproduk=="games")){
    	    $account       = $this->security->xss_clean($this->input->post('account'));
	    }
	    
	    $postdata=array(
	            "produk"    =>  $produk,
	            "nope"      =>  $nope,
	            "carabayar" =>  $carabayar
	        );
	    $result=baseapi(URLAPI."/v1/data/transaksi/order",json_encode($postdata),$_SESSION["identify"]);

	    if ($result->code!=200){
	        $this->session->set_flashdata("failed",json_encode($result->message));
	        redirect ("/");
	    }
	   
        redirect ("transaksi/riwayat/".$result->message->transaction_id);

	}
	
	public function riwayat($trans){
	    $result=baseapi(URLAPI."/v1/data/transaksi/riwayat?id=".$trans);
	    $data	= array(
            'title'		 	=> NAMETITLE . ' - Rincian Transaksi',
            'content'	 	=> 'order/confirm',
			'navbar'		=> 'template/navbar',
			'detail'        => $result->message
		);

		$this->load->view('template/wrapper', $data);
	}

}
