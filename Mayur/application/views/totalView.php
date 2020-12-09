<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/register.css">
	<title>Penjual-Total Pesanan</title>
</head>

<body>
	<img src="<?php echo base_url(); ?>assets/img/sayur.jpg" class="backgroundImage">
	<form class="box" action="proses_login.php" method="POST">
		<h1 class="h1"><b>Pilih Total Pemesanan</b></h1>
		<input type="button" name="login" value="Hari Ini" onclick="window.location='<?php echo base_url('detailController/index/'); ?><?php echo $this->session->userdata('id_grup'); ?>';">
		<input type="button" name="login" value="Besok" onclick="window.location='<?php echo base_url('detailController/index/'); ?><?php echo $this->session->userdata('id_grup'); ?>';">
	</form>
</body>

</html>