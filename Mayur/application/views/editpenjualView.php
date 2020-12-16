<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/register.css"> 
	<title>Umum-Register Page</title>
</head>
<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
	<?php foreach($penjual as $p){?> 
		<form class="box" action="<?php echo base_url('adminController/update_penjual');?>" method="POST" enctype="multipart/form-data">
			<h1 class="h1"><b>Edit Penjual</b></h1>
			<input type="hidden" name="id_penjual" value="<?php echo $p->id_penjual ?>">
			<input type="text" name="nama_penjual" placeholder="Nama Lengkap" required="required" value="<?php echo $p->nama_penjual ?>">
			<input type="text" name="no_hp_penjual" placeholder="Nomer HP" required="required" value="<?php echo $p->no_hp_penjual ?>">
			<input type="text" name="alamat_penjual" placeholder="Alamat Lengkap" required="required" value="<?php echo $p->alamat_penjual ?>">
			<input type="password" name="pass_penjual" placeholder="Password" required="required" value="<?php echo $p->pass_penjual ?>">
			<input type="text" name="kategori" placeholder="Kategori" required="required" value="<?php echo $p->kategori ?>">
			<input type="text" name="deskripsi" placeholder="Deskripsi" required="required" value="<?php echo $p->deskripsi ?>">
			<input type="file" name="foto_penjual" value="<?php echo $p->foto_penjual ?>">
			<input type="submit" name="login" value="Edit">
		</form>
	<?php } ?>
</body>
</html>