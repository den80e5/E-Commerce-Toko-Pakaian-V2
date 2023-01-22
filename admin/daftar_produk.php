    <!--main content -->
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary float-left">Daftar Produk</h6>
                            <a href="index.php?halaman=tambah_produk" class = "btn btn-primary btn-sm float-right">Tambah Produk</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width: 25px;">No</th>
                                            <th>Nama Produk</th>
                                            <th>Harga</th>
                                            <th>Berat</th>
                                            <th>Stok</th>
                                            <th>Deskripsi</th>
                                            <th style="width: 125px;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th style="width: 25px;">No</th>
                                            <th>Nama Produk</th>
                                            <th>Harga</th>
                                            <th>Berat</th>
                                            <th>Stok</th>
                                            <th>Deskripsi</th>
                                            <th style="width: 125px;">Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $nomor=1; ?>
                                        <?php $ambil=$koneksi->query("SELECT * FROM produk"); ?>
                                        <?php while($pecah = $ambil -> fetch_assoc()){ ?>
                                        <tr>
                                            <td><?php echo $nomor; ?></td>
                                            <td class="align-middle text-left"><div class="float-left"><img src="../foto_produk/<?php echo $pecah['foto_produk']; ?>" style="margin-right: 35px;" width="100"></div><div class="text-primary font-weight-bold"><p><?php echo $pecah['nama_produk']; ?></p><p class="text-info font-weight-light"><?php echo $pecah['kategori']; ?></p></div></td>
                                            <td><?php echo number_format($pecah['harga_produk']);?></td>
                                            <td><?php echo $pecah['berat_produk']; ?></td>
                                            <td>61</td>
                                            <td>Belum Beres</td>
                                            <td>
                                                <a href="index.php?halaman=hapus_produk&id=<?php echo $pecah['id_produk']; ?>" class="btn-danger btn mt-2 col-lg-12">Hapus </a>
                                                <a href="index.php?halaman=ubah_produk&id=<?php echo $pecah['id_produk'];?>" class="btn btn-info mt-2 col-lg-12">Ubah </a>
                                            </td>
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