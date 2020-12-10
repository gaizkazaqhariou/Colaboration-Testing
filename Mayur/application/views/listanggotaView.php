<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/listanggota.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Penjual-Daftar Anggota</title>
</head>

<body>
	<img src="<?php echo base_url(); ?>assets/img/sayur.jpg" class="backgroundImage">
	<div class="box">
		<div class="box1">
			<div class="box1">
				<div class="div1">
					<p class="teks"><?php echo $namaG['nama_grup']; ?></p>
				</div>
				<div class="dropdown">
					<button class="dropbtn"> <i class="fas fa-bars"></i> </button>
					<div class="dropdown-content">
						<a href="<?php echo base_url('homepenjualController/index/'); ?><?php echo $this->session->userdata('id'); ?>">Home</a>
						<a href="<?php echo base_url('detailController/index/'); ?><?php echo $this->session->userdata('id'); ?>">Pesanan</a>
						<a href="<?php echo base_url(); ?>loginController/logout">Logout</a>
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>
		<div class="scroll">
			<?php $no = 1;
			foreach ($anggota as $ag) :
			?>
				<div class="box3">
					<img src="<?php echo base_url(); ?>assets/img/pembeli.png" class="recimg">
					<p class="catdesc">
						<?php echo $ag['nama_pembeli']; ?> <br> <?php echo $ag['alamat_pembeli']; ?>
					</p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</body>

</html>