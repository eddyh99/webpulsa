<?php

//Menggabungkan semua bagian halaman
// require_once('header.php');
$this->load->view('member/template/header');

// For Navbar Landing Page
if(isset($navbar)){
	$this->load->view(@$navbar);
}

if(isset($mainnavbar)){
	$this->load->view(@$mainnavbar);
}

$this->load->view($content);

// For Foot Landing Page
if(isset($footerlanding)){
	$this->load->view($footerlanding);
}

$this->load->view('member/template/footer');
// require_once('footer.php');
