    <!--main content -->
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Invoice/Pembayaran</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width: 25px;">No</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Tanggal Pembelian</th>
                                            <th>Total Pembayaran</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th style="width: 25px;">No</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Tanggal Pembelian</th>
                                            <th>Total Pembayaran</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $nomor=1; ?>
                                        <?php $ambil=$koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan"); ?>
                                        <?php while ($pecah = $ambil->fetch_assoc()){ ?>
                                        <tr>
                                            <td><?php echo $nomor; ?></td>
                                            <td><?php echo $pecah['nama_pelanggan']; ?></td>
                                            <td><?php echo $pecah['alamt_pengiriman']; ?></td>
                                            <td><?php echo $pecah['tanggal_pembelian']; ?></td>
                                            <td><?php echo number_format($pecah['total_pembelian']); ?></td>
                                            <td class="text-center"><a href="index.php?halaman=detail_ygdibeli&id=<?php echo $pecah['id_pembelian']; ?>" class="btn btn-info col-lg-8">Detail Barang Yang Dibeli</a></td>
                                        </tr>
                                        <?php $nomor++; ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            <!-- End Content Row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->