<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/register.css"> 
	<title>Umum-Register Page</title>
</head>
<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
		<form class="box" action="<?php echo base_url('registerpembeliController/tambahPembeli');?>" method="POST">
			<h1 class="h1"><b>Daftar Pembeli</b></h1>
			<input type="text" name="nama_pembeli" placeholder="Nama Lengkap">
			<input type="text" name="no_hp_pembeli" placeholder="Nomer HP">
			<input type="text" name="alamat_pembeli" placeholder="Alamat Lengkap">
			<input type="password" name="pass_pembeli" placeholder="Password">
			<input type="file" name="">
			<input type="submit" name="login" value="Lanjutkan">
		</form>
</body>
</html>