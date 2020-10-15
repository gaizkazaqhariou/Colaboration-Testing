<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/chooser.css"> 
	<title>User Chooser Page</title>
</head>
<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
	<form class="box" action="proses_login.php" method="POST">
			<h1 class="h1"><b>Siapa kamu?</b></h1>
			<div class="flexBox">
				<div class="imageBox">
					<button class="buttonChooser">
						<img src="<?php echo base_url();?>assets/img/penjual.png" class="imgChooser">
						<h4 class="textBox">Penjual</h4>
					</button>
				</div>
				<div class="imageBox">
					<button class="buttonChooser">
						<img src="<?php echo base_url();?>assets/img/pembeli.png" class="imgChooser">
						<h4 class="textBox">Pembeli</h4>
					</button>
				</div>
			</div>
	</form>
</body>
</html>