<?php
session_start();
if(!isset($_SESSION["pelanggan"]))
{
    echo "<script>alert('Silahkan Login');</script>";
    echo "<script>location = 'index.php?halaman=login';</script>"; 
}
?>
                <!--main content -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Content Row -->
                    <div class="card shadow mb-4">
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
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th style="width: 25px;">No</th>
                                            <th>Produk</th>
                                            <th>Harga Satuan</th>
                                            <th>Kuantitas</th>
                                            <th>Total Harga</th>
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
                                            <td class="align-middle text-left"><img src="foto_produk/<?php echo $pecah['foto_produk']; ?>" style="margin-right: 35px;" width="100"><?php echo $pecah['nama_produk']; ?></td>
                                            <td class="align-middle"><?php echo number_format($pecah["harga_produk"]);?></td>
                                            <td class="align-middle"><?php echo $jumlah; ?></td>
                                            <td class="align-middle"><?php echo number_format($subharga); ?></td>
                                        </tr>
                                        <?php $nomor++; ?>
                                        <?php $totalbelanja+=$subharga; ?>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                                <input class="form-control text-center mt-2 mb-3" type="text" placeholder="Total Harga Rp. <?php echo number_format($totalbelanja) ?>" readonly>
                            </div>


                <form method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" readonly value="<?php echo $_SESSION["pelanggan"]['nama_pelanggan'] ?>" class="form-control"> </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" readonly value="<?php echo $_SESSION["pelanggan"]['telepon_pelanggan']?>" class="form-control"> </div>
                        </div>
                        <div class="col-md-4">
                            <select class="form-control" name="id_ongkir" required="">
                                <option value="">Pilih Ongkos kirim</option>
                                <?php
                                $ambil = $koneksi->query("SELECT * FROM ongkir");
                                while($perongkir = $ambil->fetch_assoc()){ ?>
                                    <option value="<?php echo $perongkir["id_ongkir"]?>">
                                        <?php echo $perongkir['nama_kota'] ?> Rp.
                                        <?php echo number_format($perongkir['tarif']) ?>
                                    </option>
                                    <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Alamat lengkap pengirim</label>
                        <textarea class="form-control" name="alamt_pengiriman" placeholder="masukan alamat lengkap(Kode pos)" required=""></textarea>
                        <button class="btn btn-info btn-sm btn-block mt-3" name="checkout">Bayar Sekarang</button>
                </form>
                                <?php

                 ?>
                <?php

                if(isset($_POST["checkout"]))
                {
                    $id_pelanggan = $_SESSION["pelanggan"]["id_pelanggan"];
                    $id_ongkir = $_POST["id_ongkir"];
                    $tanggal_pembelian = date("Y-m-d");
                    $alamt_pengiriman = $_POST['alamt_pengiriman'];


                    $ambilongkir = $koneksi->query("SELECT * FROM ongkir WHERE id_ongkir ='$id_ongkir'");
                    $arrayongkir = $ambilongkir->fetch_assoc();
                    $nama_kota = $arrayongkir['nama_kota'];
                    $tarif = $arrayongkir['tarif'];

                    $total_pembelian = $totalbelanja + $tarif;
                    $koneksi->query("INSERT INTO pembelian (id_pelanggan,id_ongkir,tanggal_pembelian,total_pembelian,nama_kota,tarif,alamt_pengiriman) VALUES ('$id_pelanggan','$id_ongkir','$tanggal_pembelian','$total_pembelian','$nama_kota','$tarif','$alamt_pengiriman')");

                    $id_pembelian_barusan = $koneksi->insert_id;
                    foreach ($_SESSION["keranjang"] as $id_produk => $jumlah) 
                    {

                        $ambilprdk=$koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
                        $perproduk = $ambilprdk->fetch_assoc();
                        $nama=$perproduk['nama_produk'];
                        $harga=$perproduk['harga_produk'];
                        $berat=$perproduk['berat_produk'];

                        $subberat = $perproduk['berat_produk']*$jumlah;
                        $subharga = $perproduk['harga_produk']*$jumlah;

                        $koneksi->query("INSERT INTO pembelian_produk (id_pembelian,id_produk,jumlah,nama,harga,berat,subberat,subharga) VALUES ('$id_pembelian_barusan','$id_produk','$jumlah','$nama','$harga','$berat','$subberat','$subharga')");
                    }
                    unset($_SESSION["keranjang"]);


                    echo "<script>alert('pembelian sukses');</script>";
                    echo "<script>location = 'index.php?halaman=nota&id=$id_pembelian_barusan';</script>"; 
                    
                }
                ?>
                        </div>

                    <!-- End Content Row -->
                </div>
                <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->