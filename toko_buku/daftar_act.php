<?php 
include 'koneksi.php';
$nama  = $_POST['nama'];
$email = $_POST['email'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];
$password = $_POST['password'];

$cek_email = mysqli_query($koneksi,"SELECT * from customer where customer_email='$email'");
if(mysqli_num_rows($cek_email) > 0){
	header("location:daftar.php?alert=duplikat");
}else{
	mysqli_query($koneksi, "INSERT into customer values (NULL,'$nama','$email','$hp','$alamat','$password')");
	header("location:masuk.php?alert=terdaftar");
}
