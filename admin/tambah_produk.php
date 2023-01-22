    <!--main content -->
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <form method="post" enctype="multipart/form-data">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary float-left">Tambahkan Produk Baru</h6>
                <button class="btn btn-primary btn-sm float-right" name="save">Simpan Produk</button>
            </div>
            <div class="card-body">



    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Nama Produk</span>
      </div>
      <input type="text" class="form-control" aria-label="nama" name="nama" required="">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
      </div>
      <select class="custom-select" id="inputGroupSelect01" name="kategori" required="">
        <option selected>Pilih Kategori</option>
        <option value="Aksesoris">Aksesoris</option>
        <option value="Bag">Bag</option>
        <option value="Jacket">Jacket</option>
        <option value="Long Pants">Long Pants</option>
        <option value="Polo Shirt">Polo Shirt</option>
        <option value="Shoes">Shoes</option>
        <option value="Sweater">sweater</option>
        <option value="T-Shirt">T-Shirt</option>
      </select>
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Harga (Rp)</span>
      </div>
      <input type="number" class="form-control" aria-label="Harga" name="harga" required="">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Berat (Gr)</span>
      </div>
      <input type="number" class="form-control" aria-label="Berat" name="berat" required="">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Deskripsi</span>
      </div>
      <textarea class="form-control" name="deskripsi" rows="10" required=""></textarea>
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Foto</span>
      </div>
      <input type="file" class="form-control" aria-label="Foto" name="foto" required="">
    </div>
</form>
    <?php
    if (isset($_POST['save']))
    {
        $nama = $_FILES['foto']['name'];
        $lokasi = $_FILES['foto'] ['tmp_name'];
        move_uploaded_file($lokasi, "../foto_produk/".$nama);
        $koneksi->query("INSERT INTO produk
            (nama_produk,harga_produk,berat_produk,foto_produk,deskripsi_produk,kategori) VALUES ('$_POST[nama]','$_POST[harga]','$_POST[berat]','$nama','$_POST[deskripsi]','$_POST[kategori]')");
        echo "<div class='alert alert-info'>Data tersimpan</div>";
        echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";
    }
        ?>

            </div>
            </div>
            <!-- End Content Row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->