<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/homepembeli.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Pembeli-Home Pembeli</title>
</head>

<body>
	<img src="<?php echo base_url(); ?>assets/img/sayur.jpg" class="backgroundImage">
	<div class="box" method="POST">
		<div class="box1">
			<img src="<?php echo base_url(); ?>assets/img/pembeli.png" class="circleimg">
			<div class="txt">
				<p class="txthome">
					<?php echo $session_data['user1'];
					?>Bu Agus
					<br>
					Jl. Suara Bunga No.10
				</p>
			</div>
			<div class="dropdown">
				<button class="dropbtn"> <i class="fas fa-bars"></i> </button>
				<div class="dropdown-content">
					<a href="<?php echo base_url(); ?>homepembeliController/index">Home</a>
					<a href="<?php echo base_url(); ?>gruppembeliController/index">Grup Saya</a>
					<a href="<?php echo base_url(); ?>loginpembeliController/logout">Logout</a>
				</div>
			</div>
		</div>
		<div style="display: flex; flex-direction: row;">
			<input type="text" name="nomer" placeholder="&emsp; cari bahan" class="search">
			<input type="submit" name="search" class="cari" value="cari">
		</div>
		<p class="category">Kategori</p>
		<div style="display: flex; flex-direction: row;">
			<button class="but" type="button" style="margin-left: 5%;" onclick="window.location='<?php echo base_url() ?>listpedagangController/index';">
				<img src="<?php echo base_url(); ?>assets/img/penjual.png" class="categoryimg">
			</button>
			<button class="but" type="button" onclick="window.location='<?php echo base_url() ?>sayurController/index';">
				<img src="<?php echo base_url(); ?>assets/img/cart.png" class="categoryimg">
			</button>
			<button class="but" type="button" onclick="window.location='<?php echo base_url() ?>factController/index';">
				<img src="<?php echo base_url(); ?>assets/img/fact.png" class="categoryimg">
			</button>

		</div>
		<p class="category">Paling Laris</p>
		<div class="scroll">
			<div class="box3">
				<img src="<?php echo base_url(); ?>assets/img/penjual.png" class="recimg" style="margin-left: 5%;">
				<p class="catdesc">
					Mang Asep <br>
					Saya jual berbagai macam sayuran, buah, bumbu, dll<br>
					<a href="<?php echo base_url(); ?>sayurController/index">Details</a>
				</p>
			</div>
			<div class="box3">
				<img src="<?php echo base_url(); ?>assets/img/penjual.png" class="recimg" style="margin-left: 5%;">
				<p class="catdesc">
					Mang Asep <br>
					Saya jual berbagai macam sayuran, buah, bumbu, dll<br>
					<a href="<?php echo base_url(); ?>sayurController/index">Details</a>
				</p>
			</div>
			<div class="box3">
				<img src="<?php echo base_url(); ?>assets/img/penjual.png" class="recimg" style="margin-left: 5%;">
				<p class="catdesc">
					Mang Asep <br>
					Saya jual berbagai macam sayuran, buah, bumbu, dll<br>
					<a href="<?php echo base_url(); ?>sayurController/index">Details</a>
				</p>
			</div>
			<div class="box3">
				<img src="<?php echo base_url(); ?>assets/img/penjual.png" class="recimg" style="margin-left: 5%;">
				<p class="catdesc">
					Mang Asep <br>
					Saya jual berbagai macam sayuran, buah, bumbu, dll<br>
					<a href="">Details</a>
				</p>
			</div>
		</div>

	</div>
</body>

</html>