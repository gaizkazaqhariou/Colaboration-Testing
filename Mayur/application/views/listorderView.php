<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/listorder.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Pembeli-Daftar Pesanan</title>
</head>

<body>
	<img src="<?php echo base_url(); ?>assets/img/sayur.jpg" class="backgroundImage">
	<div class="box">
		<?php $no = 1;
			foreach ($grupJ as $gj) :
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
		<p class="context">Pesanan</p>
		<hr style="border-width: 3px; margin-bottom: 5%; width: 50%;">
		<div class="scroll">
			<div class="col">
				<?php $rekapTotalHarga = 0; ?>
				<?php $no = 1;
				foreach ($listP as $lp) :
				?>
					<div class="card">
						<div class="row">
							<div class="fstext">
								<p><?php echo $lp['nama_barang']; ?> <?php echo $lp['jumlah_barang']; ?> <?php echo $lp['satuan']; ?></p>
							</div>
							<div class="sctext">
								<p>Rp. <?php echo $lp['harga']; ?></p>
							</div>
							<div class="thtext">
								<button class="plus" onclick="window.location='<?php echo base_url('listorderController/edit/'); ?><?php echo $lp['id_pesanan'];?>/<?php echo $lp['id_grup'];?>/<?php echo $lp['id_barang'];?>/<?php echo $lp['id_pembeli'];?>';"> <i class="fas fa-pencil-alt"></i> </button>
								<button class="plus" onclick="window.location='<?php echo base_url('listorderController/hapus/'); ?><?php echo $lp['id_pesanan'];?>/<?php echo $lp['id_grup'];?>/<?php echo $lp['id_barang'];?>';"> <i class="fas fa-trash-alt"></i> </button>
							</div>
						</div>
					</div>
					<?php $rekapTotalHarga = $rekapTotalHarga + $lp['totalbarang']; ?>
				<?php endforeach; ?>
			</div>
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