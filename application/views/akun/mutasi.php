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
            <div class="panel-heading">
              <h3><i class="fa fa-credit-card"></i> Mutasi Saldo</h3>
            </div>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                    <th>Jumlah</th>
                    <th>Saldo Akhir</th>
                  </tr>
                </thead>
                <tbody id="history_transaksi">
                                    <tr>
                    <td style="white-space: nowrap;">19/07/2023 10:32:01</td>
                    <td>Pengembalian harga unik 35220 / TRX#<a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4893160">4893160</a></td>
                    <td><span class="text-success" data-toggle="tooltip" title="" data-original-title="Kredit">+75<span></span></span></td>
                    <td style="width: 85px;">3.607</td>
                  </tr>
                                    <tr>
                    <td style="white-space: nowrap;">17/07/2023 19:33:02</td>
                    <td>Pengembalian harga unik 100394 / TRX#<a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4889650">4889650</a></td>
                    <td><span class="text-success" data-toggle="tooltip" title="" data-original-title="Kredit">+44<span></span></span></td>
                    <td style="width: 85px;">3.532</td>
                  </tr>
                                    <tr>
                    <td style="white-space: nowrap;">11/07/2023 19:24:07</td>
                    <td>Pengembalian harga unik 100391 / TRX#<a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4875205">4875205</a></td>
                    <td><span class="text-success" data-toggle="tooltip" title="" data-original-title="Kredit">+41<span></span></span></td>
                    <td style="width: 85px;">3.488</td>
                  </tr>
                                    <tr>
                    <td style="white-space: nowrap;">29/06/2023 22:28:06</td>
                    <td>Pengembalian harga unik 100375 / TRX#<a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4844480">4844480</a></td>
                    <td><span class="text-success" data-toggle="tooltip" title="" data-original-title="Kredit">+25<span></span></span></td>
                    <td style="width: 85px;">3.447</td>
                  </tr>
                                    <tr>
                    <td style="white-space: nowrap;">27/06/2023 20:27:56</td>
                    <td>Pengembalian harga unik 50360 / TRX#<a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4839171">4839171</a></td>
                    <td><span class="text-success" data-toggle="tooltip" title="" data-original-title="Kredit">+124<span></span></span></td>
                    <td style="width: 85px;">3.422</td>
                  </tr>
                                    <tr>
                    <td style="white-space: nowrap;">22/06/2023 17:31:59</td>
                    <td>Pengembalian harga unik 100434 / TRX#<a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4825875">4825875</a></td>
                    <td><span class="text-success" data-toggle="tooltip" title="" data-original-title="Kredit">+84<span></span></span></td>
                    <td style="width: 85px;">3.298</td>
                  </tr>
                                    <tr>
                    <td style="white-space: nowrap;">20/06/2023 15:36:02</td>
                    <td>Pengembalian harga unik 50323 / TRX#<a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4820410">4820410</a></td>
                    <td><span class="text-success" data-toggle="tooltip" title="" data-original-title="Kredit">+87<span></span></span></td>
                    <td style="width: 85px;">3.214</td>
                  </tr>
                                    <tr>
                    <td style="white-space: nowrap;">13/06/2023 09:18:03</td>
                    <td>Pengembalian harga unik 100424 / TRX#<a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4801941">4801941</a></td>
                    <td><span class="text-success" data-toggle="tooltip" title="" data-original-title="Kredit">+74<span></span></span></td>
                    <td style="width: 85px;">3.127</td>
                  </tr>
                                    <tr>
                    <td style="white-space: nowrap;">04/06/2023 17:11:04</td>
                    <td>Pengembalian harga unik 100396 / TRX#<a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4779995">4779995</a></td>
                    <td><span class="text-success" data-toggle="tooltip" title="" data-original-title="Kredit">+46<span></span></span></td>
                    <td style="width: 85px;">3.053</td>
                  </tr>
                                    <tr>
                    <td style="white-space: nowrap;">25/05/2023 07:04:07</td>
                    <td>Pengembalian harga unik 100356 / TRX#<a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4752436">4752436</a></td>
                    <td><span class="text-success" data-toggle="tooltip" title="" data-original-title="Kredit">+56<span></span></span></td>
                    <td style="width: 85px;">3.007</td>
                  </tr>
                                  </tbody>
              </table>
            </div>
          </div>                    
                </div>
            </div>
        </div>
    </div>
</div>