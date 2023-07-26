
            <div class="col-12 col-lg-9">
                <div class="content-member p-3">
                    <div class="">
                        <div class="col-sm-8 col-md-9">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3><i class="fa fa-cogs"></i> Pengaturan</h3>
                                </div>
                                <div class="panel-body">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#profile"><i class="fa fa-user"></i> Profil</a>
                                        </li>
                                        <li role="presentation" class="">
                                            <a href="#password"><i class="fa fa-lock"></i> Password</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="profile" style="padding-top: 15px;">
                                            <form action="https://polarispulsa.com/akun/pengaturan" method="post" accept-charset="utf-8">
                                                <div class="form-group">
                                                    <label for="user_name">Nama Lengkap</label>
                                                    <input class="form-control" type="text" name="user_name" id="user_name" value="thunderrider" maxlength="32" required="required">
                                                </div>
                                                <div class="form-group">
                                                    <label for="user_gender">Jenis Kelamin</label>
                                                    <select class="form-control" name="user_gender" id="user_gender">
                                                        <option value="male" selected="selected">Laki-laki</option>
                                                        <option value="female">Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="user_location">Alamat Lengkap</label>
                                                    <input class="form-control" type="text" name="user_location" id="user_location" value="" maxlength="160" required="required">
                                                </div>
                                                <div class="form-group">
                                                <label for="user_password">Kata sandi</label>
                                                <input class="form-control" type="password" name="user_password" id="user_password" maxlength="12" required="required">
                                                </div>
                                                <div>
                                                    <button class="btn btn-primary" type="submit" name="submit" value="update_profile">Simpan</button>
                                                </div>
                                        </form>                
                                        </div>
                                        <div role="tabpanel" class="tab-pane active" id="password" style="padding-top: 15px;">
                                            <form action="https://polarispulsa.com/akun/pengaturan/kata-sandi" method="post" accept-charset="utf-8">
                                                <div class="form-group">
                                                <label for="user_password">Kata sandi saat ini</label>
                                                <input class="form-control" type="password" name="user_password" id="user_password" maxlength="12" required="required">
                                                </div>
                                                <div class="form-group">
                                                <label for="new_password">Kata sandi baru</label>
                                                <input class="form-control" type="password" name="new_password" id="new_password" maxlength="12" required="required">
                                                </div>
                                                <div class="form-group">
                                                <label for="confirm_password">Ulangi kata sandi baru</label>
                                                <input class="form-control" type="password" name="confirm_password" id="confirm_password" maxlength="12" required="required">
                                                </div>
                                                <div>
                                                <button class="btn btn-primary" type="submit" name="submit" value="update_password">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>