<div class="container">
    <ul class="breadcrumb">
        <li><a href="<?=base_url()?>"><i class="fa fa-home"></i></a></li>
        <li class="active"><span>Akun Saya</span></li>
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
            <div class="row">
                <div class="col-sm-12 col-md-7" id="data-profil">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="height: 100px;"></div>
                            <div class="panel-body">
                                <div class="row" style="margin-top: -65px;margin-bottom: 20px">
                                <div class="col-xs-offset-2 col-xs-8 col-sm-offset-4 col-sm-4 text-center">
                                    <img class="img-thumbnail" src="https://www.polarispulsa.com/images/user-default.png">
                                </div>
                            </div>
                            <div class="alert alert-warning" align="center">Kami berhak melakukan pemblokiran apabila terdapat penyalahgunaan akun</div>
                                <table class="table" style="margin-bottom: 0;">
                                    <tbody>
                                        <tr><td style="width: 140px;">Nama Lengkap</td><td>: thunderrider</td></tr>
                                        <tr><td style="width: 140px;">Nama Pengguna</td><td>: thunderrider</td></tr>
                                        <tr><td style="width: 140px;">Email</td><td>: eddy_h99@yahoo.com</td></tr>
                                        <tr><td style="width: 140px;">Jenis Kelamin</td><td>: Laki-laki</td></tr>
                                        <tr><td style="width: 140px;">Alamat</td><td>: </td></tr>
                                        <tr><td style="width: 140px;">No. HP</td><td>: <strong>081226227552</strong></td></tr>
                                        <tr><td style="width: 140px;">Saldo</td><td>: Rp 3.607&nbsp;&nbsp;&nbsp;<a href="<?=base_url()?>akun/deposit"><span class="label label-success" style="width: 74px;">Tambah Saldo</span></a></td></tr>
                                        <tr><td style="width: 140px;">Total Transaksi</td><td>: 10 transaksi sukses</td></tr>
                                        <tr><td style="width: 140px;">Tanggal Mendaftar</td><td>: 20/09/2017 16:28:09</td></tr>
                                    </tbody>
                                </table>
                                <br>
                                <a href=<?=base_url()?>akun/pengaturan" class="btn btn-primary btn-block"><b>Edit profil</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>