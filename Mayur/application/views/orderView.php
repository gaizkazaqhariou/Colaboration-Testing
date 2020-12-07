<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/order.css"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Pembeli-Tambah Order</title>
</head>
<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
	<form class="box" action="proses_login.php" method="POST">
			<div class="box1">
				<div class="div1">
					<p class="teks">Nama Grup</p>
				</div>
				<div class="dropdown">
					<button class="dropbtn"> <i class="fas fa-bars"></i> </button>
					<div class="dropdown-content">
						<a href="<?php echo base_url();?>homepembeliController/index">Home</a>
						<a href="<?php echo base_url();?>gruppembeliController/index">Grup Saya</a>
						<a href="<?php echo base_url();?>loginpembeliController/logout">Logout</a>
					</div>
				</div>
			</div>
			<div class="content">
				<input type="text" name="product" disabled="text">
				<input type="number" name="product" class="kuantitas">
				<input type="url" name="product" disabled="text" value="Kg">
			</div>
			<div class="content">
				<p class="context">Waktu</p>
				<input type="date" name="product">
			</div>
			<div class="content">
				<input type="button" name="" value="Tambahkan" onclick="window.location='<?php echo base_url()?>listorderController/index';">
			</div>
	</form>
</body>
</html>

