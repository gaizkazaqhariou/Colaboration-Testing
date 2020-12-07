<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/penjual.css"> 
	<title>Umum-Penjual Page</title>
</head>
<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
	<form class="box">
			<h1 class="h1"><b>Penjual</b></h1>
			<img src="<?php echo base_url();?>assets/img/penjual.png" class="imageBox">
			<h3 class="h1"><b>Selamat datang di Mayur!</b></h3>
			<h5 class="h1"><b>Sudah siap untuk berjualan?</b></h5>
			<!-- <input type="text" name="username" placeholder="Username">
			<input type="password" name="password" placeholder="Password"> -->
			<input type="button" name="login" value="Daftar" onclick="window.location='<?php echo base_url()?>registerController/index';">
			<input type="button" name="login" value="Login" onclick="window.location='<?php echo base_url()?>loginController/index';">
	</form>
</body>
</html>

