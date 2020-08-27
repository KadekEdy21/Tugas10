<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">
		<h1>Membuat CRUD dengan PHP dan MySQL</h1>
		<h2>Menampilkan data dari database</h2>
	</div>
	<br/>
		<?php
		if(isset($_GET['pesan'])){
			$pesan = $_GET['pesan'];
			if($pesan == "input"){
		echo "Data berhasil di input";
			}else if($pesan == "hapus"){
		echo "Data berhasi di hapus";
			}else if($pesan == "update" ){
				echo "Data berhasil di update";
			}
		}
		?>
	<br/>
	<br/>
	<a class="tombol" href="input.php">Tambah Data Baru</a>
	<br/>
	<h3>Data User</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>opsi</th>
		</tr>
		<?php 
			include "koneksi.php";
			$query_mysql = mysqli_query($host,"SELECT * FROM produk")or die(mysql_error());
			$nomor=1;
			while ($data = mysqli_fetch_array($query_mysql)) {
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nama_produk'] ?></td>
			<td><?php echo $data['keterangan'] ?></td>
			<td><?php echo $data['harga'] ?></td>
			<td><?php echo $data['jumlah'] ?></td>
			<td>
				<a class="tombol" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a class="tombol" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
			</td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>