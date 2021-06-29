<?= $this->extend('layouts/siswa_template'); ?>

<?= $this->section('content'); ?>
<!-- Page Heading -->
<div class="container">
    <div class="d-sm-flex align-items-center  mb-4">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1 class="h3 mb-0 text-gray-800">Detail Pendaftaran</h1>
    </div>
    <div class="align-items-center justify-content-between mt-0 mb-4">
        <a href="<?php echo base_url('siswa/cetakdetail'); ?>" class="btn btn-info">Cetak <i class="fas fa-fw fa-print"></i></a>
    </div>

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-10 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row">Nama Lengkap</th>
                                <td>: <?php echo $siswa['siswa_nama']; ?> </td>
                            </tr>
                            <tr>
                                <th scope="row">NISN</th>
                                <td>: <?php echo $siswa['siswa_nisn']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Tempat Lahir</th>
                                <td>: <?php echo $siswa['siswa_tempat']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Tanggal Lahir</th>
                                <td>: <?php echo $siswa['tanggal_lahir']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Jenis Kelamin</th>
                                <td>: <?php echo $siswa['siswa_jk']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Agama</th>
                                <td>: <?php echo $siswa['siswa_agama']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Sekolah Asal</th>
                                <td>: <?php echo $siswa['siswa_sekolah']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Status</th>
                                <td>: <?php echo $siswa['status']; ?></td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>