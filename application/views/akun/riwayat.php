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
                                    <h3><a id="dl-link" class="pull-right" href="#" title="Download 13 transaksi"><i class="fa fa-download"></i></a><i class="fa fa-history"></i> Riwayat Transaksi</h3>
                                  </div>
                                  <div class="table-responsive">
                                      <!--pakai datatable aja-->
                                    <table class="table table-bordered table-hover">
                                      <thead>
                                        <tr>
                                                                <th style="width: 115px;">Tanggal</th>
                                          <th>Provider</th>
                                          <th>Nominal</th>
                                          <th>No. Telepon</th>
                                          <th>Harga</th>
                                          <th>Pembayaran</th>
                                          <th>Status</th>
                                        </tr>
                                      </thead>
                                      <tbody id="history_transaksi">
                                                            <tr>
                                                                <td style="vertical-align: middle;"><a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4902002">22/07/2023 21:44:52</a></td>
                                          <td style="vertical-align: middle;">Telkomsel</td>
                                          <td style="vertical-align: middle;">Telkomsel 10rb (Promo)</td>
                                          <td style="vertical-align: middle;">0822362788199</td>
                                          <td class="text-left">Rp 10.425</td>
                                          <td style="vertical-align: middle;">VIRTUAL AKUN (GRATIS)</td>
                                          <td style="vertical-align: middle;"><span class="badge badge-inverse" style="width: 64px;" data-toggle="tooltip" data-title="Pesanan tidak berlaku, gagal melakukan pembayaran tepat waktu" data-original-title="" title="">EXPIRED</span></td>
                                        </tr>
                                                            <tr>
                                                                <td style="vertical-align: middle;"><a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4898125">21/07/2023 11:28:45</a></td>
                                          <td style="vertical-align: middle;">Telkomsel</td>
                                          <td style="vertical-align: middle;">Pulsa 150rb</td>
                                          <td style="vertical-align: middle;">081255466517</td>
                                          <td class="text-left">Rp150.045</td>
                                          <td style="vertical-align: middle;">QRIS (S&amp;K BERLAKU)</td>
                                          <td style="vertical-align: middle;"><span class="badge badge-inverse" style="width: 64px;" data-toggle="tooltip" data-title="Pesanan tidak berlaku, gagal melakukan pembayaran tepat waktu" data-original-title="" title="">EXPIRED</span></td>
                                        </tr>
                                                            <tr>
                                                                <td style="vertical-align: middle;"><a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4898119">21/07/2023 11:25:20</a></td>
                                          <td style="vertical-align: middle;">Telkomsel</td>
                                          <td style="vertical-align: middle;">Telkomsel 10rb SPESIAL</td>
                                          <td style="vertical-align: middle;">08223548290</td>
                                          <td class="text-left">Rp10.390</td>
                                          <td style="vertical-align: middle;">QRIS (S&amp;K BERLAKU)</td>
                                          <td style="vertical-align: middle;"><span class="badge badge-inverse" style="width: 64px;" data-toggle="tooltip" data-title="Pesanan tidak berlaku, gagal melakukan pembayaran tepat waktu" data-original-title="" title="">EXPIRED</span></td>
                                        </tr>
                                                            <tr>
                                                                <td style="vertical-align: middle;"><a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4893160">19/07/2023 10:30:41</a></td>
                                          <td style="vertical-align: middle;">Telkomsel</td>
                                          <td style="vertical-align: middle;">Pulsa 35rb</td>
                                          <td style="vertical-align: middle;">082146685982</td>
                                          <td class="text-left">Rp 35.220</td>
                                          <td style="vertical-align: middle;">Bank BCA</td>
                                          <td style="vertical-align: middle;"><span class="badge badge-success" style="width: 64px;" data-toggle="tooltip" data-title="Transaksi berhasil" data-original-title="" title="">SUKSES</span></td>
                                        </tr>
                                                            <tr>
                                                                <td style="vertical-align: middle;"><a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4889650">17/07/2023 19:30:54</a></td>
                                          <td style="vertical-align: middle;">PLN Prabayar</td>
                                          <td style="vertical-align: middle;">SPESIAL PLN 100.000</td>
                                          <td style="vertical-align: middle;">082235406818</td>
                                          <td class="text-left">Rp 100.394</td>
                                          <td style="vertical-align: middle;">SeaBank (SESAMA)</td>
                                          <td style="vertical-align: middle;"><span class="badge badge-success" style="width: 64px;" data-toggle="tooltip" data-title="Transaksi berhasil" data-original-title="" title="">SUKSES</span></td>
                                        </tr>
                                                            <tr>
                                                                <td style="vertical-align: middle;"><a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4875205">11/07/2023 19:18:39</a></td>
                                          <td style="vertical-align: middle;">PLN Prabayar</td>
                                          <td style="vertical-align: middle;">SPESIAL PLN 100.000</td>
                                          <td style="vertical-align: middle;">082235406818</td>
                                          <td class="text-left">Rp 100.391</td>
                                          <td style="vertical-align: middle;">SeaBank (SESAMA)</td>
                                          <td style="vertical-align: middle;"><span class="badge badge-success" style="width: 64px;" data-toggle="tooltip" data-title="Transaksi berhasil" data-original-title="" title="">SUKSES</span></td>
                                        </tr>
                                                            <tr>
                                                                <td style="vertical-align: middle;"><a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4844480">29/06/2023 22:24:33</a></td>
                                          <td style="vertical-align: middle;">PLN Prabayar</td>
                                          <td style="vertical-align: middle;">SPESIAL PLN 100.000</td>
                                          <td style="vertical-align: middle;">082235406818</td>
                                          <td class="text-left">Rp 100.375</td>
                                          <td style="vertical-align: middle;">SeaBank (SESAMA)</td>
                                          <td style="vertical-align: middle;"><span class="badge badge-success" style="width: 64px;" data-toggle="tooltip" data-title="Transaksi berhasil" data-original-title="" title="">SUKSES</span></td>
                                        </tr>
                                                            <tr>
                                                                <td style="vertical-align: middle;"><a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4839171">27/06/2023 20:12:50</a></td>
                                          <td style="vertical-align: middle;">PLN Prabayar</td>
                                          <td style="vertical-align: middle;">SPESIAL PLN 50.000</td>
                                          <td style="vertical-align: middle;">082235406818</td>
                                          <td class="text-left">Rp 50.360</td>
                                          <td style="vertical-align: middle;">SeaBank (SESAMA)</td>
                                          <td style="vertical-align: middle;"><span class="badge badge-success" style="width: 64px;" data-toggle="tooltip" data-title="Transaksi berhasil" data-original-title="" title="">SUKSES</span></td>
                                        </tr>
                                                            <tr>
                                                                <td style="vertical-align: middle;"><a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4825875">22/06/2023 17:28:30</a></td>
                                          <td style="vertical-align: middle;">PLN Prabayar</td>
                                          <td style="vertical-align: middle;">SPESIAL PLN 100.000</td>
                                          <td style="vertical-align: middle;">082235406818</td>
                                          <td class="text-left">Rp 100.434</td>
                                          <td style="vertical-align: middle;">Bank BCA</td>
                                          <td style="vertical-align: middle;"><span class="badge badge-success" style="width: 64px;" data-toggle="tooltip" data-title="Transaksi berhasil" data-original-title="" title="">SUKSES</span></td>
                                        </tr>
                                                            <tr>
                                                                <td style="vertical-align: middle;"><a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4820410">20/06/2023 15:34:46</a></td>
                                          <td style="vertical-align: middle;">PLN Prabayar</td>
                                          <td style="vertical-align: middle;">SPESIAL PLN 50.000</td>
                                          <td style="vertical-align: middle;">082235406818</td>
                                          <td class="text-left">Rp 50.323</td>
                                          <td style="vertical-align: middle;">Bank Jago</td>
                                          <td style="vertical-align: middle;"><span class="badge badge-success" style="width: 64px;" data-toggle="tooltip" data-title="Transaksi berhasil" data-original-title="" title="">SUKSES</span></td>
                                        </tr>
                                                            <tr>
                                                                <td style="vertical-align: middle;"><a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4801941">13/06/2023 09:16:58</a></td>
                                          <td style="vertical-align: middle;">PLN Prabayar</td>
                                          <td style="vertical-align: middle;">SPESIAL PLN 100.000</td>
                                          <td style="vertical-align: middle;">082235406818</td>
                                          <td class="text-left">Rp 100.424</td>
                                          <td style="vertical-align: middle;">Bank Jago</td>
                                          <td style="vertical-align: middle;"><span class="badge badge-success" style="width: 64px;" data-toggle="tooltip" data-title="Transaksi berhasil" data-original-title="" title="">SUKSES</span></td>
                                        </tr>
                                                            <tr>
                                                                <td style="vertical-align: middle;"><a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4779995">04/06/2023 17:09:18</a></td>
                                          <td style="vertical-align: middle;">PLN Prabayar</td>
                                          <td style="vertical-align: middle;">SPESIAL PLN 100.000</td>
                                          <td style="vertical-align: middle;">082235406818</td>
                                          <td class="text-left">Rp 100.396</td>
                                          <td style="vertical-align: middle;">Bank Jago</td>
                                          <td style="vertical-align: middle;"><span class="badge badge-success" style="width: 64px;" data-toggle="tooltip" data-title="Transaksi berhasil" data-original-title="" title="">SUKSES</span></td>
                                        </tr>
                                                            <tr>
                                                                <td style="vertical-align: middle;"><a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4752436">25/05/2023 07:02:37</a></td>
                                          <td style="vertical-align: middle;">PLN Prabayar</td>
                                          <td style="vertical-align: middle;">SPESIAL PLN 100.000</td>
                                          <td style="vertical-align: middle;">082235406818</td>
                                          <td class="text-left">Rp 100.356</td>
                                          <td style="vertical-align: middle;">Bank Jago</td>
                                          <td style="vertical-align: middle;"><span class="badge badge-success" style="width: 64px;" data-toggle="tooltip" data-title="Transaksi berhasil" data-original-title="" title="">SUKSES</span></td>
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
</div>