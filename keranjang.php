<?php
session_start();
if(empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"]))
{
    echo "<script>alert('Keranjang kosong, Silahkan belanja');</script>";
    echo "<script>location = 'index.php';</script>"; 
}

?>
                <!--main content -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary float-left">Keranjang Belanja</h6> 
                            <div class="float-right">
                            <a href="index.php" class="btn btn-info btn-sm">Lanjutkan Belanja</a> 
                            <a href="index.php?halaman=checkout" class="btn btn-primary btn-sm">Checkout</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width: 25px;">No</th>
                                            <th>Produk</th>
                                            <th>Harga Satuan</th>
                                            <th>Kuantitas</th>
                                            <th>Total Harga</th>
                                            <th style="width: 180px;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th style="width: 25px;">No</th>
                                            <th>Produk</th>
                                            <th>Harga Satuan</th>
                                            <th>Kuantitas</th>
                                            <th>Total Harga</th>
                                            <th style="width: 180px;">Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $nomor=1; ?>
                                    <?php $totalbelanja = 0; ?>
                                    <?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah):?>
                                    <!-- Menampilkan yang sedang di perulangkan berdasarkan id produk -->
                                    <?php
                                    $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
                                    $pecah = $ambil->fetch_assoc();
                                    $subharga = $pecah ["harga_produk"]*$jumlah;?>
                                        <tr>
                                            <td><?php echo $nomor; ?></td>
                                            <td class="align-middle text-left"><div class="float-left"><img src="foto_produk/<?php echo $pecah['foto_produk']; ?>" style="margin-right: 35px;" width="100"></div><div class="text-primary font-weight-bold"><p><?php echo $pecah['nama_produk']; ?></p><p class="text-info font-weight-light"><?php echo $pecah['kategori']; ?></p></div></td>
                                            <td class="align-middle"><?php echo number_format($pecah["harga_produk"]);?></td>
                                            <td class="align-middle"><?php echo $jumlah; ?></td>
                                            <td class="align-middle"><?php echo number_format($subharga); ?></td>
                                            <td class="align-middle"><a href="index.php?halaman=hapus_keranjang&id=<?php echo $id_produk ?>" class="btn btn-danger col-lg-12">Hapus Produk</a></td>
                                        </tr>
                                        <?php $nomor++; ?>
                                        <?php $totalbelanja+=$subharga; ?>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                                <input class="form-control text-center mt-2" type="text" placeholder="Total Harga Rp. <?php echo number_format($totalbelanja) ?>" readonly>
                            </div>
                        </div>
                    <!-- End Content Row -->
                </div>
                <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->


