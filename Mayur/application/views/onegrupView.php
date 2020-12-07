<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/onegrup.css"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Pembeli-Info Grup</title>
</head>
<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
	<div class="box">
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
			<p class="category" style="margin-top: 10%;">Pesananku</p>
			<div style="display: flex; flex-direction: row;">
				<div class="box3" style="width: 65%;" type="button" onclick="window.location='<?php echo base_url()?>listorderController/index';">
					<img src="<?php echo base_url();?>assets/img/cart1.png" class="recimg" style="margin-left: 5%; border: none;">
					<p class="catdesc">
						Anda memiliki 1 pesanan
					</p>
				</div>
			</div>
			<p class="category">Anggota</p>
			<div class="scroll">
				<div class="box3">
					<img src="<?php echo base_url();?>assets/img/pembeli.png" class="recimg" style="margin-left: 5%;">
					<p class="catdesc">
						Bu Asep
					</p>
				</div>
				<div class="box3">
					<img src="<?php echo base_url();?>assets/img/pembeli.png" class="recimg" style="margin-left: 5%;">
					<p class="catdesc">
						Bu Jangan
					</p>
				</div>
				<div class="box3">
					<img src="<?php echo base_url();?>assets/img/pembeli.png" class="recimg" style="margin-left: 5%;">
					<p class="catdesc">
						Bu Jangan
					</p>
				</div>
				<div class="box3">
					<img src="<?php echo base_url();?>assets/img/pembeli.png" class="recimg" style="margin-left: 5%;">
					<p class="catdesc">
						Bu Jangan
					</p>
				</div>
			</div>
	</div>
</body>
</html>

