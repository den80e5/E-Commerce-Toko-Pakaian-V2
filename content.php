<!-- sidebar -->
<!--main content -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <?php $ambil = $koneksi->query("SELECT * FROM produk ORDER BY RAND()"); ?>
            <?php while($perproduk = $ambil->fetch_assoc()){ ?>
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body"> 
                            <img src="foto_produk/<?php echo $perproduk['foto_produk'];?>" alt="" class="img-thumbnail" style="width: 100%; height: 370px; object-fit: contain;">
                            <div class="row no-gutters align-items-center mt-3">
                                <div class="col mr-2">
                                    <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                        <?php echo $perproduk['nama_produk'];?>
                                    </div>
                                    <div class="text-sm text-info mb-1">
                                        <?php echo $perproduk['kategori'];?>
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.
                                        <?php echo number_format($perproduk['harga_produk']);?>
                                    </div>
                                </div>
                                <div class="col-auto"> <i class="fas fa-calendar fa-2x text-gray-300"></i> </div>
                            </div>
                            <br/>
                            <a href="index.php?halaman=beli&id=<?php echo $perproduk['id_produk'];?>" class="btn btn-info btn-icon-split mb-2"> <span class="icon text-white-50">
                                            <i class="fas fa-cart-plus"></i>
                                        </span> <span class="text">Tambah ke Keranjang</span> </a>
                            <a href="index.php?halaman=detail&id=<?php echo $perproduk['id_produk'];?>" class="btn btn-success btn-icon-split mb-2 float-right"> <span class="icon text-white-50">
                                            <i class="fas fa-info-circle"></i>
                                        </span> <span class="text">Detail</span> </a>
                        </div>
                    </div>
                </div>
                <?php }?>
    </div>
    <!-- End Content Row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->