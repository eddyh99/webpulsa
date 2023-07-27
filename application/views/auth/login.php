<div class="container">
    <div class="row">
        <div class="col-4 mx-auto">
            <div class="login-wrapper">
                <form action="<?=base_url()?>user/signin" method="post" accept-charset="utf-8">
                    <h3 class="text-center py-3 title-login">
                        <i class="fa fa-sign-in fs-3"></i>
                        Masuk
                    </h3>
                    <div class="input-login-wrapper px-4">
                        <p class="text-secondary">Masuk dengan akun terdaftar Anda</p>
                        <div class="form-group py-1">
                            <input type="text" id="username" name="username" value="" placeholder="Nama Pengguna" class="form-control input-lg username-field" required="required">
                        </div>
                        <!-- <div class="form-group py-1">
                            <input type="password" placeholder="Kata Sandi" id="myInput" name="password" value="" class="form-control input-lg password-field" required="required">
                            <input type="checkbox">Show Password
                        </div> -->
                        <div class="input-group form-group py-1">
                            <input type="password" name="password" placeholder="Kata Sandi" class="form-control f-roboto" id="password" required>
                            <div class="input-group-text">
                                <span>
                                    <i class="far fa-eye" id="togglePassword" style="cursor: pointer"
                                        toggle="#password"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group py-1">
                            <div class="input-group">
                                <span class="input-group-addon" style="padding: 0;">
                                    <img src="https://www.polarispulsa.com/captcha" style="" alt="Captcha">
                                </span>
                                <input type="text" class="form-control input-lg" name="captcha" id="captcha" maxlength="5" size="5" required="required" placeholder="Kode keamanan">
                            </div>
                        </div>
                    </div>
                    <div class="login-actions px-4 py-4 d-flex justify-content-center">
                        <button class="btn btn-primary" type="submit" value="login">Masuk</button>
                    </div>
                </form> 
            </div>
            <div>
                <div class="login-extra text-center">
                    Tidak punya akun? <a class="text-primary" href="">Mendaftar</a>
                    <br>
                    Lupa Pasword?? Ingatkan <a class="text-primary" href="">Kata Sandi</a>
                    <br>    
                    Butuh bantuan??
                    <a class="text-primary" href="" title="kontak Whatsapp Polaris Reload"><i class="fa-brands fa-whatsapp" style="font-size:18px;color:#2ecc71" alt="kontak Whatsapp Polaris Reload" border="0" width="16" height="16"></i> 085641679183</a>
                </div>
            </div>
        </div>
    </div>
</div>