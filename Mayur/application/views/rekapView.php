<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/rekap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Pembeli-Rekap Pesanan</title>
</head>

<body>
	<img src="<?php echo base_url(); ?>assets/img/sayur.jpg" class="backgroundImage">
	<div class="box">
		<div class="box1">
			<img src="<?php echo base_url(); ?>assets/img/pembeli.png" class="circleimg">
			<div class="txt">
				<p class="txthome">
					<?php echo $dataP['nama_pembeli']; ?>
					<br>
					<?php echo $dataP['alamat_pembeli']; ?>
				</p>
			</div>
			<div class="dropdown">
				<button class="dropbtn"> <i class="fas fa-bars"></i> </button>
				<div class="dropdown-content">
					<?php if ($this->session->userdata('user') == '') { ?>
						<a href="<?php echo base_url(); ?>homepembeliController/index/<?php echo $this->session->userdata('id1'); ?>">Home</a>
						<a href="<?php echo base_url(); ?>gruppembeliController/index/<?php echo $this->session->userdata('id1'); ?>">Grup Saya</a>
					<?php } ?>
					<?php if ($this->session->userdata('user1') == '') { ?>
						<a href="<?php echo base_url('homepenjualController/index/'); ?><?php echo $this->session->userdata('id'); ?>">Home</a>
						<a href="<?php echo base_url('detailController/index/'); ?><?php echo $this->session->userdata('id'); ?>">Pesanan</a>
					<?php } ?>
					<a href="<?php echo base_url(); ?>loginpembeliController/logout">Logout</a>
				</div>
			</div>
		</div>
		<p class="context">Pesanan</p>
		<hr style="border-width: 3px; margin-bottom: 5%; width: 50%;">
		<div class="scroll">
			<?php $rekapTotalHarga = 0; ?>
			<?php $no = 1;
			foreach ($detailP as $dp) :
			?>
				<div class="col">
					<div class="card">
						<div class="row">
							<div class="fstext">
								<p><?php echo $dp['nama_barang']; ?> <?php echo $dp['jumlah_barang'] ?> <?php echo $dp['satuan']; ?></p>
							</div>
							<div class="sctext">
								<p>Rp. <?php echo $dp['totalbarang']; ?></p>
							</div>
						</div>
					</div>
				</div>
				<?php $rekapTotalHarga = $rekapTotalHarga + $dp['totalbarang']; ?>
			<?php endforeach; ?>
		</div>
		<div class="row">
			<div class="width1">
				<p>TOTAL</p>
			</div>
			<div class="width2">
				<p>Rp. <?php echo $rekapTotalHarga; ?></p>
			</div>
		</div>
		<hr style="border-width: 3px; margin-bottom: 5%; width: 50%;">
	</div>
</body>

</html>