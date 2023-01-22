<?php
session_start();
if(!isset($_SESSION['admin']))
{
    echo "<script>alert('Anda harus login');</script>";
    echo "<script>location='../index.php';</script>";
    header('location:../index.php');
    exit();
}
?>
<?php require 'header_admin.php'; ?>
<?php require 'sidebar_admin.php'; ?>
<?php require 'navbar_admin.php'; ?>
<?php 
                if (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="produk")
                    {
                        include 'daftar_produk.php';
                    }
                    elseif ($_GET['halaman']=="pelanggan")
                    {
                        include 'daftar_pelanggan.php';
                    }
                    elseif ($_GET['halaman']=="invoice")
                    {
                        include 'invoice.php';
                    }
                    elseif ($_GET['halaman']=="logout")
                    {
                        include 'logout.php';
                    }
                    elseif ($_GET['halaman']=="tambah_produk")
                    {
                        include 'tambah_produk.php';
                    }
                    elseif ($_GET['halaman']=="ubah_produk")
                    {
                        include 'ubah_produk.php';
                    }
                    elseif ($_GET['halaman']=="hapus_produk")
                    {
                        include 'hapus_produk.php';
                    }
                    elseif ($_GET['halaman']=="hapus_pelanggan")
                    {
                        include 'hapus_pelanggan.php';
                    }
                    elseif ($_GET['halaman']=="detail_ygdibeli")
                    {
                        include 'detail_ygdibeli.php';
                    }
                    elseif ($_GET['halaman']=="login")
                    {
                        include '../login.php';
                    }

                }
                else
                {
                    include 'content_admin.php';
                }

?>

<?php require 'footer_admin.php'; ?>