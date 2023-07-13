<!-- <nav class="navbar navbar-light bg-dark">
    <div class="container my-3">
        <div>
            <img clasS="d-block" src="<?= base_url()?>assets/img/logo.jpg" alt="">
        </div>
        <div>
            <ul class="d-flex">
                <li class="ps-5"><a href="" class="text-white">Harga</a></li>
                <li class="ps-5"><a href="" class="text-white">Riwayat Transaksi</a></li>
                <li class="ps-5"><a href="" class="text-white">Blog</a></li>
                <li class="ps-5"><a href="" class="text-white">Testimoni</a></li>
                <li class="ps-5"><a href="" class="text-white">Resseler</a></li>
                <li class="ps-5"><a href="" class="text-white">Signup</a></li>
            </ul>
        </div>
    </div>
</nav> -->

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
                    <a class="nav-link text-white" aria-current="page" href="#">
                        Harga
                    </a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link text-white <?php if($this->uri->segment(2) == 'work_with_us'){echo 'aktif fw-bold';}?>" href="<?= base_url()?>link/work_with_us">
                        Riwayat Transaksi
                    </a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link text-white <?php if($this->uri->segment(2) == 'work_with_us'){echo 'aktif fw-bold';}?>" href="<?= base_url()?>link/work_with_us">
                        Blog 
                    </a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link text-white <?php if($this->uri->segment(2) == 'work_with_us'){echo 'aktif fw-bold';}?>" href="<?= base_url()?>link/work_with_us">
                        Testimoni
                    </a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link text-white <?php if($this->uri->segment(2) == 'work_with_us'){echo 'aktif fw-bold';}?>" href="<?= base_url()?>link/work_with_us">
                        Reseller
                    </a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link text-white" href="<?= base_url()?>auth/booking?booking=<?= base64_encode('agreement')?>">
                        <i class="fa-regular fa-user me-2"></i>
                        Mendaftar
                    </a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link text-white" href="<?= base_url()?>auth/booking?booking=<?= base64_encode('agreement')?>">
                        <i class="fa-solid fa-user me-2"></i>
                        Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END NAVBAR -->
