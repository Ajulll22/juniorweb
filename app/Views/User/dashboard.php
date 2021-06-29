<?= $this->extend('layouts/siswa_template'); ?>

<?= $this->section('content'); ?>
<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
    <img class="w3-image" src="<?php echo base_url(); ?>/img/kelas.jpg" alt="Kelas" width="1600" height="800">
    <div class="w3-display-bottomleft w3-padding-large w3-opacity">
        <h1 class="w3-xxlarge">SMA Negeri Ciledug</h1>
    </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">
    <!-- About Section -->
    <div class="w3-row w3-padding-64" id="about">
        <div class="w3-col m6 w3-padding-large w3-hide-small">
            <img src="<?php echo base_url(); ?>/img/buku.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
        </div>

        <div class="w3-col m6 w3-padding-large">
            <h1 class="w3-center">Visi</h1><br>
            <h5 class="w3-center">MENJADI SEKOLAH TERUNGGUL BERWAWASAN NASIONAL, BERSAING SECARA GLOBAL, BERBUDI PEKERTI LUHUR DAN RELIGIUS</h5>
        </div>
    </div>

    <hr>

    <!-- Menu Section -->
    <div class="w3-row w3-padding-64" id="menu">
        <div class="w3-col l6 w3-padding-large">
            <h1 class="w3-center">Misi</h1><br>
            <h5>1. MEWUJUDKAN PENCAPAIAN DELAPAN STANDAR NASIONAL PENDIDIKAN.</h5>
            <h5>2. MEWUJUDKAN SUMBER DAYA MANUSIA (SDM) YANG UNGGUL DAN BERBUDI PEKERTI LUHUR.</h5>
            <h5>3. MENGEMBANGKAN SELURUH POTENSI SISWA SECARA OPTIMAL BAIK DALAM BIDANG AKADEMIS MAUPUN NON-AKADEMIS.</h5>
        </div>

        <div class="w3-col l6 w3-padding-large">
            <img src="<?php echo base_url(); ?>/img/rak.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
        </div>
    </div>
    <!-- End page content -->
</div>
<?= $this->endSection(); ?>