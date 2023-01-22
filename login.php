<?php
session_start();
if(isset($_SESSION["pelanggan"]))
{
    echo "<script>location = '../index.php';</script>"; 
}
?>
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
													<h1 class="h4 text-gray-900 mb-4">Form Login Pelanggan</h1> </div>
												<form method="post">
													<div class="input-group mb-5">
														<div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1">@</span> </div>
														<input type="email" class="form-control" placeholder="Masukan Email Anda" aria-label="Username" aria-describedby="basic-addon1" name="email" required=""> </div>
													<div class="input-group mb-3">
														<div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1">🔒</span> </div>
														<input type="password" class="form-control" placeholder="Masukan Kata Sandi" aria-label="Password" aria-describedby="basic-addon1" name="password" required=""> </div>
													<div class="form-check">
														<input type="checkbox" class="form-check-input" id="exampleCheck1">
														<label class="form-check-label" for="exampleCheck1">Ingat Saya, </label> <span class="pull-right float-right">
										<a href="#" >Lupa Kata Sandi ? </a> 
									</span> </div>
													<br/>
													<button type="submit" class="btn btn-success btn-sm col-lg-5 mb-2" name="login">Login</button> <a class="btn btn-info btn-sm col-lg-5 float-right" href="index.php?halaman=register" role="button">Buat Akun Baru</a> </form>
												<?php
							
							if(isset($_POST["login"]))
							{

								$email = $_POST["email"];
								$password = $_POST["password"];

								$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email' AND password_pelanggan='$password'");

								$akunyangcocok = $ambil->num_rows;

								if($akunyangcocok==1)
								{
									$akun = $ambil->fetch_assoc();
									$_SESSION["pelanggan"] = $akun;
									echo "<div class='alert alert-info'>Login Sukses</div>";
									echo "<meta http-equiv='refresh' content='1;url=index.php'>";
								}
								else
								{
									echo "<div class='alert alert-danger'>Login Gagal</div>";
									echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=login'>";
								}
							}

							?>
													<hr>
													<div class="text-center"> Belum Punya Akun ? <a href="index.php?halaman=register">Klik disini </a> </div>
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