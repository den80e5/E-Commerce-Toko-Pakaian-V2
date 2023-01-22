    <!--main content -->
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Pelanggan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width: 25px;">No</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Email</th>
                                            <th>Telp/Hp</th>
                                            <th>Alamat</th>
                                            <th style="width: 180px;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th style="width: 25px;">No</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Email</th>
                                            <th>Telp/Hp</th>
                                            <th>Alamat</th>
                                            <th style="width: 180px;">Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $nomor=1; ?>
                                        <?php $ambil=$koneksi->query("SELECT * FROM pelanggan"); ?>
                                        <?php while ($pecah = $ambil->fetch_assoc()){ ?>
                                        <tr>
                                            <td><?php echo $nomor; ?></td>
                                            <td><?php echo $pecah['nama_pelanggan']; ?></td>
                                            <td><?php echo $pecah['email_pelanggan']; ?></td>
                                            <td><?php echo $pecah['telepon_pelanggan']; ?></td>
                                            <td><?php echo $pecah['alamt_pelanggan']; ?></td>
                                            <td><a href="index.php?halaman=hapus_pelanggan&id=<?php echo $pecah['id_pelanggan']; ?>" class="btn btn-danger col-lg-12">Hapus Akun Pelanggan </a></td>
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