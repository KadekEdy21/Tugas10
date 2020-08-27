<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">
		<h1>Membuat CRUD dengan PHP dan MySQL</h1>
		<h2>Mengedit Data</h2>
	</div>
	<br/>

	<a class="tombol" href="index.php">Lihat Semua Data</a>
	<br/>
	<h3>Edit Data</h3>

	<?php 
	include 'koneksi.php';
	$id = $_GET['id'];
	$query_mysql = mysqli_query($host,"SELECT * FROM produk WHERE id='$id'")or die(mysqli_query());
	$nomor = 1;
	while ($data = mysqli_fetch_array($query_mysql)) {
	?>
	<form action="update.php" method="post">
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="nama_produk" value="<?php echo $data['nama_produk'] ?>">
				</td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>
					<input type="text" name="keterangan" value="<?php echo $data['keterangan'] ?>">
				</td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>
					<input type="text" name="harga" value="<?php echo $data['harga'] ?>">
				</td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td>
					<input type="text" name="jumlah" value="<?php echo $data['jumlah'] ?>">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Simpan"></td>
			</tr>
		</table>
	</form>
<?php } ?>
</body>
</html>