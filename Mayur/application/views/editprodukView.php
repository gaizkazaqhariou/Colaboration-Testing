<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/register.css"> 
	<title>Penjual-Edit Produk</title>
</head>
<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
	<?php foreach($produk as $pr){?> 
		<form class="box" action="<?php echo base_url('editprodukController/editProduk');?>" method="POST" enctype="multipart/form-data">
			<h1 class="h1"><b>Edit Produk</b></h1>
			<input type="hidden" name="id_barang" value="<?php echo $pr->id_barang ?>">
			<input type="text" name="nama_barang" value="<?php echo $pr->nama_barang ?>">
			<input type="text" name="harga" value="<?php echo $pr->harga?>">
			<input type="text" name="satuan" value="<?php echo $pr->satuan?>">
			<input type="file" name="foto_barang">
			<input type="submit" name="login" value="Edit Produk">
		</form>
	<?php } ?>
</body>
</html>