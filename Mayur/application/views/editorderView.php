<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/order.css"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Pembeli-Edit Pesanan</title>
</head>
<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
	<?php foreach($pesanan as $ps){?>
	<form class="box" action="<?php echo base_url('editorderController/editOrder'); ?>" method="POST">
			<div class="box1">
				<div class="div1">
					<p class="teks">Nama Grup</p>
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
			<div class="content">
				<input type="hidden" name="id_pesanan" value="<?php echo $ps->id_pesanan ?>">
				<!-- <input type="text" name="" value="<?php echo $produkW['id_barang'];?>"> -->
				<select name="id_barang" class="form-control">
					<!-- <option value="<?php echo $produkW['nama_barang'];?>-<?php echo $produkW['harga'];?>/<?php echo $produkW['satuan'];?>"></option> -->
					<?php echo "<option value='" . $produkW['id_barang'] . "'>" . $produkW['nama_barang'] ."-".$produkW['harga']."/". $produkW['satuan']. " </option>"; ?>
					<?php $no = 1;
					foreach ($produkP as $lp) :
						echo "<option value='" . $lp['id_barang'] . "'>" . $lp['nama_barang'] . " - " . $lp['harga'] . "/" . $lp['satuan'] . "</option>";
					?>
					<?php endforeach; ?>
				</select>
				<input type="hidden" name="id_grup" value="<?php echo $ps->id_grup; ?>">
				<input type="number" name="qty" class="kuantitas" value="<?php echo $ps->jumlah_barang ?>">
			</div>
			<div class="content">
				<p class="context">Waktu</p>
			<select name="waktu" class="form-control">
				<?php if ($ket['keterangan'] == 'hari_ini') { ?>
					<option value="$ket">
						hari ini - <?php $date = date('Y-m-d');
									echo $date;  ?>
					</option>
					<option value="besok">
						besok - <?php $datetime = new DateTime();
								$datetime->modify('+1 day');
								echo $datetime->format('Y-m-d');  ?>
					</option>
				<?php } else if ($ket['keterangan'] == 'besok') { ?>
					<option value="$ket">
						besok - <?php $datetime = new DateTime();
								$datetime->modify('+1 day');
								echo $datetime->format('Y-m-d');  ?>
					</option>
					<option value="hari_ini">
						hari ini - <?php $date = date('Y-m-d');
									echo $date;  ?>
					</option>
				<?php } ?>
			</select>
			</div>
			<div class="content">
				<input type="submit" name="" value="Edit">
			</div>
	</form>
	<?php } ?>
</body>
</html>

