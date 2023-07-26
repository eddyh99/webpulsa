<div class="container">
      <ul class="breadcrumb">
        <li><a href="<?=base_url()?>"><i class="fa fa-home"></i></a></li>
        <li><a href="<?=base_url()?>akun/profile">Akun Saya</a></li>
        <li class="active"><span>Pengaturan</span></li>
      </ul>
      <div class="row">
        <div class="col-sm-4 col-md-3">
            <div class="left-menu-select visible-xs">
                <div class="input-group">
                    <span class="input-group-addon" style="background-color: transparent"><i class="fa fa-bars"></i></span>
                    <select class="form-control" onchange="if (!window.__cfRLUnblockHandlers) return false; window.location.href=this.value">
                        <optgroup label="Akun Saya">
                            <option value="<?=base_url()?>akun/profile" selected="selected">Profile</option>
                            <option value="<?=base_url()?>akun/riwayat">Riwayat Transaksi</option>
                            <option value="<?=base_url()?>akun/deposit">Deposit</option>
                            <option value="<?=base_url()?>akun/mutasi">Mutasi Saldo</option>
                            <option value="<?=base_url()?>akun/notifikasi">Pemberitahuan (20)</option>
                            <option value="<?=base_url()?>akun/pengaturan">Pengaturan</option>
                            <option value="<?=base_url()?>auth/logout">Keluar</option>
                        </optgroup>
                    </select>
                </div>
            </div>
            <div class="panel panel-default hidden-xs">
                <div class="panel-heading"><h3>Akun Saya</h3></div>
                <div class="list-group">
                    <a class="list-group-item active" id="menu_item_0_0" href="<?=base_url()?>akun/profile"><i class="fa fa-user-o"></i> Profile</a>
                    <a class="list-group-item" id="menu_item_0_2" href="<?=base_url()?>akun/riwayat"><i class="fa fa-history"></i> Riwayat Transaksi</a>
                    <a class="list-group-item" id="menu_item_0_3" href="<?=base_url()?>akun/deposit"><i class="fa fa-money"></i> Deposit</a>
                    <a class="list-group-item" id="menu_item_0_4" href="<?=base_url()?>akun/mutasi"><i class="fa fa-credit-card"></i> Mutasi Saldo</a>
                    <a class="list-group-item" id="menu_item_0_5" href="<?=base_url()?>akun/notifikasi"><i class="fa fa-bell-o"></i> Pemberitahuan <span class="badge">20</span></a>
                    <a class="list-group-item" id="menu_item_0_12" href="<?=base_url()?>akun/pengaturan"><i class="fa fa-cogs"></i> Pengaturan</a>
                    <a class="list-group-item" id="menu_item_0_13" href="<?=base_url()?>auth/logout"><i class="fa fa-sign-out"></i> Keluar</a>
                </div>
            </div>
        </div>
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