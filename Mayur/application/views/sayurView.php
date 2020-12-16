<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/sayur.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Pembeli-Daftar Produk</title>
</head>

<body>
	<img src="<?php echo base_url(); ?>assets/img/sayur.jpg" class="backgroundImage">
	<div class="box">
		<div class="box1">
			<img src="<?php echo base_url();?>assets/upload/<?php echo $this->session->userdata("foto1");?>" class="circleimg">
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
		<br>
		<br>
		<br>
		<div class="scroll">
			<?php $no = 1;

			if ($produkP == null) {
			?>
				<p> Produk belum ada</p>
			<?php } ?>
			<?php foreach ($produkP as $pp) :
			?>
				<div class="box3">
					<img src="<?php echo base_url(); ?>assets/img/pembeli.png" class="recimg">
					<p class="catdesc">
						<?php echo $pp['nama_barang']; ?> di <?php echo $pp['nama_penjual']; ?><br>
						<?php echo $pp['harga']; ?>/<?php echo $pp['satuan']; ?><br>
					</p>
					<!-- <button onclick="window.location='<?php echo base_url('gruppembeliController/index/'); ?><?php echo $this->session->userdata('id1'); ?>';">Pilih</button> -->
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</body>

</html>