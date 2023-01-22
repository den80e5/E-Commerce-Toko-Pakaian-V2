<?php session_start()?>
				<!--main content -->
				<!-- Begin Page Content -->
				<div class="container-fluid">
					<!-- Content Row -->
					<div class="row justify-content-center">
						<div class="col-xl-10 col-lg-12 col-md-9">
							<div class="card o-hidden border-0 shadow-lg my-5">
								<div class="card-body p-0">
									<!-- Nested Row within Card Body -->
									<div class="row">
										<div class="col-lg-6 d-none d-lg-block">
											<div class="text-center mt-5 ml-4">
												<div class="error mx-auto mt-5" style="color: #af75c4; font-size: 2rem; width: 12.0rem;" data-text="KELOMPOK2">KELOMPOK2</div>
												<hr>
												<p class="lead text-gray-800"> Cahyana</p>
												<p class="text-gray-500"> NIM : A2.1900029 KELAS : TI-4B</p>
												<hr>
												<p class="lead text-gray-800"> Deni Anggara</p>
												<p class="text-gray-500"> NIM : A2.1900042 KELAS : TI-4B</p>
												<hr>
												<p class="lead text-gray-800"> Gilang Erlangga Kurnia Ardi</p>
												<p class="text-gray-500"> NIM : A2.1900072 KELAS : TI-4B</p>
												<hr>
												<p class="lead text-gray-800"> Teddy Septian</p>
												<p class="text-gray-500"> NIM : A2.1900179 KELAS : TI-4B</p>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="p-5">
												<div class="text-center">
													<h1 class="h4 text-gray-900 mb-4">Daftar Akun Pengguna Baru</h1> </div>
												<form method="post">
													<div class="input-group mb-3">
														<div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1">👤</span> </div>
														<input type="text" class="form-control" placeholder="Nama Lengkap" aria-label="Username" aria-describedby="basic-addon1" name="nama" required=""> </div>
													<div class="input-group mb-3">
														<div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span> </div>
														<input type="email" class="form-control" placeholder="Email Anda" aria-label="Email" aria-describedby="basic-addon1" name="email" required=""> </div>
													<div class="input-group mb-3">
														<div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1">🔒</span> </div>
														<input type="password" class="form-control" placeholder="Kata Sandi" aria-label="Password" aria-describedby="basic-addon1" name="password" required=""> </div>
													<div class="input-group mb-3">
														<div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1">📍</span> </div>
														<input type="text" class="form-control" placeholder="Alamat Lengkap" aria-label="Alamat" aria-describedby="basic-addon1" name="alamat" required=""> </div>
													<div class="input-group mb-3">
														<div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1">📞</span> </div>
														<input type="text" class="form-control" placeholder="No Telp/Hp" aria-label="Password" aria-describedby="basic-addon1" name="telepon" required=""> </div>
													<button type="submit" class="btn btn-success btn-sm btn-block" name="daftar">Buat Akun Baru</button>
												</form>
												<?php

							if(isset($_POST["daftar"]))
							{

								$nama = $_POST["nama"];
								$email = $_POST["email"];
								$password = $_POST["password"];
								$alamat = $_POST["alamat"];
								$telepon = $_POST["telepon"];

								$ambil = $koneksi->query("SELECT * FROM pelanggan 
									WHERE email_pelanggan='$email'");
								$yangcocok = $ambil->num_rows;
								if ($yangcocok==1)
								{
									echo "<script>alert('Pendaftaran gagal, email sudah digunakan');</script>";
									echo "<script>location = 'index.php?halaman=register';</script>"; 
									
								}
								else
								{
									$koneksi->query("INSERT INTO pelanggan(email_pelanggan,password_pelanggan,nama_pelanggan,telepon_pelanggan,alamt_pelanggan) VALUES ('$email','$password','$nama','$telepon','$alamat') ");
									echo "<script>alert('Pendaftaran sukses, silahkan login');</script>";
									echo "<script>location = 'index.php?halaman=login';</script>"; 

								}
							}

							?>
													<hr>
													<div class="text-center"> Sudah Punya Akun ? <a href="index.php?halaman=login">Klik disini </a> </div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Content Row -->
				</div>
				<!-- /.container-fluid -->
				</div>
				<!-- End of Main Content -->