<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/login.css"> 
	<title>Pembeli-Join Grup</title>
</head>
<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
		<div class="box">
			<h1 class="h1"><b>Join Grup Pedagang</b></h1>
			<h4 style="color: white;">Masukkan kode unik yang diberikan oleh pedagang</h4>
			<input type="text" name="username" placeholder="Kode Grup">
				<input type="button" name="login" value="Lanjutkan" class="lanjut" style="width: 100%; height: 100%;" onclick="window.location='<?php echo base_url()?>gruppembeliController/index';">
		</div>
</body>
</html>