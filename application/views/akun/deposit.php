<div class="container">
      <ul class="breadcrumb">
        <li><a href="<?=base_url()?>"><i class="fa fa-home"></i></a></li>
        <li><a href="<?=base_url()?>akun/profil">Akun Saya</a></li>
        <li class="active"><span>Deposit</span></li>
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
              <h3><i class="fa fa-money"></i> Deposit</h3>
            </div>
                                    <div style="margin: 15px;">
              <form action="https://polarispulsa.com/akun/deposit" method="post" accept-charset="utf-8">
                                                                            <input type="hidden" name="csrf_token" value="41fc5bed2ef3700980f61873d0afb2d2">
              <div class="row">
                <div class="col-sm-4 col-md-3 form-group">
                  <div class="input-group">
                    <span class="input-group-addon">Rp</span>
                    <input class="form-control" type="number" name="amount" id="amount" maxlength="12" value="" required="required" data-toggle="tooltip" data-title="Jumlah Deposit" placeholder="10000" min="10000" max="7000000" data-original-title="" title="">
                  </div>
                </div>
                <div class="col-sm-5 col-md-6 form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                    <select class="form-control" name="payment" id="payment" data-toggle="tooltip" data-title="Metode Pembayaran" data-original-title="" title="">
                    <option value="">-- Pembayaran --</option>
                                                              <option value="" disabled="disabled">Alfamart &amp; Indomaret (Offline)</option>
                                                                                   <option value="" disabled="disabled">ALFAMART DANA (ADM 500) (Offline)</option>
                                                                                   <option value="bca_bisnis_gm">Bank BCA</option>
                                                                                   <option value="bank_bni">Bank BNI (LAMBAT)</option>
                                                                                   <option value="" disabled="disabled">Bank BRI (Offline)</option>
                                                                                   <option value="bsi_gm">Bank BSI</option>
                                                                                   <option value="jago_gm">Bank Jago</option>
                                                                                   <option value="mandiri_nt">Bank Mandiri</option>
                                                                                   <option value="" disabled="disabled">Bank Permata (MANUAL) (Offline)</option>
                                                                                   <option value="jenius_gm">Jenius BTPN</option>
                                                                                   <option value="" disabled="disabled">QRIS (S&amp;K BERLAKU) (Offline)</option>
                                                                                   <option value="seabank_gm">SeaBank (SESAMA)</option>
                                                                                   <option value="va_bnc">VIRTUAL AKUN (GRATIS)</option>
                                                             </select>
                  </div>
                </div>
                <div class="col-sm-3 col-md-3 form-group"><button class="btn btn-primary btn-block" type="submit" name="submit" value="deposit"><i class="fa fa-plus"></i> Deposit</button></div>
                <div class="col-xs-12"><i>Minimal 10.000, maksimal 7.000.000, dan harus kelipatan 10.000</i></div>
              </div><br>
							   <div class="alert alert-info fade in"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><center><i class="fa fa-info-circle"></i> <b>CASHABCAK 0,1%  </b></center><br>Dapatkan cashback 0,1% dengan deposit minimal Rp 1.000.000 cair jam 07:00 di hari berikutnya hanya berlaku untuk metode pembayaran transfer bank 
							   </div>
              </form>            </div>
                                                <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Tanggal</th>
                    <th>Jumlah</th>
                    <th>Pembayaran</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                                    <tr>
                    <td><a href="https://polarispulsa.com/akun/deposit/view/484891">25/04/2023 17:26:44</a></td>
                    <td>Rp 60.667</td>
                    <td>Bank Jago</td>
                    <td><span class="badge badge-success" style="width: 64px;" data-toggle="tooltip" data-title="Deposit berhasil" data-original-title="" title="">SUKSES</span></td>
                  </tr>
                                    <tr>
                    <td><a href="https://polarispulsa.com/akun/deposit/view/476471">26/03/2023 08:03:39</a></td>
                    <td>Rp 90.889</td>
                    <td>Bank MANDIRI</td>
                    <td><span class="badge badge-success" style="width: 64px;" data-toggle="tooltip" data-title="Deposit berhasil" data-original-title="" title="">SUKSES</span></td>
                  </tr>
                                  </tbody>
              </table>
            </div>
                      </div>
                  </div>
      </div>
    </div>