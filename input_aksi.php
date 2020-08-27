<?php 
include "koneksi.php";
$nama = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

mysqli_query($host,"INSERT INTO produk VALUES('','$nama','$keterangan','$harga','$jumlah')");

header("location:index.php?pesan=input");

?>