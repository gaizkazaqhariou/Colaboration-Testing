<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/homepenjual.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Penjual-Home Penjual</title>
</head>

<body>
	<img src="<?php echo base_url(); ?>assets/img/sayur.jpg" class="backgroundImage">
	<div class="box">
		<div class="box1">
			<img src="<?php echo base_url(); ?>assets/img/penjual.png" class="circleimg">
			<div class="txt">
				<p class="txthome">
					<?php echo $this->session->userdata("user"); ?>
				</p>
			</div>
			<div class="dropdown">
				<button class="dropbtn"> <i class="fas fa-bars"></i> </button>
				<div class="dropdown-content">
					<a href="<?php echo base_url('homepenjualController/index/'); ?><?php echo $this->session->userdata('id'); ?>">Home</a>
					<a href="<?php echo base_url('totalController/index/'); ?><?php echo $this->session->userdata('id'); ?>">Pesanan</a>
					<a href="<?php echo base_url(); ?>loginController/logout">Logout</a>
				</div>
			</div>
		</div>
		<p class="context">Group</p>
		<hr style="border-width: 3px; margin-bottom: 5%; width: 50%;">
		<div style="display: flex; flex-direction: column; margin-top: 5%; margin-left: 5%;" type="button" onclick="window.location='<?php echo base_url('grupController/index/'); ?><?php echo $this->session->userdata('id'); ?>';">
			<div class="content">
				<div style="display: flex; flex-direction: row;">
					<img src="<?php echo base_url(); ?>assets/img/cart.png" class="imageContent">
					<p class="textContent">
						<b>Anda memiliki <?= $total; ?> grup</b>
					</p>
				</div>
			</div>
		</div>
		<p class="context" style="margin-top: 5%;">Rekapitulasi</p>
		<hr style="border-width: 3px; margin-bottom: 5%; width: 50%;">
		<div style="display: flex; flex-direction: column; margin-top: 5%; margin-left: 5%;" type="button" onclick="window.location='<?php echo base_url('produkController/index/'); ?><?php echo $this->session->userdata('id'); ?>';">
			<div class="content">
				<div style="display: flex; flex-direction: row;">
					<img src="<?php echo base_url(); ?>assets/img/cart1.png" class="imageContent">
					<p class="textContent">
						<b>Anda memiliki <?= $totalProduk; ?> produk</b>
					</p>
				</div>
			</div>
		</div>
	</div>
</body>

</html>