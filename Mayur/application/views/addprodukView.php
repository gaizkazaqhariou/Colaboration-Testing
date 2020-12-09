<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/register.css"> 
	<title>Penjual-Tambah Produk</title>
</head>
<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
		<form class="box" action="<?php echo base_url('addprodukController/tambahProduk');?>" method="POST">
			<h1 class="h1"><b>Tambah Produk</b></h1>
			<input type="text" name="nama_barang" placeholder="Nama Produk">
			<input type="text" name="harga" placeholder="Harga Produk">
			<input type="text" name="satuan" placeholder="Satuan Produk">
			<input type="file" name="">
			<input type="submit" name="login" value="Tambah Produk">
		</form>
</body>
</html>