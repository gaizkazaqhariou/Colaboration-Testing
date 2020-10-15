<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/penjual.css"> 
	<title>Welcome Page</title>
</head>
<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
	<form class="box" action="proses_login.php" method="POST">
			<h1 class="h1"><b>Penjual</b></h1>
			<img src="<?php echo base_url();?>assets/img/penjual.png" class="imageBox">
			<h3 class="h1"><b>Selamat datang di Mayur!</b></h3>
			<h5 class="h1"><b>Sudah siap untuk berjualan?</b></h5>
			<!-- <input type="text" name="username" placeholder="Username">
			<input type="password" name="password" placeholder="Password"> -->
			<input type="submit" name="login" value="Daftar">
			<input type="submit" name="login" value="Login">
	</form>
</body>
</html>

