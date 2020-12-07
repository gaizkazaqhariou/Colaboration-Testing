<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/register.css"> 
	<title>Penjual-Edit Produk</title>
</head>
<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
		<div class="box" action="proses_login.php" method="POST">
			<h1 class="h1"><b>Edit Produk</b></h1>
			<input type="text" name="username" placeholder="Nama Produk">
			<input type="text" name="nomer" placeholder="Harga Produk">
			<input type="file" name="">
			<input type="button" name="login" value="Edit Produk" onclick="window.location='<?php echo base_url()?>produkController/index';">
		</div>
</body>
</html>