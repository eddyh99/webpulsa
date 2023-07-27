<div class="container">
    <div class="row">
        <div class="col-4 mx-auto">
            <div class="login-wrapper">
                <form action="<?=base_url()?>user/signup" method="post">
                    <h3 class="text-center py-3 title-login">
                        <i class="fa-solid fa-user-plus fs-3"></i>
                        Mendaftar
                    </h3>

                    <div class="input-login-wrapper px-4">
                        <p>Membuat akun</p> 
                        <div class="form-group py-2">
                            <input type="text" id="user_name" name="user_name" value="" placeholder="Nama Pengguna" class="form-control input-lg" required="required">
                            <font color="#0000ff" size="1">Isi nama akun hanya huruf kecil dan angka, tanpa spasi</font>
                        </div>
                        <div class="form-group py-2">
                            <input type="text" id="user_phone" name="user_phone" value="" placeholder="Nomor HP / WhatsApp" class="form-control input-lg" required="required" maxlength="13">
                            <font color="#0000ff" size="1">Pastikan nomor HP benar. Kode verifikasi nomor HP terkirim via SMS dan Whatsapp (bila nomor HP aktif Whatsapp).</font>
                        </div>
                        <div class="form-group py-2">
                            <input type="email" id="user_email" name="user_email" value="" placeholder="Email" class="form-control input-lg" required="required" maxlength="64">
                            <font color="#0000ff" size="1">Pastikan alamat email benar. Data pendaftaran dan kode verifikasi terkirim via email. Cek folder spam bila tidak ada di inbox email</font>
                        </div>
                        <!-- <div class="form-group py-2">
                            <input type="password" id="user_password" name="user_password" value="" placeholder="Kata Sandi" class="form-control input-lg" required="required" maxlength="12">
                        </div> -->
                        <div class="input-group form-group py-1">
                            <input type="password" name="user_password" placeholder="Kata Sandi" class="form-control f-roboto" id="password" required>
                            <div class="input-group-text">
                                <span>
                                    <i class="far fa-eye" id="togglePassword" style="cursor: pointer"
                                        toggle="#password"></i>
                                </span>
                            </div>
                        </div>
                        <div class="input-group form-group py-1">
                            <input type="password" name="user_confirm_password" placeholder="Konfirmasi Kata Sandi" class="form-control f-roboto" id="password2" required>
                            <div class="input-group-text">
                                <span>
                                    <i class="far fa-eye" id="togglePassword2" style="cursor: pointer"
                                        toggle="#password"></i>
                                </span>
                            </div>
                        </div>
                        <!-- <div class="form-group py-2">
                            <input type="password" id="user_confirm_password" name="user_confirm_password" value="" placeholder="Konfirmasi Kata Sandi" class="form-control input-lg" required="required" maxlength="12">
                        </div> -->
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" style="padding: 0;">
                                <img src="https://www.polarispulsa.com/captcha" style="" alt="Captcha">
                                </span>
                            <input type="text" class="form-control input-lg" name="captcha" id="captcha" maxlength="5" size="5" required="required" placeholder="Kode keamanan">
                            </div>
                        </div>
                        <div class="checkbox">
                            <label for="tos">
                                <input id="tos" name="tos" type="checkbox" class="field login-checkbox" value="1" tabindex="4"> Saya sudah membaca dan setuju dengan <a href="<?=base_url()?>user/tos" target="_blank">Syarat dan Ketentuan</a> yang berlaku.
                            </label>
                        </div>
                    </div>

                    <div class="login-actions px-4 py-4 d-flex justify-content-center">
                        <button class="login-action btn btn-primary btn-lg btn-block" type="submit" name="submit" value="signup">
                        Mendaftar
                        </button>
                    </div>
                </form>
            </div>
            <div class="mb-5">
                <div class="login-extra text-center">
                    Sudah punya akun? <a class="text-primary" href="">Masuk</a>
                    <br>
                    Butuh bantuan??
                    <a class="text-primary" href="" title="kontak Whatsapp Polaris Reload"><i class="fa-brands fa-whatsapp" style="font-size:18px;color:#2ecc71" alt="kontak Whatsapp Polaris Reload" border="0" width="16" height="16"></i> 085641679183</a>
                </div>
            </div>
        </div>
    </div>
</div>