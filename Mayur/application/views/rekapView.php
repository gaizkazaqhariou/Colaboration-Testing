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
			<img src="<?php echo base_url();?>assets/upload/<?php echo $this->session->userdata("foto1");?>" class="circleimg">
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
								<p><?php echo $dp['nama_barang']; ?> <?php echo $dp['jumlah_barang'] ?> <?php echo $dp['satuan']; ?> <button> <?php $tomorrow = date("Y-m-d", strtotime("+1 day"));
																																				$date = date('Y-m-d');
																																				if ($dp['tanggal_pesan'] == $date) {
																																					echo 'HARI INI !';
																																				} else if ($dp['tanggal_pesan'] == $tomorrow) {
																																					echo 'BESOK';
																																				} else {
																																					echo 'selesai';
																																				} ?></button></p>
							</div>
							<div class="sctext">
								<p>Rp. <?php echo $dp['totalbarang']; ?></p>
							</div>
							<div class="thtext">
								<button class="plus" onclick="window.location='<?php echo base_url('rekapController/hapus/'); ?><?php echo $dp['id_pesanan']; ?>/<?php echo $dp['id_grup']; ?>/<?php echo $dp['id_pembeli']; ?>';" style="margin-top: 7%;"> <i class="fas fa-trash-alt" ></i> </button>
							</div>
						</div>
					</div>
				</div>
				<?php $rekapTotalHarga = $rekapTotalHarga + $dp['totalbarang']; ?>
			<?php endforeach; ?>
			<?php $hargaHari = 0;
			foreach ($hargaH as $hh) :
				$hargaHari = $hargaHari + $hh['totalbarang'];
			endforeach;
			?>
		</div>
		<div class="row">
			<div class="width1">
				<p>TOTAL Belanja hari ini Rp. <?php echo $hargaHari; ?></p>
			</div>
			<div class="width2">
				<p>Total Belanja Keseluruhan Rp. <?php echo $rekapTotalHarga; ?></p>
			</div>
		</div>
		<hr style="border-width: 3px; margin-bottom: 5%; width: 50%;">
	</div>
</body>

</html>