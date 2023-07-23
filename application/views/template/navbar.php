
<!-- START NAVBAR -->
<nav class="navbar navbar-expand-xl bg-dark shadow-lg  fixed-top">
    <div class="container d-flex justify-content-between my-3">
        <a class="navbar-brand w-75 w-md-50 w-lg-30 w-xl-25" href="<?= base_url()?>">
            <img src="<?= base_url()?>assets/img/logo.png" class="w-80 img-fluid" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>   
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav d-flex align-items-center justify-content-end">
                <li class="nav-item me-2">
                    <a class="nav-link text-white" aria-current="page" href="<?=base_url()?>harga">
                        Harga
                    </a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link text-white" href="<?= base_url()?>history">
                        Riwayat Transaksi
                    </a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link text-white" href="<?= base_url()?>agen">
                        Keagenan
                    </a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link text-white" href="<?= base_url()?>user/register">
                        <i class="fa-regular fa-user me-2"></i>
                        Mendaftar
                    </a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link text-white" href="<?= base_url()?>user/login">
                        <i class="fa-solid fa-user me-2"></i>
                        Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END NAVBAR -->
