<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/login.css"> 
	<title>Welcome Page</title>
</head>
<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
		<form class="box" action="proses_login.php" method="POST">
			<h1 class="h1"><b>Daftar</b></h1>
			<input type="text" name="username" placeholder="Nama Lengkap">
			<input type="text" name="nomer" placeholder="Nomer HP">
			<input type="text" name="nomer" placeholder="Alamat Lengkap">
			<input type="password" name="password" placeholder="Password">
			<input type="submit" name="login" value="Lanjutkan">
		</form>
</body>
</html>