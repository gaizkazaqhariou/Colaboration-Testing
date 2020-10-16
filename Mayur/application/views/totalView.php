<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/welcome.css"> 
	<title>Welcome Page</title>
</head>
<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
		<form class="box" action="proses_login.php" method="POST">
			<h1 class="h1"><b>Pilih Total Pemesanan</b></h1>
			<input type="submit" name="login" value="Hari Ini">
			<input type="submit" name="login" value="Besok">
		</form>
</body>
</html>