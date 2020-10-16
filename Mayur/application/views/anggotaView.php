<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/anggota.css"> 
	<title>Welcome Page</title>
</head>
<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
	<form class="box" action="proses_login.php" method="POST">
		<h5>Anggota Grup</h5>
			<div class="box2" action="proses_login.php" method="POST">
				<div style="display: flex; flex-direction: column;">
					<div class="content">
						<div style="display: flex; flex-direction: row;">
							<img src="<?php echo base_url();?>assets/img/penjual.png" class="imageContent">
							<p class="textContent">Bu Aya Wijayaningrum</p>
						</div>
					</div>
					<div class="content">
						<div style="display: flex; flex-direction: row;">
							<img src="<?php echo base_url();?>assets/img/pembeli.png" class="imageContent">
							<p class="textContent">Bu Ayu Setyaningrum</p>
						</div>
					</div>
				</div>
			</div>
	</form>
</body>
</html>

