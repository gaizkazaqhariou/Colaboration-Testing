<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/register.css"> 
	<title>Umum-Register Page</title>
</head>
<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
		<form class="box" action="<?php echo base_url('registerController/tambahPenjual');?>" method="POST" enctype="multipart/form-data">
			<h1 class="h1"><b>Daftar Penjual</b></h1>
			<input type="text" name="nama_penjual" placeholder="Nama Lengkap" required="required">
			<input type="text" name="no_hp_penjual" placeholder="Nomer HP" required="required">
			<input type="text" name="alamat_penjual" placeholder="Alamat Lengkap" required="required">
			<input type="password" name="pass_penjual" placeholder="Password" required="required">
			<input type="text" name="kategori" placeholder="Kategori" required="required">
			<input type="text" name="deskripsi" placeholder="Deskripsi" required="required">
			<input type="file" name="foto_penjual">
			<input type="submit" name="login" value="Lanjutkan">
		</form>
</body>
</html>