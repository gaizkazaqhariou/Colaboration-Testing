<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/login.css"> 
	<title>Welcome Page</title>
</head>
<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
		<form class="box" action="proses_login.php" method="POST">
			<h1 class="h1"><b>Login</b></h1>
			<input type="text" name="username" placeholder="Username">
			<input type="text" name="nomer" placeholder="Nomer HP Terdaftar">
			<input type="password" name="password" placeholder="Password">
			,<a href="" >Lupa password?</a>
			<input type="submit" name="login" value="Masuk">
		</form>
</body>
</html>