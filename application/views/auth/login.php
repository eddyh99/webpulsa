<main>
    <section class="mt-5">
        <div class="container">
            <form action="<?= base_url()?>auth/auth_login" method="POST">
            
                <?php if (@isset($_SESSION["failed"])) { ?>
                <div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
                    <span class="notif-login f-poppins"><?= $_SESSION["failed"] ?></span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php } ?>
                <?php if (@isset($_SESSION["success"])) { ?>
                <div class="col-12 alert alert-success alert-dismissible fade show" role="alert">
                    <span class="notif-login f-poppins"><?= @$_SESSION["success"] ?></span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php } ?>
                
                <input  type="hidden" id="token" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                        value="<?php echo $this->security->get_csrf_hash(); ?>">
                <div class="d-flex justify-content-center">
                    <img src="<?= base_url()?>assets/img/logo.png" class="img-fluid" width="100" alt="logo">
                </div>
                <div>
                    <h3 class="text-center my-4 ">Login</h3>
                </div>
                <div class="col-4 mx-auto mt-4">
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                </div>
                <div class="col-4 mx-auto mt-4">
                    <input type="text" class="form-control" name="password" placeholder="Password" required>
                </div>
                <div class="col-4 mx-auto d-flex justify-content-center mt-5 pt-2">
                    <button class="btn btn-contact-us">LOGIN</button>
                </div>
            </form>
        </div>
    </section>
</main>