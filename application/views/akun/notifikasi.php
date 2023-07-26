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
              <div class="dropdown pull-right">
                <a id="dropdownMenu1" title="Menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 18px;color:#333;cursor:pointer;">
                  <i class="fa fa-ellipsis-v"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a href="https://polarispulsa.com/akun/notifikasi/mark_all_as_read"><i class="fa fa-bell-o"></i> Tandai semua sudah dibaca</a></li>
                  <li><a data-toggle="modal" data-target="#myModal" href="https://polarispulsa.com/akun/notifikasi/clear"><i class="fa fa-trash"></i> Hapus semua pemberitahuan</a></li>
                </ul>
              </div>
              <h3><i class="fa fa-bell"></i> Pemberitahuan</h3>
              <div class="clearfix"></div>
            </div>
            <div class="list-group">
                            <a href="https://polarispulsa.com/akun/notifikasi/read/1481811" class="list-group-item">
                <h5 class="list-group-item-heading"><i data-toggle="tooltip" class="fa fa-bell" data-title="Belum dibaca" data-original-title="" title=""></i> Status Order #4893160 (<small>19/07/2023 10:32:10</small>)</h5>
                <p class="list-group-item-text">*Alhamdulillah* Trx Telkomsel Pulsa 35rb 082146685982 SUKSES.<br>
SN/TOKEN:  *03121500000476470155* <br>
 dari thunderrider</p>
              </a>
                            <a href="https://polarispulsa.com/akun/notifikasi/read/1481807" class="list-group-item">
                <h5 class="list-group-item-heading"><i data-toggle="tooltip" class="fa fa-bell" data-title="Belum dibaca" data-original-title="" title=""></i> Status Order #4893160 (<small>19/07/2023 10:32:01</small>)</h5>
                <p class="list-group-item-text">Pembayaran trx #4893160 Telkomsel - Pulsa 35rb sudah kami terima dan sedang kami proses.</p>
              </a>
                            <a href="https://polarispulsa.com/akun/notifikasi/read/1474086" class="list-group-item">
                <h5 class="list-group-item-heading"><i data-toggle="tooltip" class="fa fa-bell" data-title="Belum dibaca" data-original-title="" title=""></i> Status Order #4889650 (<small>17/07/2023 19:33:09</small>)</h5>
                <p class="list-group-item-text">*Alhamdulillah* Trx PLN Prabayar SPESIAL PLN 100.000 86046008537 SUKSES.<br>
SN/TOKEN:  *0046-2993-9629-0332-6844/EDDY HARTONO/R2/3500/53.50* <br>
 dari thunderrider</p>
              </a>
                            <a href="https://polarispulsa.com/akun/notifikasi/read/1474084" class="list-group-item">
                <h5 class="list-group-item-heading"><i data-toggle="tooltip" class="fa fa-bell" data-title="Belum dibaca" data-original-title="" title=""></i> Status Order #4889650 (<small>17/07/2023 19:33:02</small>)</h5>
                <p class="list-group-item-text">Pembayaran trx #4889650 PLN Prabayar - SPESIAL PLN 100.000 sudah kami terima dan sedang kami proses.</p>
              </a>
                            <a href="https://polarispulsa.com/akun/notifikasi/read/1442440" class="list-group-item">
                <h5 class="list-group-item-heading"><i data-toggle="tooltip" class="fa fa-bell" data-title="Belum dibaca" data-original-title="" title=""></i> Status Order #4875205 (<small>11/07/2023 19:24:10</small>)</h5>
                <p class="list-group-item-text">*Alhamdulillah* Trx PLN Prabayar SPESIAL PLN 100.000 86046008537 SUKSES.<br>
SN/TOKEN:  *5511-5390-2994-0293-8210/EDDY HARTONO/R2/3500/53.50* <br>
 dari thunderrider</p>
              </a>
                            <a href="https://polarispulsa.com/akun/notifikasi/read/1442436" class="list-group-item">
                <h5 class="list-group-item-heading"><i data-toggle="tooltip" class="fa fa-bell" data-title="Belum dibaca" data-original-title="" title=""></i> Status Order #4875205 (<small>11/07/2023 19:24:07</small>)</h5>
                <p class="list-group-item-text">Pembayaran trx #4875205 PLN Prabayar - SPESIAL PLN 100.000 sudah kami terima dan sedang kami proses.</p>
              </a>
                            <a href="https://polarispulsa.com/akun/notifikasi/read/1374731" class="list-group-item">
                <h5 class="list-group-item-heading"><i data-toggle="tooltip" class="fa fa-bell" data-title="Belum dibaca" data-original-title="" title=""></i> Status Order #4844480 (<small>29/06/2023 22:28:15</small>)</h5>
                <p class="list-group-item-text">*SELAMAT HARI RAYA IDUL ADHA* | Selamat!! PLN Prabayar SPESIAL PLN 100.000 86046008537 SUKSES.<br>
SN/TOKEN: 2893-1786-7347-7466-7701/EDDY HARTONO/R2/3500/53.50<br>
 dari thunderrider</p>
              </a>
                            <a href="https://polarispulsa.com/akun/notifikasi/read/1374729" class="list-group-item">
                <h5 class="list-group-item-heading"><i data-toggle="tooltip" class="fa fa-bell" data-title="Belum dibaca" data-original-title="" title=""></i> Status Order #4844480 (<small>29/06/2023 22:28:06</small>)</h5>
                <p class="list-group-item-text">Pembayaran trx #4844480 PLN Prabayar - SPESIAL PLN 100.000 sudah kami terima dan sedang kami proses.</p>
              </a>
                            <a href="https://polarispulsa.com/akun/notifikasi/read/1363093" class="list-group-item">
                <h5 class="list-group-item-heading"><i data-toggle="tooltip" class="fa fa-bell" data-title="Belum dibaca" data-original-title="" title=""></i> Status Order #4839171 (<small>27/06/2023 20:28:01</small>)</h5>
                <p class="list-group-item-text">*SEGERA UPDATE APK KE VERSI TERBARU* | Selamat!! PLN Prabayar SPESIAL PLN 50.000 86046008537 SUKSES.<br>
SN/TOKEN: 4314-7057-6407-7939-1979/EDDY HARTONO/R2/3500 VA/26.8<br>
 dari thunderrider</p>
              </a>
                            <a href="https://polarispulsa.com/akun/notifikasi/read/1363091" class="list-group-item">
                <h5 class="list-group-item-heading"><i data-toggle="tooltip" class="fa fa-bell" data-title="Belum dibaca" data-original-title="" title=""></i> Status Order #4839171 (<small>27/06/2023 20:27:56</small>)</h5>
                <p class="list-group-item-text">Pembayaran trx #4839171 PLN Prabayar - SPESIAL PLN 50.000 sudah kami terima dan sedang kami proses.</p>
              </a>
                            <a href="https://polarispulsa.com/akun/notifikasi/read/1333750" class="list-group-item">
                <h5 class="list-group-item-heading"><i data-toggle="tooltip" class="fa fa-bell" data-title="Belum dibaca" data-original-title="" title=""></i> Status Order #4825875 (<small>22/06/2023 17:32:03</small>)</h5>
                <p class="list-group-item-text">*SEGERA UPDATE APK KE VERSI TERBARU* | Selamat!! PLN Prabayar SPESIAL PLN 100.000 86046008537 SUKSES.<br>
SN/TOKEN: 5460-2715-6568-9336-7928/EDDY HARTONO/R2/3500/53.50<br>
 dari thunderrider</p>
              </a>
                            <a href="https://polarispulsa.com/akun/notifikasi/read/1333748" class="list-group-item">
                <h5 class="list-group-item-heading"><i data-toggle="tooltip" class="fa fa-bell" data-title="Belum dibaca" data-original-title="" title=""></i> Status Order #4825875 (<small>22/06/2023 17:31:59</small>)</h5>
                <p class="list-group-item-text">Pembayaran trx #4825875 PLN Prabayar - SPESIAL PLN 100.000 sudah kami terima dan sedang kami proses.</p>
              </a>
                            <a href="https://polarispulsa.com/akun/notifikasi/read/1321784" class="list-group-item">
                <h5 class="list-group-item-heading"><i data-toggle="tooltip" class="fa fa-bell" data-title="Belum dibaca" data-original-title="" title=""></i> Status Order #4820410 (<small>20/06/2023 15:36:07</small>)</h5>
                <p class="list-group-item-text">*SEGERA UPDATE APK KE VERSI TERBARU* | Selamat!! PLN Prabayar SPESIAL PLN 50.000 86046008537 SUKSES.<br>
SN/TOKEN: 0103-7591-6985-6915-9511/EDDY-HARTONO/R2/3500/26,80.<br>
 dari thunderrider</p>
              </a>
                            <a href="https://polarispulsa.com/akun/notifikasi/read/1321780" class="list-group-item">
                <h5 class="list-group-item-heading"><i data-toggle="tooltip" class="fa fa-bell" data-title="Belum dibaca" data-original-title="" title=""></i> Status Order #4820410 (<small>20/06/2023 15:36:02</small>)</h5>
                <p class="list-group-item-text">Pembayaran trx #4820410 PLN Prabayar - SPESIAL PLN 50.000 sudah kami terima dan sedang kami proses.</p>
              </a>
                            <a href="https://polarispulsa.com/akun/notifikasi/read/1281243" class="list-group-item">
                <h5 class="list-group-item-heading"><i data-toggle="tooltip" class="fa fa-bell" data-title="Belum dibaca" data-original-title="" title=""></i> Status Order #4801941 (<small>13/06/2023 09:18:08</small>)</h5>
                <p class="list-group-item-text">*SEGERA UPDATE APK KE VERSI TERBARU* | Selamat!! PLN Prabayar SPESIAL PLN 100.000 86046008537 SUKSES.<br>
SN/TOKEN: 6813-0477-5757-0068-5810/EDDY HARTONO/R2/3500/53.50<br>
 dari thunderrider</p>
              </a>
                            <a href="https://polarispulsa.com/akun/notifikasi/read/1281239" class="list-group-item">
                <h5 class="list-group-item-heading"><i data-toggle="tooltip" class="fa fa-bell" data-title="Belum dibaca" data-original-title="" title=""></i> Status Order #4801941 (<small>13/06/2023 09:18:03</small>)</h5>
                <p class="list-group-item-text">Pembayaran trx #4801941 PLN Prabayar - SPESIAL PLN 100.000 sudah kami terima dan sedang kami proses.</p>
              </a>
                            <a href="https://polarispulsa.com/akun/notifikasi/read/1232902" class="list-group-item">
                <h5 class="list-group-item-heading"><i data-toggle="tooltip" class="fa fa-bell" data-title="Belum dibaca" data-original-title="" title=""></i> Status Order #4779995 (<small>04/06/2023 17:11:09</small>)</h5>
                <p class="list-group-item-text">*SEGERA UPDATE APK KE VERSI TERBARU* | Selamat!! PLN Prabayar SPESIAL PLN 100.000 86046008537 SUKSES.<br>
SN/TOKEN: 1439-3812-6261-9010-8738/EDDY HARTONO/R2/3500/53.50<br>
 dari thunderrider</p>
              </a>
                            <a href="https://polarispulsa.com/akun/notifikasi/read/1232896" class="list-group-item">
                <h5 class="list-group-item-heading"><i data-toggle="tooltip" class="fa fa-bell" data-title="Belum dibaca" data-original-title="" title=""></i> Status Order #4779995 (<small>04/06/2023 17:11:04</small>)</h5>
                <p class="list-group-item-text">Pembayaran trx #4779995 PLN Prabayar - SPESIAL PLN 100.000 sudah kami terima dan sedang kami proses.</p>
              </a>
                            <a href="https://polarispulsa.com/akun/notifikasi/read/1172116" class="list-group-item">
                <h5 class="list-group-item-heading"><i data-toggle="tooltip" class="fa fa-bell" data-title="Belum dibaca" data-original-title="" title=""></i> Status Order #4752436 (<small>25/05/2023 07:04:11</small>)</h5>
                <p class="list-group-item-text">*SEGERA UPDATE APK KE VERSI TERBARU* | Selamat!! PLN Prabayar SPESIAL PLN 100.000 86046008537 SUKSES.<br>
SN/TOKEN: 3796-9592-8252-0035-7850/EDDY HARTONO/R2/3500/53.50<br>
 dari thunderrider</p>
              </a>
                            <a href="https://polarispulsa.com/akun/notifikasi/read/1172112" class="list-group-item">
                <h5 class="list-group-item-heading"><i data-toggle="tooltip" class="fa fa-bell" data-title="Belum dibaca" data-original-title="" title=""></i> Status Order #4752436 (<small>25/05/2023 07:04:07</small>)</h5>
                <p class="list-group-item-text">Pembayaran trx #4752436 PLN Prabayar - SPESIAL PLN 100.000 sudah kami terima dan sedang kami proses.</p>
              </a>
                          </div>
          </div>
          
                </div>
            </div>
        </div>
    </div>
</div>