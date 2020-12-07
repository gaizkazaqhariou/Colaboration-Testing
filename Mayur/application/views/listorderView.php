<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/listorder.css"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Pembeli-Daftar Pesanan</title>
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
			<p class="context">2018 / 12 / 12</p>
			<hr style="border-width: 3px; margin-bottom: 5%; width: 50%;">
			<div class="scroll">
				<div class="col">
					<div class="card">
						<div class="row">
							<div class="fstext">
								<p>Wortel 1 kg</p>
							</div>
							<div class="sctext">
								<p>30.000</p>
							</div>
							<div class="thtext">
								<button class="plus" onclick="window.location='<?php echo base_url()?>editorderController/index';"> <i class="fas fa-pencil-alt"></i> </button>
								<button class="plus"> <i class="fas fa-trash-alt"></i> </button>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="row">
							<div class="fstext">
								<p>Ini Sayur Panjang 1 kg</p>
							</div>
							<div class="sctext">
								<p>30.000</p>
							</div>
							<div class="thtext">
								<button class="plus" onclick="window.location='<?php echo base_url()?>editorderController/index';"> <i class="fas fa-pencil-alt"></i> </button>
								<button class="plus"> <i class="fas fa-trash-alt"></i> </button>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="row">
							<div class="fstext">
								<p>Ini Sayur Panjang 1 kg</p>
							</div>
							<div class="sctext">
								<p>30.000</p>
							</div>
							<div class="thtext">
								<button class="plus" onclick="window.location='<?php echo base_url()?>editorderController/index';"> <i class="fas fa-pencil-alt"></i> </button>
								<button class="plus"> <i class="fas fa-trash-alt"></i> </button>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="row">
							<div class="fstext">
								<p>Ini Sayur Panjang 1 kg</p>
							</div>
							<div class="sctext">
								<p>30.000</p>
							</div>
							<div class="thtext">
								<button class="plus" onclick="window.location='<?php echo base_url()?>editorderController/index';"> <i class="fas fa-pencil-alt"></i> </button>
								<button class="plus"> <i class="fas fa-trash-alt"></i> </button>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="row">
							<div class="fstext">
								<p>Ini Sayur Panjang 1 kg</p>
							</div>
							<div class="sctext">
								<p>30.000</p>
							</div>
							<div class="thtext">
								<button class="plus" onclick="window.location='<?php echo base_url()?>editorderController/index';"> <i class="fas fa-pencil-alt"></i> </button>
								<button class="plus"> <i class="fas fa-trash-alt"></i> </button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="width1">
					<p>TOTAL</p>
				</div>
				<div class="width2">
					<p>100.000</p>
				</div>
			</div>
			<hr style="border-width: 3px; margin-bottom: 5%; width: 50%;">
	</div>
</body>
</html>

