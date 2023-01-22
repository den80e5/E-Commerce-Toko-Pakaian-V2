<?php
$ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$pecah=$ambil->fetch_assoc();
?> 

    <!--main content -->
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <form method="post" enctype="multipart/form-data">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary float-left">Ubah Produk</h6>
                <button class="btn btn-primary btn-sm float-right" name="ubah">Simpan Perubahan</button>
            </div>
            <div class="card-body">



    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Nama Produk</span>
      </div>
      <input type="text" class="form-control" aria-label="nama" name="nama" value="<?php echo $pecah['nama_produk'];?>">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
      </div>
      <select class="custom-select" id="inputGroupSelect01" name="kategori">
        <option selected><?php echo $pecah['kategori'];?></option>
        <option value="Aksesoris">Aksesoris</option>
        <option value="Bag">Bag</option>
        <option value="Jacket">Jacket</option>
        <option value="Long Pants">Long Pants</option>
        <option value="Polo Shirt">Polo Shirt</option>
        <option value="Shoes">Shoes</option>
        <option value="Sweater">Sweater</option>
        <option value="T-Shirt">T-Shirt</option>
      </select>
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Harga (Rp)</span>
      </div>
      <input type="number" class="form-control" aria-label="Harga" name="harga" value="<?php echo $pecah['harga_produk'];?>">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Berat (Gr)</span>
      </div>
      <input type="number" class="form-control" aria-label="Berat" name="berat" value="<?php echo $pecah['berat_produk'];?>">
    </div>

    <div class="input-group mb-3 col-lg-8 p-0 float-left" style="height: 370px;">
      <div class="input-group-prepend">
        <span class="input-group-text">Deskripsi</span>
      </div>
      <textarea class="form-control" name="deskripsi" rows="10"><?php echo $pecah['deskripsi_produk']; ?></textarea>
    </div>

    <div class="input-group mb-3 ml-3 col-lg-3 p-0 float-right">
        <img src="../foto_produk/<?php echo $pecah['foto_produk']?>" style="width: 100%; height: 332px; object-fit: contain;">
      <div class="input-group-prepend">
        <span class="input-group-text">Ganti Foto</span>
      </div>
      <input type="file" class="form-control" aria-label="Ganti" name="foto">
    </div>
</form>
<?php
        if (isset($_POST['ubah']))
        
        {
            $namafoto=$_FILES ['foto']['name'];
            $lokasifoto=$_FILES ['foto'] ['tmp_name'];
            //Jika foto dirubah

            if (!empty($lokasifoto))
            {
                move_uploaded_file($lokasifoto, "../foto_produk/$namafoto");

                $koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',harga_produk='$_POST[harga]',berat_produk='$_POST[berat]',foto_produk='$namafoto',deskripsi_produk='$_POST[deskripsi]',kategori='$_POST[kategori]' WHERE id_produk='$_GET[id]'"); 
            }

            else
            {
                $koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',harga_produk='$_POST[harga]',berat_produk='$_POST[berat]',deskripsi_produk='$_POST[deskripsi]',kategori='$_POST[kategori]' WHERE id_produk='$_GET[id]'"); 
            }
                echo "<script>alert('Data produk telah diubah');</script>";
                echo "<script>location='index.php';</script>";

}
?>

            </div>
            </div>
            <!-- End Content Row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->