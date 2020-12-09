<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/onegrup.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Penjual-Info Grup</title>
</head>

<body>
	<img src="<?php echo base_url(); ?>assets/img/sayur.jpg" class="backgroundImage">
	<div class="box" style="height: 80%;">
		<div class="box1">
			<div class="div1">
				<p class="teks"><?php echo $dataG['nama_grup']; ?></p>
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
		<p class="category" style="margin-top: 10%;">Anggota</p>
		<div style="display: flex; flex-direction: row;">
			<div class="box3" style="width: 100%;" type="button" onclick="window.location='<?php echo base_url('listanggotaController/index/'); ?><?php echo $this->session->userdata('id_grup'); ?>';">
				<img src="<?php echo base_url(); ?>assets/img/cart1.png" class="recimg" style="margin-left: 5%; border: none;">
				<p class="catdesc">
					Grup ini memiliki <?php echo $totalG; ?> anggota
				</p>
			</div>
		</div>
		<p class="category">Pesanan</p>
		<div style="display: flex; flex-direction: row;">
			<div class="box3" style="width: 100%;" type="button" onclick="window.location='<?php echo base_url('detailController/index/'); ?><?php echo $this->session->userdata('id_grup'); ?>';">
				<img src="<?php echo base_url(); ?>assets/img/cart1.png" class="recimg" style="margin-left: 5%; border: none;">
				<p class="catdesc">
					Anda memiliki <?php echo $totalP; ?> pesanan
				</p>
			</div>
		</div>
		<p class="category">Kode Grup</p>
		<div style="display: flex; flex-direction: row;">
			<div class="box3" style="width: 100%;">
				<img src="<?php echo base_url(); ?>assets/img/cart1.png" class="recimg" style="margin-left: 5%; border: none;">
				<p class="catdesc">
					<?php echo $dataG['kode_grup']; ?>
				</p>
			</div>
		</div>
	</div>
</body>

</html>