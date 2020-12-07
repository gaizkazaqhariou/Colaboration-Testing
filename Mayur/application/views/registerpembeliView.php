<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/register.css"> 
	<title>Umum-Register Page</title>
</head>
<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
		<div class="box" action="proses_login.php" method="POST">
			<h1 class="h1"><b>Daftar Pembeli</b></h1>
			<input type="text" name="username" placeholder="Nama Lengkap">
			<input type="text" name="nomer" placeholder="Nomer HP">
			<input type="text" name="nomer" placeholder="Alamat Lengkap">
			<input type="password" name="password" placeholder="Password">
			<input type="file" name="">
			<input type="button" name="login" value="Lanjutkan" onclick="window.location='<?php echo base_url()?>loginpembeliController/index';">
		</div>
</body>
</html>