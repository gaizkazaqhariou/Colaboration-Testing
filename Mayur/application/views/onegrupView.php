<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/onegrup.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Pembeli-Info Grup</title>
</head>

<body>
	<img src="<?php echo base_url(); ?>assets/img/sayur.jpg" class="backgroundImage">
	<div class="box">
		<?php $no = 1;
		foreach ($nama as $gj) :
		?>
			<div class="box1">
				<div class="div1">
					<p class="teks"><?php echo $gj['nama_grup']; ?></p>
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
		<?php endforeach; ?>
		<p class="category" style="margin-top: 10%;">Pesananku</p>
		<div style="display: flex; flex-direction: row;">
			<div class="box3" style="width: 65%;" type="button" onclick="window.location='<?php echo base_url('listorderController/index/'); ?><?php echo $this->session->userdata('id1'); ?>/<?php echo $id_grup; ?>';">
				<img src="<?php echo base_url(); ?>assets/img/cart1.png" class="recimg" style="margin-left: 5%; border: none;">
				<p class="catdesc">
					Anda memiliki <?php echo $jmlP; ?> pesanan
				</p>
			</div>
		</div>
		<p class="category">Anggota</p>
		<div class="scroll">
			<?php $no = 1;
			foreach ($anggota as $ag) :
			?>
				<div class="box3">
					<img src="<?php echo base_url(); ?>assets/img/pembeli.png" class="recimg" style="margin-left: 5%;">
					<p class="catdesc">
						<?php echo $ag['nama_pembeli']; ?>
					</p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</body>

</html>