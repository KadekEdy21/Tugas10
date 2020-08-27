<?php 
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

mysqli_query($host,"UPDATE produk SET nama_produk='$nama', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' WHERE id='$id'");

header("location:index.php?pesan=update");


?>