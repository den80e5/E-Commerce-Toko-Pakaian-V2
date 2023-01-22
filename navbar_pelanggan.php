<!-- navbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"> <i class="fa fa-bars"></i> </button>
    <!-- Topbar Search -->
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button"> <i class="fas fa-search fa-sm"></i> </button>
            </div>
        </div>
    </form>
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-search fa-fw"></i> </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button"> <i class="fas fa-search fa-sm"></i> </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>
        <!-- Nav Item - Alerts -->
        <li class="nav-item no-arrow mx-1">
            <a class="nav-link" href="index.php?halaman=keranjang" role="button" aria-haspopup="true" aria-expanded="false"><span class="text-info p-0">Keranjang --</span><i class="fas fa-shopping-cart"></i>
                <!-- Counter - Alerts --><span class="badge badge-danger badge-counter">+</span> </a>
        </li>

        <?php $ambil = $koneksi->query("SELECT * FROM pelanggan"); ?>
        <?php $tmplplg = $ambil->fetch_assoc(); ?>

        <div class="topbar-divider d-none d-sm-block"></div>
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $tmplplg['nama_pelanggan'];?></span> <img class="img-profile rounded-circle" src="img/undraw_profile.svg"> </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#"> <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Akun Saya </a>
                <a class="dropdown-item" href="index.php?halaman=keranjang"> <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Keranjang Belanja </a>
                <a class="dropdown-item" href="index.php?halaman=checkout"> <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Pesanan Saya </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?halaman=login_admin"> <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Login Sebagai Admin </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?halaman=logout" data-toggle="modal" data-target="#logoutModal"> <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout </a>
            </div>
        </li>
    </ul>
</nav>
<!-- End of navbar -->