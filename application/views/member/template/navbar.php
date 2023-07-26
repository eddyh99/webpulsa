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
                    <!-- <li class="nav-item ">
                        <a href="" class="text-white p-2 d-flex align-items-center justify-content-start">
                            <i class="fa-solid fa-comments fs-3"></i>
                            <span class="text-small-nofixnavmember ms-2">
                                Testimoni
                            </span>
                        </a>
                    </li> -->
                    <!-- <li class="nav-item ">
                        <a href="" class="text-white p-2 d-flex align-items-center justify-content-start">
                            <i class="fa-solid fa-globe fs-3"></i>
                            <span class="text-small-nofixnavmember ms-2">
                                Blog
                            </span>
                        </a>
                    </li> -->
                    <li class="nav-item ">
                        <a href="" class="text-white p-2 d-flex align-items-center justify-content-start">
                            <i class="fa-solid fa-users fs-3"></i>
                            <span class="text-small-nofixnavmember ms-2">
                                Reseller
                            </span>
                        </a>
                    </li>
                    <!-- <li class="nav-item ">
                        <a href="" class="text-white p-2 d-flex align-items-center justify-content-start">
                            <i class="fa-solid fa-bullhorn fs-3"></i>
                            <span class="text-small-nofixnavmember ms-2">
                                Informasi
                            </span>
                        </a>
                    </li> -->
                </ul>
            </ul>
        </div>
    </div>
</nav>

<!-- For Spcaing Autocontent -->
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
            <a href="<?= base_url()?>" class=" p-4 d-flex flex-column align-items-center justify-content-center">
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
            <a href="<?= base_url()?>member/harga" class=" p-4 d-flex flex-column align-items-center justify-content-center">
                <i class="fa-solid fa-money-bill-wave fs-3"></i>
                <span class="text-small-nofixnavmember">
                    Harga
                </span>
            </a>
            <!-- <a href="" class=" p-4 d-flex flex-column align-items-center justify-content-center">
                <i class="fa-solid fa-comments fs-3"></i>
                <span class="text-small-nofixnavmember">
                    Testimoni
                </span>
            </a> -->
            <!-- <a href="" class=" p-4 d-flex flex-column align-items-center justify-content-center">
                <i class="fa-solid fa-globe fs-3"></i>
                <span class="text-small-nofixnavmember">
                    Blog
                </span>
            </a> -->
            <a href="" class=" p-4 d-flex flex-column align-items-center justify-content-center">
                <i class="fa-solid fa-users fs-3"></i>
                <span class="text-small-nofixnavmember">
                    Reseller
                </span>
            </a>
            <!-- <a href="" class=" p-4 d-flex flex-column align-items-center justify-content-center">
                <i class="fa-solid fa-bullhorn fs-3"></i>
                <span class="text-small-nofixnavmember">
                    Informasi
                </span>
            </a> -->
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
                        <li class="breadcrumb-item active" aria-current="page"><?= @$breadcrumb?></li>
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
                                    Pemberitahuan
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


<!-- Start Sidebar Web -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-3 d-none d-lg-block">
                <div class="sidebar-member">
                    <div class="header">
                        AKUN SAYA
                    </div>
                    <div class="main-sidebar">
                        <a href="<?= base_url()?>member/profile" class="d-flex align-items-center <?= @$side1 ?>">
                            <i class="fa-regular fa-user ms-2"></i>    
                            <span class="ms-2 text-sidebar-member">
                                Profile 
                            </span>
                        </a>
                        <a href="<?= base_url()?>member/riwayat" class="d-flex align-items-center <?= @$side2 ?>">
                            <i class="fa-solid fa-clock-rotate-left ms-2"></i>   
                            <span class="ms-2 text-sidebar-member">
                                Riwayat Transaksi
                            </span>
                        </a>
                        <a href="<?=base_url()?>member/deposit" class="d-flex align-items-center <?= @$side3 ?>">
                            <i class="fa-solid fa-money-bill-wave ms-2"></i>
                            <span class="ms-2 text-sidebar-member">
                                Deposit
                            </span>
                        </a>
                        <a href="<?= base_url()?>member/mutasi" class="d-flex align-items-center <?= @$side4 ?>">
                            <i class="fa-regular fa-credit-card ms-2"></i>
                            <span class="ms-2 text-sidebar-member">
                                Mutasi Saldo
                            </span>
                        </a>
                        <a href="<?= base_url()?>member/pemberitahuan" class="d-flex align-items-center <?= @$side5?>">
                            <i class="fa-solid fa-bell ms-2"></i>
                            <span class="ms-2 text-sidebar-member">
                                Pemberitahuan
                            </span>
                        </a>
                        <a href="<?= base_url()?>member/pengaturan" class="d-flex align-items-center <?= @$side6?>">
                            <i class="fa-solid fa-gear ms-2"></i>
                            <span class="ms-2 text-sidebar-member">
                                Pengaturan
                            </span>
                        </a>
                        <a href="<?= base_url()?>member/deposit" class="d-flex align-items-center <?= @$side7?>">
                            <i class="fa-solid fa-right-from-bracket ms-2"></i>
                            <span class="ms-2 text-sidebar-member">
                                Keluar
                            </span>
                        </a>
                    </div>
                </div>
            </div>