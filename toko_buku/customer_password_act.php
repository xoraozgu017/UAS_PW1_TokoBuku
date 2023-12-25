<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';

session_start();

$id = $_SESSION['customer_id'];
$password = $_POST['password'];

mysqli_query($koneksi,"UPDATE customer set customer_password='$password' where customer_id='$id'");

header("location:customer_password.php?alert=sukses");