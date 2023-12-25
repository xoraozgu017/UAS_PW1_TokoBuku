<?php 
include '../koneksi.php';
$invoice  = $_POST['invoice'];
$status  = $_POST['status'];

mysqli_query($koneksi, "UPDATE invoice set invoice_status='$status' where invoice_id='$invoice'");

header("location:transaksi.php");