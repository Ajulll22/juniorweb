<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Custom fonts for this template-->
<link href="<?php echo base_url(); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="<?php echo base_url(); ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="<?php echo base_url(); ?>/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    body {
        font-family: "Times New Roman", Georgia, Serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Playfair Display";
        letter-spacing: 5px;
    }
</style>

<body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
            <a href="#home" class="w3-bar-item w3-button">SMANIC</a>
            <!-- Right-sided navbar links. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
                <a href="<?php echo base_url(); ?>/User" class="w3-bar-item w3-button">Home</a>
                <?php if( ($user['status']) == 'belum' ) { 
                ?>
                <a href="<?php echo base_url(); ?>/User/form" class="w3-bar-item w3-button">Daftar</a>
                <?php } ?>
                <?php if( ($user['status']) == 'sudah' ) { 
                ?>
                <a href="<?php echo base_url(); ?>/User/sudah" class="w3-bar-item w3-button">Daftar</a>
                <?php } ?>
                <a href="<?php echo base_url('/User/status/'.$user['user_id']); ?>" class="w3-bar-item w3-button">Status</a>
                <a href="<?php echo base_url(); ?>/Login/logout" class="w3-bar-item w3-button">Logout</a>
            </div>
        </div>
    </div>