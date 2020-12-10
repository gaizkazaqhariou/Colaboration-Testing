<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/login.css">
	<title>Pembeli-Join Grup</title>
</head>

<body>
	<img src="<?php echo base_url(); ?>assets/img/sayur.jpg" class="backgroundImage">
	<form action="<?php echo base_url('joinController/aksijoin'); ?>" method="POST" class="box">
		<h1 class="h1"><b>Join Grup Pedagang</b></h1>
		<h4 style="color: white;">Masukkan kode unik yang diberikan oleh pedagang</h4>
		<input type="text" name="kode" placeholder="Kode Grup">
		<input type="submit" value="Lanjutkan" class="lanjut" style="width: 100%; height: 100%;">
	</form>
</body>

</html>