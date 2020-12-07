<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/register.css"> 
	<title>Umum-Register Page</title>
</head>
<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
		<form class="box" action="<?php echo base_url('registerController/tambahPenjual');?>" method="POST">
			<h1 class="h1"><b>Daftar Penjual</b></h1>
			<input type="text" name="username" placeholder="Nama Lengkap" required="required">
			<input type="text" name="nomer" placeholder="Nomer HP" required="required">
			<input type="text" name="nomer" placeholder="Alamat Lengkap" required="required">
			<input type="password" name="password" placeholder="Password" required="required">
			<input type="file" name="">
			<input type="button" name="login" value="Lanjutkan" onclick="">
		</form>
</body>
</html>