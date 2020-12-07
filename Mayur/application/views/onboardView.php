<!DOCTYPE html>
<html>
  <title>Umum-Onboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/onboard.css">

  <style>
    .mySlides {width: 100%; height: 100%;}
    .w3-left, .w3-right, .w3-badge {cursor:pointer;}
    .w3-badge {height:20px;width:20px;padding:0;}
    body, html {
      height: 100%;
      width: 100%;
      margin: 0px;
  }
  </style>
  <body>

  <div style="width:100%; height: 100%;">
    <div class="mySlides">
      <img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
      <div class="box">
        <p class="selamat">Selamat Datang di Mayur!</p>
        <h5 class="h1" style="width: 30%; margin-left: 35%; margin-top: -2%;"><b>Mayur adalah aplikasi penghubung antara anda dan tukang sayur</b></h5>   
      </div> 
    </div>
    <div class="mySlides">
      <img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
      <div class="box">
        <img src="<?php echo base_url();?>assets/img/onboard2.png" style="height: 200px; width: 200px; margin-top: 5%;">
        <h5 class="h1" style="width: 50%; margin-left: 25%; margin-top: 4%;"><b>Anda dapat menemukan berbagai macam bahan dapur dari penjual sekitar anda tanpa keluar rumah</b></h5>  
      </div> 
    </div>
    <div class="mySlides">
      <img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
      <div class="box">
        <img src="<?php echo base_url();?>assets/img/onboard3.png" style="height: 210px; width: 300px; margin-top: 5%;">
        <h5 class="h1" style="width: 30%; margin-left: 35%; margin-top: 4%;"><b>Pilih bahan dan rencanakan masakan anda tanpa ribet</b></h5>   
      </div> 
    </div>
   <div class="mySlides">
      <img src="<?php echo base_url();?>assets/img/sayur.jpg" class="backgroundImage">
      <div class="box">
        <p class="selamat" style="margin-top: 5%; font-size: 45pt;">Mayur</p>
        <img src="<?php echo base_url();?>assets/img/background.png" style="height: 150px; width: 150px; margin-top: -5%; margin-bottom: 4%;">
        <h5 class="h1" style="width: 30%; margin-left: 35%; margin-top: -4%;"><b>Yuk masak sendiri!</b></h5>
        <br>
        <br>
        <br>
        <button class="tombol" type="button" onclick="window.location='<?php echo base_url()?>chooserController/index';">Mulai Aplikasi</button> 
      </div> 
    </div>
    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
      <!-- <div style="width: 45px; height: 45px; margin-left: -1%; margin-bottom: -2.7%; background-color: rgba(0,0,0,0.8); border-radius: 100%;"></div> -->
      <!-- <div class="w3-left w3-hover-text-khaki"  style="margin-top: -25%; color: white; font-weight: bolder; font-size: 30pt; color: black;" onclick="plusDivs(-1)">&#10094;</div> -->
      <!-- <div style="width: 45px; height: 45px; margin-left: 97.5%; margin-bottom: -2.7%; background-color: rgba(0,0,0,0.8); border-radius: 100%;"></div> -->
     <!--  <div class="w3-right w3-hover-text-khaki"  style="margin-top: -25%; color: white; font-weight: bolder; font-size: 30pt; color: black;" onclick="plusDivs(1)">&#10095;</div> -->
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
    </div>
  </div>

  <script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function currentDiv(n) {
      showDivs(slideIndex = n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
      }
      x[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " w3-white";
      }
  </script>

  </body>
</html> 
