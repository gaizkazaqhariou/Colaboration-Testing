<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/login.css">
	<title>Umum-Login</title>
</head>

<body>
	<img src="<?php echo base_url(); ?>assets/img/sayur.jpg" class="backgroundImage">
	<form class="box" action="<?php echo base_url('loginpembeliController/aksi_login') ?>" method="POST">
		<h1 class="h1"><b>Login Pembeli</b></h1>
		<input type="text" name="username" placeholder="Username">
		<!-- <input type="text" name="nohp" placeholder="Nomer HP"> -->
		<input type="password" name="password" placeholder="Password">
		<a href="">Lupa password?</a>
		<input type="submit" name="login" value="Masuk">
	</form>
</body>

</html>