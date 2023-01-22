<?php
session_start();
if(isset($_SESSION['admin']))
{
    echo "<script>location='admin/index.php';</script>";
    header('location:admin/index.php');
    exit();
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
													<h1 class="h4 text-gray-900 mb-4">FORM LOGIN ADMIN</h1> </div>
													<input type="text" class="form-control form-control-sm text-center mb-2" placeholder="Akun Demo :" readonly="">
													<textarea class="form-control mb-2 text-center" readonly="">
Username : stmik
Password : 1234</textarea>
												<form method="post">
													<div class="input-group mb-4">
														<div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-circle"></i></span> </div>
														<input type="text" class="form-control" placeholder="Masukan Username Anda" aria-label="Username" aria-describedby="basic-addon1" name="user" required=""> </div>
													<div class="input-group mb-3">
														<div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1">🔒</span> </div>
														<input type="password" class="form-control" placeholder="Masukan Kata Sandi" aria-label="Password" aria-describedby="basic-addon1" name="pass" required=""> </div>
													<div class="form-check">
														<input type="checkbox" class="form-check-input" id="exampleCheck1">
														<label class="form-check-label" for="exampleCheck1">Ingat Saya, </label> <span class="pull-right float-right">
										<a href="#" >Lupa Kata Sandi ? </a> 
									</span> </div>
													<br/>
													<button type="submit" class="btn btn-success btn-sm col-lg-5 mb-2" name="login">Login</button> <a class="btn btn-info btn-sm col-lg-5 float-right" href="index.php?halaman=register_admin" role="button">Buat Akun Baru</a> </form>
												<?php

							if(isset($_POST['login']))
							{
								$ambil = $koneksi->query("SELECT * FROM admin WHERE username='$_POST[user]' AND password ='$_POST[pass]'");
								$yangcocok = $ambil->num_rows;
								if ($yangcocok==1)
								{
									$_SESSION['admin']=$ambil->fetch_assoc();
									echo "<div class='alert alert-info'>Login Sukses</div>";
									echo "<meta http-equiv='refresh' content='1;url=admin/index.php'>";
								}
								else
								{
									echo "<div class='alert alert-danger'>Login Gagal</div>";
									echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=login_admin'>";
								}  
								
							}    
							?>
													<hr>
													<div class="text-center"> Belum Punya Akun ? <a href="index.php?halaman=register_admin">Klik disini </a> </div>
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