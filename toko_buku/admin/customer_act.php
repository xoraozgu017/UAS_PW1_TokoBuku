<?php 
include '../koneksi.php';
$nama  = $_POST['nama'];
$email  = $_POST['email'];
$hp  = $_POST['hp'];
$alamat  = $_POST['alamat'];
$password  = $_POST['password'];

mysqli_query($koneksi, "INSERT into customer values (NULL,'$nama','$email','$hp','$alamat','$password')");
header("location:customer.php");