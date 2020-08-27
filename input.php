<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">
		<h1>Membuat CRUD dengan PHP dan MySQL</h1>
		<h2>Menambahkan data</h2>
	</div>
	<br/>

	<a class="tombol" href="index.php">Lihat Semua Data</a>

	<h3>Input Data Baru</h3>
	<form action="input_aksi.php" method="post">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama_produk"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="text" name="jumlah"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>