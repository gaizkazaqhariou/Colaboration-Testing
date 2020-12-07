<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/register.css"> 
	<title>Penjual-Tambah Grup</title>
</head>
<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
		<div class="box" action="proses_login.php" method="POST">
			<h1 class="h1"><b>Tambah Grup</b></h1>
			<input type="text" name="username" placeholder="Nama Grup">
			<input type="text" name="nomer" placeholder="Kode Grup">
			<input type="file" name="">
			<input type="button" name="login" value="Tambah Grup" onclick="window.location='<?php echo base_url()?>grupController/index';">
		</div>
</body>
</html>