<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/produk.css"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Penjual-Daftar Produk</title>
</head>
<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
	<div class="box">
			<div class="box1">
				<img src="<?php echo base_url();?>assets/img/penjual.png" class="circleimg">
				<div class="txt">
					<p class="txthome">
						Mang Oleh
					</p>
				</div>
				<div class="dropdown">
					<button class="dropbtn"> <i class="fas fa-bars"></i> </button>
					<div class="dropdown-content">
						<a href="<?php echo base_url();?>homepenjualController/index">Home</a>
						<a href="<?php echo base_url();?>totalController/index">Pesanan</a>
						<a href="<?php echo base_url();?>loginController/logout">Logout</a>
					</div>
				</div>
			</div>
			<p class="context">Daftar Produk</p>
			<hr style="border-width: 3px; margin-bottom: 5%; width: 50%;">
			<div style="display: flex; flex-direction: column; margin-top: 5%;" class="scroll">
				<div class="content">
					<div style="display: flex; flex-direction: row;">
						<img src="<?php echo base_url();?>assets/img/penjual.png" class="imageContent">
						<p class="textContent">
							<b>Wortel</b> 
							<br>
							Rp 8.000/kg
						</p>
						<button class="plus" onclick="window.location='<?php echo base_url()?>editprodukController/index';"> <i class="fas fa-pencil-alt"></i> </button>
						<button class="plus" style="margin-left: 3%;" > <i class="fas fa-trash-alt"></i> </button>
					</div>
				</div>
				<div class="content">
					<div style="display: flex; flex-direction: row;">
						<img src="<?php echo base_url();?>assets/img/penjual.png" class="imageContent">
						<p class="textContent">
							<b>Wortel</b> 
							<br>
							Rp 8.000/kg
						</p>
						<button class="plus" onclick="window.location='<?php echo base_url()?>editprodukController/index';"> <i class="fas fa-pencil-alt"></i> </button>
						<button class="plus" style="margin-left: 3%;" > <i class="fas fa-trash-alt"></i> </button>
					</div>
				</div>
				<div class="content">
					<div style="display: flex; flex-direction: row;">
						<img src="<?php echo base_url();?>assets/img/penjual.png" class="imageContent">
						<p class="textContent">
							<b>Wortel</b> 
							<br>
							Rp 8.000/kg
						</p>
						<button class="plus" onclick="window.location='<?php echo base_url()?>editprodukController/index';"> <i class="fas fa-pencil-alt"></i> </button>
						<button class="plus" style="margin-left: 3%;" > <i class="fas fa-trash-alt"></i> </button>
					</div>
				</div>
				<div class="content">
					<div style="display: flex; flex-direction: row;">
						<img src="<?php echo base_url();?>assets/img/penjual.png" class="imageContent">
						<p class="textContent">
							<b>Wortel</b> 
							<br>
							Rp 8.000/kg
						</p>
						<button class="plus" onclick="window.location='<?php echo base_url()?>editprodukController/index';"> <i class="fas fa-pencil-alt"></i> </button>
						<button class="plus" style="margin-left: 3%;" > <i class="fas fa-trash-alt"></i> </button>
					</div>
				</div>
			</div>
				<input type="button" name="" value="Tambah Produk" onclick="window.location='<?php echo base_url()?>addprodukController/index';">
	</div>
</body>
</html>
