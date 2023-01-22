 <?php 
session_start();
$ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan WHERE pembelian.id_pembelian='$_GET[id]'");
$detail = $ambil->fetch_assoc();
 ?>

    <!--main content -->
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Produk Yang Dibeli Pelanggan</h6>
                        </div>
                        <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" readonly value="<?php echo $detail['nama_pelanggan']; ?>" class="form-control"> </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" readonly value="<?php echo $detail['telepon_pelanggan']; ?>" class="form-control"> </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" readonly value="<?php echo $detail ['email_pelanggan']; ?>" class="form-control"> </div>
                        </div>
                    </div>

                           <textarea class="form-control text-center mb-3" readonly="" name="alamt_pengiriman" placeholder="">
Tanggal Pembelian : <?php echo $detail['tanggal_pembelian']; ?>

Total Pembayaran : <?php echo number_format($detail['total_pembelian']); ?> 
                           </textarea>

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width: 25px;">No</th>
                                            <th>Produk</th>
                                            <th>Alamat</th>
                                            <th>Tanggal Pembelian</th>
                                            <th>Total Pembayaran</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th style="width: 25px;">No</th>
                                            <th>Produk</th>
                                            <th>Alamat</th>
                                            <th>Tanggal Pembelian</th>
                                            <th>Total Pembayaran</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $nomor=1; ?>
                                        <?php $ambil=$koneksi->query("SELECT * FROM pembelian_produk JOIN produk ON pembelian_produk.id_produk
                                        WHERE pembelian_produk.id_pembelian='$_GET[id]'"); ?>
                                        <?php while($pecah=$ambil->fetch_assoc()){ ?>
                                        <tr>
                                            <td><?php echo $nomor; ?></td>
                                            <td class="align-middle text-left"><div class="float-left"><img src="foto_produk/<?php echo $pecah['foto_produk']; ?>" style="margin-right: 35px;" width="100"></div><div class="text-primary font-weight-bold"><p><?php echo $pecah['nama_produk']; ?></p><p class="text-info font-weight-light"><?php echo $pecah['kategori']; ?></p></div></td>
                                            <td><?php echo number_format($pecah['harga_produk']);?></td>
                                            <td><?php echo $pecah['jumlah'];?></td>
                                            <td><?php echo number_format($pecah['harga_produk']*$pecah['jumlah']); ?></td>
                                        </tr>
                                        <?php $nomor++; ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                        <div class="alert alert-info text-center mt-2">
                                            <p>
                                                Silahkan melakukan pembayaran Rp. <?php echo number_format($detail['total_pembelian']); ?> ke <br>
                                                <strong>BANK BNI 09690233412 Kelompok 2</strong>
                                        </div>

                            </div>
                        </div>
                    </div>
            <!-- End Content Row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->