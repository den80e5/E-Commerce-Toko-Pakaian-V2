<?php
session_start();
$id_produk = $_GET["id"];
$ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
$detail=$ambil->fetch_assoc();
?>
				<div class="container-fluid">
					<!-- Content Row -->
					<div class="row justify-content-center">
						<div class="col-xl-10 col-lg-12 col-md-9">
							<div class="card o-hidden border-0 shadow-lg my-5">
								<div class="card-body p-7">
									<!-- Nested Row within Card Body -->
									<div class="row">
										<div class="col-lg-4 left-side-product-box pb-3"> <img src="foto_produk/<?php echo $detail["foto_produk"]; ?>" class="border p-3" style="width: 100%; height: 370px; object-fit: contain;"> </div>
										<div class="col-lg-8">
											<div class="right-side-pro-detail border p-3 m-0">
												<div class="row">
													<div class="col-lg-12">
														<p class="m-0 p-0">
															<?php echo $detail["nama_produk"]?>
														</p>
													</div>
													<div class="col-lg-12">
														<p class="m-0 p-0 price-pro">Rp.
															<?php echo number_format($detail["harga_produk"]); ?>
														</p>
														<hr class="p-0 m-0"> </div>
													<div class="col-lg-12 pt-2">
														<h5>Product Detail</h5> <span><?php echo $detail["deskripsi_produk"]; ?></span>
														<hr class="m-0 pt-2 mt-2"> </div>
													<div class="col-lg-12">
														<p class="tag-section"><strong>Kategori : </strong><a href="index.php?halaman=content_<?php echo $detail['kategori'];?>"><?php echo $detail['kategori'];?></a></p>
													</div>
													<div class="col-lg-12">
														<h6>Jumlah Barang :</h6>
														<form method="post">
															<div class="form-group">
																<div class="input-group">
																	<input type="number" min="1" class="form-control text-center w-100" name="jumlah" value="1">
																	<div class="input-group-btn mt-3 col-lg-6 pb-2">
																		<button class="btn btn-danger w-100" name="keranjang">Tambah Ke Keranjang</button>
																	</div>
																	<div class="input-group-btn mt-3 col-lg-6">
																		<button class="btn btn-success w-100" name="checkout">Beli Sekarang</button>
																	</div>
																</div>
															</div>
														</form>
										<?php if (isset($_POST["keranjang"])) {
											$jmlkrj = $_POST["jumlah"];
											$_SESSION["keranjang"] [$id_produk] = $jmlkrj;
											echo "<script>alert('Produk telah masuk ke keranjang belanja');</script>";
											echo "<script>location = 'index.php?halaman=keranjang';</script>";

										}elseif (isset($_POST["checkout"])) {
											$jmlchk = $_POST["jumlah"];
											$_SESSION["checkout"] [$id_produk] = $jmlchk;
											echo "<script>location = 'index.php?halaman=keranjang';</script>";
										} ?>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12 text-center pt-3">
											<h4>More Product</h4> </div>
									</div>


	<div class="row">
		<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner">
				<?php $ambil = $koneksi->query("SELECT * FROM produk ORDER BY RAND() LIMIT 20"); ?>
				<?php while($moreprdk = $ambil->fetch_assoc()){ ?>
                <div class="item">
                    <div class="pad15">
                    	<a href="index.php?halaman=detail&id=<?php echo $moreprdk['id_produk'];?>"><img src="foto_produk/<?php echo $moreprdk['foto_produk'];?>" alt="" class="img-thumbnail" style="width: 100%; height: 275px; object-fit: contain;"></a>
                        
                    </div>
                </div>
                <?php }?>
            </div>
            <button class="btn btn-primary leftLst"><</button>
            <button class="btn btn-primary rightLst">></button>
        </div>
	</div>
	<div class="row">

									
								</div>
							</div>
						</div>
					</div>
				</div>