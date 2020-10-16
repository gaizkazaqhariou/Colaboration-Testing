<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/login.css"> 
	<title>Welcome Page</title>
</head>
<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
		<form class="box" action="proses_login.php" method="POST">
			<h1 class="h1"><b>Join Grup Pedagang</b></h1>
			<h4 style="color: white;">Masukkan kode unik yang diberikan oleh pedagang</h4>
			<input type="text" name="username" placeholder="Kode Grup">
			<input type="submit" name="login" value="Lanjutkan">
		</form>
</body>
</html>