<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="panel status-order-wrapping">
                    <div class="status-order-header p-3 d-flex justify-content-between align-items-center">
                        <h5>
                            <i class="fa-solid fa-clock-rotate-left fs-4 me-2"></i>
                                Riwayat Transaksi Terbaru
                        </h5>
                        <span class="pull-right"><i class="fa fa-refresh fa-spin"></i></span>
                    </div>
                    <div>
                        <div class="alert alert-success" style="padding: 10px 15px; margin-bottom: 15px;">
                            <a class="close" onclick="this.parentElement.style.display='none';"><i class="fa fa-times-circle-o"></i></a>
                            <li>Untuk cek history transaksi member <strong><a href="/akun/riwayat-transaksi" target="_blank">Klik di sini</a></strong></li>
                            <li>Informasi Terbaru <strong><a href="https://t.me/s/polarisreload_info" target="_blank">Klik Disini</a></strong></li> 
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-sm-4">
                                <a href="https://polarispulsa.com/contact-us" target="_blank" class="btn btn-danger ">Komplain / Pertanyaan</a>
                            </div>
                            <div class="col-sm-4">
                                <a href="https://api.whatsapp.com/send?phone=6285641679183&amp;text=Hallo%20POLARIS, saya ingin komplain untuk pengisian Nomor HP di bawah ini" class="btn btn-success">Komplain / Pertanyaan Via WA</a>
                            </div>
                            <div class="col-sm-4">
                                <span class="pull-right">
                                    <form method="GET" action="https://polarispulsa.com/history">
                                    <div class="input-group">
                                        <input type="telp" class="form-control" placeholder="Cari no. telepon disini" name="q" id="q" value="" maxlength="15">
                                        <span class="input-group-btn">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-search">
                                            </i>
                                        </button>
                                        </span>
                                    </div>
                                    </form>
                                </span>
                            </div>
                        </div>
                        <marquee direction="left" onmouseover="this.stop()" onmouseout="this.start()" style="font-size:13px; color:#000000">Klik tanggal order untuk Melihat detail pesanan Anda </marquee>
                        <div class="table-responsive">
                                <!--pakai datatable aja-->
                            <table class="table table-bordered table-hover table-riwayat">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th style="width: 115px;">Tanggal</th>
                                    <th>Provider</th>
                                    <th>Produk</th>
                                    <th>No. Telepon</th>
                                    <th>Harga</th>
                                    <th>Pembayaran</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody id="history_transaksi">
                                    <tr>
                                        <td style="vertical-align: middle;">1</td>
                                        <td style="vertical-align: middle;"><a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4902002">22/07/2023 21:44:52</a></td>
                                        <td style="vertical-align: middle;">Telkomsel</td>
                                        <td style="vertical-align: middle;">Telkomsel 10rb (Promo)</td>
                                        <td style="vertical-align: middle;">0822362788199</td>
                                        <td class="text-left">Rp 10.425</td>
                                        <td style="vertical-align: middle;">VIRTUAL AKUN (GRATIS)</td>
                                        <td style="vertical-align: middle;"><span class="badge badge-inverse" style="width: 64px;" data-toggle="tooltip" data-title="Pesanan tidak berlaku, gagal melakukan pembayaran tepat waktu" data-original-title="" title="">EXPIRED</span></td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle;">2</td>
                                        <td style="vertical-align: middle;"><a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4898125">21/07/2023 11:28:45</a></td>
                                        <td style="vertical-align: middle;">Telkomsel</td>
                                        <td style="vertical-align: middle;">Pulsa 150rb</td>
                                        <td style="vertical-align: middle;">081255466517</td>
                                        <td class="text-left">Rp150.045</td>
                                        <td style="vertical-align: middle;">QRIS (S&amp;K BERLAKU)</td>
                                        <td style="vertical-align: middle;"><span class="badge badge-inverse" style="width: 64px;" data-toggle="tooltip" data-title="Pesanan tidak berlaku, gagal melakukan pembayaran tepat waktu" data-original-title="" title="">EXPIRED</span></td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle;">3</td>
                                        <td style="vertical-align: middle;"><a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4898119">21/07/2023 11:25:20</a></td>
                                        <td style="vertical-align: middle;">Telkomsel</td>
                                        <td style="vertical-align: middle;">Telkomsel 10rb SPESIAL</td>
                                        <td style="vertical-align: middle;">08223548290</td>
                                        <td class="text-left">Rp10.390</td>
                                        <td style="vertical-align: middle;">QRIS (S&amp;K BERLAKU)</td>
                                        <td style="vertical-align: middle;"><span class="badge badge-inverse" style="width: 64px;" data-toggle="tooltip" data-title="Pesanan tidak berlaku, gagal melakukan pembayaran tepat waktu" data-original-title="" title="">EXPIRED</span></td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle;">4</td>
                                        <td style="vertical-align: middle;"><a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4893160">19/07/2023 10:30:41</a></td>
                                        <td style="vertical-align: middle;">Telkomsel</td>
                                        <td style="vertical-align: middle;">Pulsa 35rb</td>
                                        <td style="vertical-align: middle;">082146685982</td>
                                        <td class="text-left">Rp 35.220</td>
                                        <td style="vertical-align: middle;">Bank BCA</td>
                                        <td style="vertical-align: middle;"><span class="badge badge-success" style="width: 64px;" data-toggle="tooltip" data-title="Transaksi berhasil" data-original-title="" title="">SUKSES</span></td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle;">5</td>
                                        <td style="vertical-align: middle;"><a href="https://polarispulsa.com/akun/riwayat-transaksi/view/4889650">17/07/2023 19:30:54</a></td>
                                        <td style="vertical-align: middle;">PLN Prabayar</td>
                                        <td style="vertical-align: middle;">SPESIAL PLN 100.000</td>
                                        <td style="vertical-align: middle;">082235406818</td>
                                        <td class="text-left">Rp 100.394</td>
                                        <td style="vertical-align: middle;">SeaBank (SESAMA)</td>
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
</section>