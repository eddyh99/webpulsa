
            <div class="col-12 col-lg-9">
                <div class="content-member p-3">
                    <div class="col-sm-8 col-md-9">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5>
                                    <i class="fa-solid fa-money-bill-wave fs-4 ms-2"></i> Deposit
                                </h5>
                            </div>
                            <div style="margin: 15px;">
                                <form action="#" method="post">                                                               
                                    <input type="hidden" name="csrf_token">
                                    <div class="row">
                                        <div class="col-sm-4 col-md-3 form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon bg-secondary px-3 py-1">Rp</span>
                                                <input class="form-control" type="number" name="amount" id="amount" maxlength="12" value="" required="required" data-toggle="tooltip" data-title="Jumlah Deposit" placeholder="10000" min="10000" max="7000000" data-original-title="" title="">
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-md-6 form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon bg-secondary px-3 py-1">
                                                    <i class="fa fa-credit-card"></i>
                                                </span>
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
                                        <div class="col-sm-3 col-md-3 form-group">
                                            <button class="btn btn-primary btn-block" type="submit" name="submit" value="deposit">
                                                <i class="fa fa-plus"></i>
                                                 Deposit
                                            </button>
                                        </div>
                                        <div class="col-xs-12">
                                            <i class="fs-6 text-secondary">Minimal 10.000, maksimal 7.000.000, dan harus kelipatan 10.000</i>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="alert alert-primary" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <center>
                                            <i class="fa fa-info-circle"></i> 
                                            <b>CASHABCAK 0,1%  </b>
                                        </center>
                                        <br>
                                        Dapatkan cashback 0,1% dengan deposit minimal Rp 1.000.000 cair jam 07:00 di hari berikutnya hanya berlaku untuk metode pembayaran transfer bank
                                    </div>
                                </form> 
                            </div>           
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
        </div>
    </div>
</section>