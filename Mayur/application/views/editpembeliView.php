<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/register.css"> 
	<title>Umum-Register Page</title>
</head>
<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
	<?php foreach($pembeli as $p){?> 
		<form class="box" action="<?php echo base_url('adminController/update_pembeli');?>" method="POST" enctype="multipart/form-data">
			<h1 class="h1"><b>Edit Pembeli</b></h1>
			<input type="hidden" name="id_pembeli" value="<?php echo $p->id_pembeli ?>">
			<input type="text" name="nama_pembeli" placeholder="Nama Lengkap" value="<?php echo $p->nama_pembeli ?>">
			<input type="text" name="no_hp_pembeli" placeholder="Nomer HP" value="<?php echo $p->no_hp_pembeli ?>">
			<input type="text" name="alamat_pembeli" placeholder="Alamat Lengkap" value="<?php echo $p->alamat_pembeli ?>">
			<input type="password" name="pass_pembeli" placeholder="Password" value="<?php echo $p->pass_pembeli ?>">
			<input type="file" name="foto_pembeli" value="<?php echo $p->foto_pembeli ?>">
			<input type="submit" name="login" value="Lanjutkan">
		</form>
	<?php } ?>
</body>
</html>