<?php session_start()?>
<?php require 'header.php'; ?>
<?php require 'sidebar.php'; ?>
<?php require 'kondisi.php'; ?>
<?php 
                if (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="checkout")
                    {
                        include 'checkout.php';
                    }
                    elseif ($_GET['halaman']=="detail")
                    {
                        include 'detail.php';
                    }
                    elseif ($_GET['halaman']=="keranjang")
                    {
                        include 'keranjang.php';
                    }
                    elseif ($_GET['halaman']=="logout")
                    {
                        include 'logout.php';
                    }
                    elseif ($_GET['halaman']=="login")
                    {
                        include 'login.php';
                    }
                    elseif ($_GET['halaman']=="login_admin")
                    {
                        include 'login_admin.php';
                    }
                    elseif ($_GET['halaman']=="register")
                    {
                        include 'register.php';
                    }
                    elseif ($_GET['halaman']=="register_admin")
                    {
                        include 'register_admin.php';
                    }
                    elseif ($_GET['halaman']=="beli")
                    {
                        include 'beli.php';
                    }
                    elseif ($_GET['halaman']=="hapus_keranjang")
                    {
                        include 'hapus_keranjang.php';
                    }
                    elseif ($_GET['halaman']=="nota")
                    {
                        include 'nota.php';
                    }
                    elseif ($_GET['halaman']=="content_aksesoris")
                    {
                        include 'content_aksesoris.php';
                    }
                    elseif ($_GET['halaman']=="content_bag")
                    {
                        include 'content_bag.php';
                    }
                    elseif ($_GET['halaman']=="content_jaket")
                    {
                        include 'content_jaket.php';
                    }
                    elseif ($_GET['halaman']=="content_lpants")
                    {
                        include 'content_lpants.php';
                    }
                    elseif ($_GET['halaman']=="content_pshirt")
                    {
                        include 'content_pshirt.php';
                    }
                    elseif ($_GET['halaman']=="content_shoes")
                    {
                        include 'content_shoes.php';
                    }
                    elseif ($_GET['halaman']=="content_sweater")
                    {
                        include 'content_sweater.php';
                    }
                    elseif ($_GET['halaman']=="content_tshirt")
                    {
                        include 'content_tshirt.php';
                    }


                }
                else
                {
                    include 'content.php';
                }

?>
<?php require 'footer.php'; ?>
