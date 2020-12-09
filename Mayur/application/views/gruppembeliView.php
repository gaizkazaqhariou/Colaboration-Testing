<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/gruppembeli.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Pembeli-Grup Pembeli</title>
</head>

<body>
	<img src="<?php echo base_url(); ?>assets/img/sayur.jpg" class="backgroundImage">
	<div class="box">
		<div class="box1">
			<img src="<?php echo base_url(); ?>assets/img/pembeli.png" class="circleimg">
			<div class="txt">
				<p class="txthome">
					<?php echo $this->session->userdata('user1'); ?>
					<br>
					<?php echo $this->session->userdata('alamat1'); ?>
				</p>
			</div>
			<div class="dropdown">
				<button class="dropbtn"> <i class="fas fa-bars"></i> </button>
				<div class="dropdown-content">
					<a href="<?php echo base_url(); ?>homepembeliController/index/<?php echo $this->session->userdata('id1'); ?>">Home</a>
					<a href="<?php echo base_url(); ?>gruppembeliController/index/<?php echo $this->session->userdata('id1'); ?>">Grup Saya</a>
					<a href="<?php echo base_url(); ?>loginpembeliController/logout">Logout</a>
				</div>
			</div>
		</div>
		<p class="context">Group</p>
		<hr style="border-width: 3px; margin-bottom: 5%; width: 50%;">
		<div style="display: flex; flex-direction: column; margin-top: 5%;" class="scroll">
			<?php $no = 1;
			foreach ($grupJ as $gj) :
			?>
				<div class="content">
					<div style="display: flex; flex-direction: row;">
						<img src="<?php echo base_url(); ?>assets/img/penjual.png" class="imageContent">
						<p class="textContent">
							<b><?php echo $gj['nama_grup']; ?></b><?php echo $gj['id_grup']; ?>
							<br>
							<?php echo $gj['deskripsi']; ?>
						</p>
						<button class="plus" onclick="window.location='<?php echo base_url() ?>orderController/index';"> <i class="fas fa-plus"></i> </button>
						<button class="plus" style="margin-left: 3%;" onclick="window.location='<?php echo base_url('onegrupController/index/'); ?><?php echo $this->session->userdata('id1'); ?>/<?php echo $gj['id_grup']; ?>';"> <i class="fas fa-door-open"></i> </button>
						<button class="plus" style="margin-left: 3%;"> <i class="fas fa-trash-alt"></i> </button>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<input type="button" name="" value="Masuk Grup Lain" onclick="window.location='<?php echo base_url() ?>joinController/index';">
	</div>
</body>

</html>