<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/grup.css"> 
	<title>Welcome Page</title>
</head>
<body>
	<img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
	<form class="box" action="proses_login.php" method="POST">
		<h5>Grup Saya</h5>
			<div class="box2" action="proses_login.php" method="POST">
				<div style="display: flex; flex-direction: column;">
					<div class="content">
						<div style="display: flex; flex-direction: row;">
							<img src="<?php echo base_url();?>assets/img/penjual.png" class="imageContent">
							<p class="textContent">Grup Blok A</p>
							<p class="text2Content">Kode Grup: CER1W15</p>
						</div>
					</div>
					<!-- <div class="greenContent"> -->
						<!-- <p class="textContent">Kode: CER1W15</p> -->
					<!-- </div> -->
					<div class="content">
						<div style="display: flex; flex-direction: row;">
							<img src="<?php echo base_url();?>assets/img/pembeli.png" class="imageContent">
							<p class="textContent">Grup Blok B</p>
							<p class="text2Content">Kode Grup: CER4W46</p>
						</div>
					</div>
					<!-- <button class="myBtn" title="Go to top">&#8743;</button> -->
				</div>
			</div>
	</form>
</body>
</html>

