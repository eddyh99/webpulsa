<br><br><br><br>
<main class="mt-5">
    <section class="mt-5">
        <div class="row">
            <div class="col-sm-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3><i class="fa fa-list-alt"></i> Transaksi #<?=$detail->transaction_id?></h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                        <tbody>
                            <tr><td>Jenis Produk</td><td><?=$detail->jenis?></td></tr>
                            <tr><td>Jenis Paket</td><td><?=$detail->produk?></td></tr>
                            <tr><td>Nomor HP</td><td><?=substr($detail->receiver, 0, -3) . 'XXX';?></td></tr>
                            <tr><td>Harga</td><td>Rp <?=number_format($detail->price+$detail->pasar_cost+$detail->client_fee)?></td></tr>
                            <tr><td>Pembayaran</td><td><?=$detail->carabayar?></td></tr>
                            <tr><td>Tanggal Pembelian</td><td><?=date_format(date_create($detail->tgl),"d/m/Y H:i:s")?></td></tr>
                            <tr><td>Status Pembayaran</td><td><?php echo ($detail->status=="komplit")?"Sukses":$detail->status?></td></tr>
                            <tr><td>Status Pengisian</td><td><?php echo (empty($detail->trx_id))?"Pending":"Sukses"?></td></tr>
                        </tbody>
                        </table>
                    </div> 
                    <div class="panel-footer hidden-print">
                        <button type="button" id="komplain" class="btn btn-warning pull-right" style="margin-bottom: 15px;" data-original-title="" title=""><i class="fa fa-exclamation-circle"></i> Komplain</button>
                        <a href="https://api.whatsapp.com/send?phone=6285641679183&amp;text=Halo%20Polaris%0A%0AMohon%20Bantuannya%20Untuk%20ID%20Transaksi%204898093%0ANo%20Tujuan%2FID%20Pelanggan%20%3A%0AKendalanya%3A%0A%0ATerima%20Kasih" <span="" class="btn btn-success pull-center"><b> <i class="fa fa-whatsapp"></i> CS WA </b></a>
                        <a class="btn btn-default" href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; window.print();return false;"><i class="fa fa-print"></i> Print</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 hidden-print">
                <?php if ($detail->status!="komplit"){?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3><i class="fa fa-money"></i> Bayar dengan VIRTUAL AKUN (GRATIS)</h3>
                        </div>
                        <div class="panel-body" style="margin-bottom: 0;padding-bottom: 0;">
                            <div class="text-center"><img src="https://www.polarispulsa.com/assets/payments/va_bnc.png" class="img-thumbnail" style="margin: 0 auto;"></div>
                        </div>
                        <div class="panel-body">
                            <?php 
                                $finalprice=number_format($detail->price+$detail->pasar_cost+$detail->client_fee, 0, ',', '.');
                                $now=date("d/m/Y H:i:s");
                                $expired=date('d/m/Y H:i:s', strtotime($detail->tgl. ' + 3 hours'));
                                if ($now>$expired){?>
                                    <div class="alert alert-danger">Pembayaran belum diselesaikan dan pesanan sudah tidak berlaku lagi.</div>
                                <?php }else{?>
                                    <div class="alert alert-success">
                                        <h4 class="text-center"><strong>Silahkan transfer sejumlah</strong></h4>
                                        <h1 class="text-center"><font color="green"><strong>Rp <?=$finalprice?></strong></font></h1>
                                        <h4 class="text-center"><font color="red">Sebelum Kadaluarsa pada: <br><strong><?=$expired?></strong></font></h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tbody>
                                            <tr>
                                                <td><?=$detail->carabayar?></td>
                                                <td><?=$detail->payment?> <a class="copy" data-id="#bca" data-name="No. VA" href="#" data-toggle="tooltip" data-placement="bottom" data-title="Salin No. VA" data-original-title="" title=""><span class="badge badge-info"><i class="fas fa-copy"></i> Salin</span></a></td>
                                            </tr>
                                            <tr>
                                                <td>Atas Nama</td>
                                                <td><?=$detail->virtualname?></td>
                                            </tr>
                                            <tr>
                                                <td>Kode Unik</td>
                                                <td>Rp 115</td>
                                            </tr>
                                            <tr>
                                                <td>Total Harga</td>
                                                <td><font size="4" color="#085294"><strong>Rp <?=$finalprice?></strong>
                                                <a class="copy" data-id="#harga" data-name="Total Pembayaran" href="#" data-toggle="tooltip" data-placement="bottom" data-title="Salin Total Pembayaran" data-original-title="" title=""><button class="badge badge-warning"><i class="fa fa-copy"></i> Salin</button></a></font></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="alert alert-warning">
                                        <ul style="padding-left: 15px;">
                                            <li>Silakan lakukan pembayaran sebesar <font size="3" color="#085294"><strong>Rp <?=$finalprice?> (HARUS SAMA)</strong></font>.</li>
                                            <li>Silahkan tunggu 1-15 menit setelah transfer berhasil, Verifikasi pembayaran otomatis.</li>
                                            <li>Jika transfer tidak sesuai nominal menyebabkan sistem tidak proses verifikasi pembayaran</li>
                                            <li>Jika transfer saat bank offline akan diproses setelah online kembali</li>
                                            <li>Perlu Bantuan silahkan chat ke CS WA 085641679183 di jam kerja</li>
                                        </ul>
                                    </div>
                                <?php } ?>
                        </div>
                    </div>
                <?php }else{?>
                    <div class="alert alert-success">
                    <h3>Sukses</h3>Pembayaran sudah diselesaikan dengan menggunakan <?=$carabayar?>.
                    </div>                
                <?php }?>
            </div>
        </div>
    </section>
</main>