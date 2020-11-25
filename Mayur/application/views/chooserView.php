<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/chooser.css">
	<title>User Chooser Page</title>
</head>

<body>
	<img src="<?php echo base_url(); ?>assets/img/sayur.jpg" class="backgroundImage">
	<div class="box" method="POST">
		<h1 class="h1"><b>Siapa kamu?</b></h1>
		<div class="flexBox">
			<div class="imageBox">
				<button class="buttonChooser">
					<a href="<?php echo base_url(); ?>penjualController"><img src="<?php echo base_url(); ?>assets/img/penjual.png" class="imgChooser"></a>
					<h4 class="textBox">Penjual</h4>
				</button>
			</div>
			<div class="imageBox">
				<button class="buttonChooser" action="<?php echo base_url(); ?>pembeliController">
					<a href="<?php echo base_url(); ?>pembeliController"><img src="<?php echo base_url(); ?>assets/img/pembeli.png" class="imgChooser"></a>
					<h4 class="textBox">Pembeli</h4>
				</button>
			</div>
		</div>
	</div>
</body>

</html>