<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700;800&display=swap" rel="stylesheet">


    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- Vendor CSS Files -->
    <link href="<?= base_url()?>assets/vendor/jquery/jquery.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    
    <!-- Icon Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Main CSS File -->
    <link rel="stylesheet" href="<?= base_url()?>assets/style/css/main.css">
    
</head>
<body style="height: 5000px; background-color: #f3f3f3;">

<!-- START NAVBAR -->
<nav class="navbar navbar-expand-xl bg-dark shadow-lg  fixed-top">
    <div class="container d-flex justify-content-between my-3">
        <a class="navbar-brand w-75 w-md-50 w-lg-30 w-xl-25">
            <img src="<?= base_url()?>assets/img/logo.png" class="w-50 img-fluid" alt="logo">
            <span class="text-small-navbarmember">
                <i class="fa-brands fa-whatsapp"></i>
                065123412412
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>     
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav d-flex align-items-center justify-content-end">
                <li class="nav-item dropdown">
                    <!-- <a class="nav-link <?php if($this->uri->segment(2) == 'link_bank'){echo 'aktif fw-bold';}?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Bank
                    </a>
                    <ul class="dropdown-menu position-absolute">
                        <li><a class="dropdown-item" href="<?= base_url()?>link/link_bank?bank=<?= base64_encode('bankaccount') ?>">Encrypted Bank Account</a></li>
                        <li><a class="dropdown-item" href="<?= base_url()?>link/link_bank?bank=<?= base64_encode('bankdebitcards') ?>">Debit Cards</a></li>
                        <li><a class="dropdown-item" href="<?= base_url()?>link/link_bank?bank=<?= base64_encode('bankfiat') ?>">FIAT Currencies Exchange</a></li>
                    </ul> -->
                    <div class="dropdown bg-transparent">
                        <a class="btn text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user me-2"></i>
                            ari123
                            <i class="fa-solid fa-angle-down ms-2"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </li>
                <ul class="d-block d-md-none">
                    <li class="nav-item ">
                        <a href="" class="text-white p-2 d-flex align-items-center justify-content-start">
                            <i class="fa-solid fa-house-chimney fs-3"></i>
                            <span class="text-small-nofixnavmember ms-2">
                                Beranda
                            </span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="" class="text-white p-2 d-flex align-items-center justify-content-start">
                            <i class="fa-solid fa-cart-shopping fs-3"></i>
                            <span class="text-small-nofixnavmember ms-2">
                                Order
                            </span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="" class="text-white p-2 d-flex align-items-center justify-content-start">
                            <i class="fa-solid fa-clock-rotate-left fs-3"></i>
                            <span class="text-small-nofixnavmember ms-2">
                                Status Order
                            </span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="" class="text-white p-2 d-flex align-items-center justify-content-start">
                            <i class="fa-solid fa-money-bill-wave fs-3"></i>
                            <span class="text-small-nofixnavmember ms-2">
                                Harga
                            </span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="" class="text-white p-2 d-flex align-items-center justify-content-start">
                            <i class="fa-solid fa-comments fs-3"></i>
                            <span class="text-small-nofixnavmember ms-2">
                                Testimoni
                            </span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="" class="text-white p-2 d-flex align-items-center justify-content-start">
                            <i class="fa-solid fa-globe fs-3"></i>
                            <span class="text-small-nofixnavmember ms-2">
                                Blog
                            </span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="" class="text-white p-2 d-flex align-items-center justify-content-start">
                            <i class="fa-solid fa-users fs-3"></i>
                            <span class="text-small-nofixnavmember ms-2">
                                Reseller
                            </span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="" class="text-white p-2 d-flex align-items-center justify-content-start">
                            <i class="fa-solid fa-bullhorn fs-3"></i>
                            <span class="text-small-nofixnavmember ms-2">
                                Informasi
                            </span>
                        </a>
                    </li>
                </ul>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-xl bg-dark shadow-lg">
    <div class="container d-flex justify-content-between my-3">
        <a class="navbar-brand w-75 w-md-50 w-lg-30 w-xl-25">
            <img src="<?= base_url()?>assets/img/logo.png" class="w-50 img-fluid" alt="logo">
            <span class="text-small-navbarmember">
                <i class="fa-brands fa-whatsapp"></i>
                065123412412
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>   
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav d-flex align-items-center justify-content-end">
                <li class="nav-item dropdown">
                    <!-- <a class="nav-link <?php if($this->uri->segment(2) == 'link_bank'){echo 'aktif fw-bold';}?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Bank
                    </a>
                    <ul class="dropdown-menu position-absolute">
                        <li><a class="dropdown-item" href="<?= base_url()?>link/link_bank?bank=<?= base64_encode('bankaccount') ?>">Encrypted Bank Account</a></li>
                        <li><a class="dropdown-item" href="<?= base_url()?>link/link_bank?bank=<?= base64_encode('bankdebitcards') ?>">Debit Cards</a></li>
                        <li><a class="dropdown-item" href="<?= base_url()?>link/link_bank?bank=<?= base64_encode('bankfiat') ?>">FIAT Currencies Exchange</a></li>
                    </ul> -->
                    <div class="dropdown bg-transparent">
                        <button class="btn text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user me-2"></i>
                            ari123
                            <i class="fa-solid fa-angle-down ms-2"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END NAVBAR -->

<!-- Start Navbar Not Fix -->
<section class="bg-navbar-nofix d-none d-md-block">
    <div class="container ">
        <div class="d-flex navbar-nofix">
            <a href="" class=" p-4 d-flex flex-column align-items-center justify-content-center">
                <i class="fa-solid fa-house-chimney fs-3"></i>
                <span class="text-small-nofixnavmember">
                    Beranda
                </span>
            </a>
            <a href="" class=" p-4 d-flex flex-column align-items-center justify-content-center">
                <i class="fa-solid fa-cart-shopping fs-3"></i>
                <span class="text-small-nofixnavmember">
                    Order
                </span>
            </a>
            <a href="" class=" p-4 d-flex flex-column align-items-center justify-content-center">
                <i class="fa-solid fa-clock-rotate-left fs-3"></i>
                <span class="text-small-nofixnavmember">
                    Status Order
                </span>
            </a>
            <a href="" class=" p-4 d-flex flex-column align-items-center justify-content-center">
                <i class="fa-solid fa-money-bill-wave fs-3"></i>
                <span class="text-small-nofixnavmember">
                    Harga
                </span>
            </a>
            <a href="" class=" p-4 d-flex flex-column align-items-center justify-content-center">
                <i class="fa-solid fa-comments fs-3"></i>
                <span class="text-small-nofixnavmember">
                    Testimoni
                </span>
            </a>
            <a href="" class=" p-4 d-flex flex-column align-items-center justify-content-center">
                <i class="fa-solid fa-globe fs-3"></i>
                <span class="text-small-nofixnavmember">
                    Blog
                </span>
            </a>
            <a href="" class=" p-4 d-flex flex-column align-items-center justify-content-center">
                <i class="fa-solid fa-users fs-3"></i>
                <span class="text-small-nofixnavmember">
                    Reseller
                </span>
            </a>
            <a href="" class=" p-4 d-flex flex-column align-items-center justify-content-center">
                <i class="fa-solid fa-bullhorn fs-3"></i>
                <span class="text-small-nofixnavmember">
                    Informasi
                </span>
            </a>
        </div>
    </div>
</section>
<!-- End Navbar Not Fix -->


<section class="my-3">
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <nav class="breadcrumb-wrapper ps-2" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-2">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="fa-solid fa-house text-info fs-6"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Member</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>


<!-- Start Dropdown Menu Mobile -->
<section class="my-4 d-block d-lg-none">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="dropdown w-100">
                    <button class="w-100 btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Menu 
                    </button>
                    <ul class="dropdown-menu w-100">
                        <li class="my-1">
                            <a href="" class="d-flex align-items-center dropdown-item">
                                <i class="fa-regular fa-user ms-2"></i>    
                                <span class="ms-2 text-sidebar-member">
                                    Profile 
                                </span>
                            </a>
                        </li>
                        <li class="my-1">
                            <a href="" class="d-flex align-items-center dropdown-item">
                                <i class="fa-solid fa-users-gear ms-1"></i>    
                                <span class="ms-2 text-sidebar-member">
                                    Downline
                                </span>
                            </a>
                        </li>
                        <li class="my-1">
                            <a href="" class="d-flex align-items-center dropdown-item">
                                <i class="fa-solid fa-clock-rotate-left ms-2"></i>   
                                <span class="ms-2 text-sidebar-member">
                                    Riwayat Transaksi
                                </span>
                            </a>
                        </li>
                        <li class="my-1">
                            <a href="" class="d-flex align-items-center dropdown-item">
                                <i class="fa-solid fa-money-bill-wave ms-2"></i>
                                <span class="ms-2 text-sidebar-member">
                                    Deposit
                                </span>
                            </a>
                        </li>
                        <li class="my-1">
                            <a href="" class="d-flex align-items-center dropdown-item">
                                <i class="fa-regular fa-credit-card ms-2"></i>
                                <span class="ms-2 text-sidebar-member">
                                    Mutasi Saldo
                                </span>
                            </a>
                        </li>
                        <li class="my-1">
                            <a href="" class="d-flex align-items-center dropdown-item">
                                <i class="fa-solid fa-bell ms-2"></i>
                                <span class="ms-2 text-sidebar-member">
                                    Notifikasi
                                </span>
                            </a>
                        </li>
                        <li class="my-1">
                            <a href="" class="d-flex align-items-center dropdown-item">
                                <i class="fa-brands fa-telegram ms-2"></i>
                                <span class="ms-2 text-sidebar-member">
                                    Transaksi via Telegram
                                </span>
                            </a>
                        </li>
                        <li class="my-1">
                            <a href="" class="d-flex align-items-center dropdown-item">
                                <i class="fa-regular fa-envelope ms-2"></i>
                                <span class="ms-2 text-sidebar-member">
                                    Transaksi via SMS
                                </span>
                            </a>
                        </li>
                        <li class="my-1">
                            <a href="" class="d-flex align-items-center dropdown-item">
                                <i class="fa-regular fa-comments ms-2"></i>
                                <span class="ms-2 text-sidebar-member">
                                    Transaksi via Jabber
                                </span>
                            </a>
                        </li>
                        <li class="my-1">
                            <a href="" class="d-flex align-items-center dropdown-item">
                                <i class="fa-solid fa-cart-arrow-down ms-2"></i>
                                <span class="ms-2 text-sidebar-member">
                                    Pembelian Massal
                                </span>
                            </a>
                        </li>
                        <li class="my-1">
                            <a href="" class="d-flex align-items-center dropdown-item">
                                <i class="fa-regular fa-circle-check ms-2"></i>
                                <span class="ms-2 text-sidebar-member">
                                    Verifikasi
                                </span>
                            </a>
                        </li>
                        <li class="my-1">
                            <a href="" class="d-flex align-items-center dropdown-item">
                                <i class="fa-solid fa-trash ms-2"></i>
                                <span class="ms-2 text-sidebar-member">
                                    Hapus Akun
                                </span>
                            </a>
                        </li>
                        <li class="my-1">
                            <a href="" class="d-flex align-items-center dropdown-item">
                                <i class="fa-solid fa-gear ms-2"></i>
                                <span class="ms-2 text-sidebar-member">
                                    Pengaturan
                                </span>
                            </a>
                        </li>
                        <li class="my-1">
                            <a href="" class="d-flex align-items-center dropdown-item">
                                <i class="fa-solid fa-right-from-bracket ms-2"></i>
                                <span class="ms-2 text-sidebar-member">
                                    Keluar
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Dropdown Menu Mobile -->

<section>
    <div class="container">
        <div class="row">
            <div class="col-3 d-none d-lg-block">
                <div class="sidebar-member">
                    <div class="header">
                        AKUN SAYA
                    </div>
                    <div class="main-sidebar">
                        <a href="" class="d-flex align-items-center active">
                            <i class="fa-regular fa-user ms-2"></i>    
                            <span class="ms-2 text-sidebar-member">
                                Profile 
                            </span>
                        </a>
                        <a href="" class="d-flex align-items-center">
                            <i class="fa-solid fa-users-gear ms-1"></i>    
                            <span class="ms-2 text-sidebar-member">
                                Downline
                            </span>
                        </a>
                        <a href="" class="d-flex align-items-center">
                            <i class="fa-solid fa-clock-rotate-left ms-2"></i>   
                            <span class="ms-2 text-sidebar-member">
                                Riwayat Transaksi
                            </span>
                        </a>
                        <a href="" class="d-flex align-items-center">
                            <i class="fa-solid fa-money-bill-wave ms-2"></i>
                            <span class="ms-2 text-sidebar-member">
                                Deposit
                            </span>
                        </a>
                        <a href="" class="d-flex align-items-center">
                            <i class="fa-regular fa-credit-card ms-2"></i>
                            <span class="ms-2 text-sidebar-member">
                                Mutasi Saldo
                            </span>
                        </a>
                        <a href="" class="d-flex align-items-center">
                            <i class="fa-solid fa-bell ms-2"></i>
                            <span class="ms-2 text-sidebar-member">
                                Notifikasi
                            </span>
                        </a>
                        <a href="" class="d-flex align-items-center">
                            <i class="fa-brands fa-telegram ms-2"></i>
                            <span class="ms-2 text-sidebar-member">
                                Transaksi via Telegram
                            </span>
                        </a>
                        <a href="" class="d-flex align-items-center">
                            <i class="fa-regular fa-envelope ms-2"></i>
                            <span class="ms-2 text-sidebar-member">
                                Transaksi via SMS
                            </span>
                        </a>
                        <a href="" class="d-flex align-items-center">
                            <i class="fa-regular fa-comments ms-2"></i>
                            <span class="ms-2 text-sidebar-member">
                                Transaksi via Jabber
                            </span>
                        </a>
                        <a href="" class="d-flex align-items-center">
                            <i class="fa-solid fa-cart-arrow-down ms-2"></i>
                            <span class="ms-2 text-sidebar-member">
                                Pembelian Massal
                            </span>
                        </a>
                        <a href="" class="d-flex align-items-center">
                            <i class="fa-regular fa-circle-check ms-2"></i>
                            <span class="ms-2 text-sidebar-member">
                                Verifikasi
                            </span>
                        </a>
                        <a href="" class="d-flex align-items-center">
                            <i class="fa-solid fa-trash ms-2"></i>
                            <span class="ms-2 text-sidebar-member">
                                Hapus Akun
                            </span>
                        </a>
                        <a href="" class="d-flex align-items-center">
                            <i class="fa-solid fa-gear ms-2"></i>
                            <span class="ms-2 text-sidebar-member">
                                Pengaturan
                            </span>
                        </a>
                        <a href="" class="d-flex align-items-center">
                            <i class="fa-solid fa-right-from-bracket ms-2"></i>
                            <span class="ms-2 text-sidebar-member">
                                Keluar
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-9">
                <div class="content-member p-3">
                    <h2>INI MERUPAKAN KONTEN</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus soluta distinctio placeat quibusdam? Animi quae fugiat nesciunt dolores sint autem?</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JQUERY -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- Vendor JS Files -->
<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="<?= base_url() ?>assets/js/main.js"></script>


<!-- AUTO NUMERIC -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/autonumeric/1.8.2/autoNumeric.js"></script>

<?php
if (isset($extra)) {
    $this->load->view($extra);
}
?>

<script>
    $(".money-input").autoNumeric('init', {
        aSep: ',',
        aDec: '.',
        aForm: true,
        vMax: '99999999999.99',
        vMin: '0.00'
    });
</script>
    
</body>
</html>