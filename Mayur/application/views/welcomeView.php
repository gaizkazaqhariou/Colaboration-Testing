<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/welcome.css">
	<title>Welcome Page</title>
</head>

<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
	<div class="box">
			<h1 class="h1"><b>Mayur</b></h1>
			<img src="<?php echo base_url();?>assets/img/background.png" class="imageBox">
			<h3 class="h1"><b>Yuk masak sendiri!</b></h3>
			<button class="tombol" type="button" onclick="window.location='<?php echo base_url()?>onboardController/index';">Mulai Aplikasi</button> 
	</div>
</body>

</html>
