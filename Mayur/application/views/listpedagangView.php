<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/listpedagang.css"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Pembeli-List Pedagang</title>
</head>
<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
	<div class="box">
			<div class="box1">
				<img src="<?php echo base_url();?>assets/img/pembeli.png" class="circleimg">
				<div class="txt">
					<p class="txthome">
						Bu Agus
						<br>
						Jl. Suara Bunga No.10
					</p>
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
			<br>
			<br>
			<br>
			<div class="scroll">
				<div class="box3">
					<img src="<?php echo base_url();?>assets/img/penjual.png" class="recimg" style="margin-left: 3%;">
					<p class="catdesc">
						<b>Mang Asep</b><br> 
						Saya menjual erbagai macam buah, sayur, dan bumbu dapur<br>
					</p>
					<button onclick="window.location='<?php echo base_url()?>sayurController/index';">Pilih</button>
				</div>
				<div class="box3">
					<img src="<?php echo base_url();?>assets/img/penjual.png" class="recimg" style="margin-left: 3%;">
					<p class="catdesc">
						<b>Mang Asep</b><br> 
						Saya menjual erbagai macam buah, sayur, dan bumbu dapur<br>
					</p>
					<button onclick="window.location='<?php echo base_url()?>sayurController/index';">Pilih</button>
				</div>
				<div class="box3">
					<img src="<?php echo base_url();?>assets/img/penjual.png" class="recimg" style="margin-left: 3%;">
					<p class="catdesc">
						<b>Mang Asep</b><br> 
						Saya menjual erbagai macam buah, sayur, dan bumbu dapur<br>
					</p>
					<button onclick="window.location='<?php echo base_url()?>sayurController/index';">Pilih</button>
				</div>
				<div class="box3">
					<img src="<?php echo base_url();?>assets/img/penjual.png" class="recimg" style="margin-left: 3%;">
					<p class="catdesc">
						<b>Mang Asep</b><br> 
						Saya menjual erbagai macam buah, sayur, dan bumbu dapur<br>
					</p>
					<button onclick="window.location='<?php echo base_url()?>sayurController/index';">Pilih</button>
				</div>
			</div>			
	</div>
</body>
</html>

