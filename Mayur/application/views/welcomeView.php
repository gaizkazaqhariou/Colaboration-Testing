<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/welcome.css">
	<title>Welcome Page</title>
</head>

<body>
	<img src="<?php echo base_url(); ?>assets/img/sayur.jpg" class="backgroundImage">
	<form class="box" action="<?php echo base_url(); ?>chooserController" method="POST">
		<h1 class="h1"><b>Mayur</b></h1>
		<img src="<?php echo base_url(); ?>assets/img/background.png" class="imageBox">
		<h3 class="h1"><b>Yuk masak sendiri!</b></h3>
		<!-- <input type="text" name="username" placeholder="Username">
			<input type="password" name="password" placeholder="Password"> -->
		<input type="submit" name="login" value="Mulai Aplikasi">
	</form>
</body>

</html>