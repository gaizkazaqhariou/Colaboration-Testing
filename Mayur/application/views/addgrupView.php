<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/register.css"> 
	<title>Penjual-Tambah Grup</title>
</head>
<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
		<form class="box" action="<?php echo base_url('addgrupController/tambahGrup');?>" method="POST">
			<h1 class="h1"><b>Tambah Grup</b></h1>
			<input type="text" name="nama_grup" placeholder="Nama Grup">
			<input type="text" name="kode_grup" placeholder="Kode Grup">
			<input type="file" name="">
			<input type="submit" name="login" value="Tambah Grup">
		</form>
</body>
</html>