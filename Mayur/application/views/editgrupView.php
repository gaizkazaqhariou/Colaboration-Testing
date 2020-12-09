<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/register.css"> 
	<title>Penjual-Edit Grup</title>
</head>
<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
	<?php foreach($grup as $gr){?> 
		<form class="box" action="<?php echo base_url('editgrupController/editGrup');?>" method="POST">
			<h1 class="h1"><b>Edit Grup</b></h1>
			<input type="hidden" name="id_grup" value="<?php echo $gr->id_grup ?>">
			<input type="text" name="nama_grup" value="<?php echo $gr->nama_grup ?>">
			<input type="text" name="kode_grup" value="<?php echo $gr->kode_grup ?>">
			<input type="file" name="">
			<input type="submit" name="login" value="Edit Grup">
		</form>
	<?php } ?>
</body>
</html>