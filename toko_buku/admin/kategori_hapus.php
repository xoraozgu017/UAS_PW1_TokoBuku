<?php 
include '../koneksi.php';
$id = $_GET['id'];

mysqli_query($koneksi, "DELETE from kategori where kategori_id='$id'");


mysqli_query($koneksi,"UPDATE produk set produk_kategori='1' where produk_kategori='$id'");

header("location:kategori.php");
