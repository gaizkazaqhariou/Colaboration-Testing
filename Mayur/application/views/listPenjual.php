<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/listanggota.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Penjual-Daftar Anggota</title>
</head>

<body>
    <img src="<?php echo base_url(); ?>assets/img/sayur.jpg" class="backgroundImage">
    <div class="box">
        <div class="box1">
            <div class="box1">
                <div class="div1">
                    <p class="teks">PENJUAL MAYUR</p>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"> <i class="fas fa-bars"></i> </button>
                    <div class="dropdown-content">
                        <a href="<?php echo base_url(); ?>loginController/logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="scroll">
            <?php $no = 1;
            foreach ($penjual as $p) :
            ?>
                <div class="box3">
                    <img src="<?php echo base_url(); ?>assets/img/penjual.png" class="recimg">
                    <p class="catdesc">
                        Nama : <?php echo $p['nama_penjual']; ?> <br>
                        Password : <?php echo $p['pass_penjual']; ?> <br>
                        Alamat : <?php echo $p['alamat_penjual']; ?> <br>
                        Nomer HP : <?php echo $p['no_hp_penjual']; ?> <br>
                        Kategori Jualan : <?php echo $p['kategori']; ?> <br>
                        Deskripsi : <?php echo $p['deskripsi']; ?> <br>
                    </p>
                    <button class="plus" onclick="window.location='<?php echo base_url('adminController/editpenjual/'); ?><?php echo $p['id_penjual']; ?>';"> <i class="fas fa-pencil-alt"></i> </button>
                    <button class="plus" style="margin-left: 3%;" onclick="window.location='<?php echo base_url('adminController/hapuspenjual/'); ?><?php echo $p['id_penjual']; ?>';"> <i class="fas fa-trash-alt"></i> </button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>