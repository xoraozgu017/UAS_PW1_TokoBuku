<?php 
include '../koneksi.php';

$id  = $_POST['id'];
$nama  = $_POST['nama'];
$email  = $_POST['email'];
$hp  = $_POST['hp'];
$alamat  = $_POST['alamat'];
$password  = $_POST['password'];

if($_POST['password'] == ""){

	mysqli_query($koneksi, "UPDATE customer set customer_nama='$nama', customer_email='$email', customer_hp='$hp', customer_alamat='$alamat' where customer_id='$id'");

}else{
	mysqli_query($koneksi, "UPDATE customer set customer_nama='$nama', customer_email='$email', customer_hp='$hp', customer_alamat='$alamat', customer_password='$password' where customer_id='$id'");

}

header("location:customer.php");