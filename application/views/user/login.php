<div class="content">
    <form action="<?=base_url()?>user/signin" method="post" accept-charset="utf-8">
        <h1><i class="fa fa-sign-in"></i> Masuk</h1>
        <p>Masuk dengan akun terdaftar Anda</p>
        <div class="form-group">
            <input type="text" id="username" name="username" value="" placeholder="Nama Pengguna" class="form-control input-lg username-field" required="required">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Kata Sandi" id="myInput" name="password" value="" class="form-control input-lg password-field" required="required">
            <input type="checkbox" onclick="if (!window.__cfRLUnblockHandlers) return false; myFunction()">Show Password
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon" style="padding: 0;">
                    <img src="https://www.polarispulsa.com/captcha" style="" alt="Captcha">
                </span>
                <input type="text" class="form-control input-lg" name="captcha" id="captcha" maxlength="5" size="5" required="required" placeholder="Kode keamanan">
            </div>
        </div>
        <div class="login-actions">
            <button class="login-action btn btn-primary btn-lg btn-block" type="submit" name="submit" value="login">Masuk</button>
        </div>
    </form> 
</div>