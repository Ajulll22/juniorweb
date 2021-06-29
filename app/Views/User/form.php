<?= $this->extend('layouts/siswa_template'); ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <br>
                    <br>
                    <br>
                    <h3 class="m-0 text-dark">Form Pendaftaran</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <?php
                    $errors = session()->getFlashdata('errors');
                    if (!empty($errors)) { ?>
                        <div class="alert alert-danger" role="alert">
                            Whoops! Ada kesalahan saat input data, yaitu:
                            <ul>
                                <?php foreach ($errors as $error) : ?>
                                    <li><?= esc($error) ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php } ?>

                    <form action="<?php echo base_url() ?>/User/daftar" method="post">
                        <div class="card align-center">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <?= csrf_field(); ?>
                                        <div class="form-group">
                                            <label for="nama">Nama Lengkap</label>
                                            <div>
                                                <input type="text" class="form-control" id="siswa_nama" name="siswa_nama" value="<?= old('siswa_nama'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nisn">NISN</label>
                                            <div>
                                                <input type="number" class="form-control" id="nisn" name="siswa_nisn" value="<?= old('nisn'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tempat_lahir">Tempat Lahir</label>
                                            <div>
                                                <input type="text" class="form-control" id="tempat_lahir" name="siswa_tempat" value="<?= old('tempat_lahir'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir:</label>
                                            <input type="date" class="form-control" id="tgl_lahir" name="tanggal_lahir" value="<?= old('tgl_lahir'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <select class="form-control select2" style="width: 100%;" id="siswa_jk" name="siswa_jk" value="<?= old('jenis_kelamin'); ?>">
                                                <option disabled selected>-- Pilh Jenis Kelamin --</option>
                                                <option value="Pria">Pria</option>
                                                <option value="Wanita">Wanita</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <div>
                                                <input type="text" class="form-control" id="agama" name="siswa_agama" value="<?= old('agama'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="asal_sekolah">Asal Sekolah</label>
                                            <div>
                                                <input type="text" class="form-control" id="asal_sekolah" name="siswa_sekolah" value="<?= old('asal_sekolah'); ?>">
                                            </div>
                                            <div>
                                                <input type="hidden" class="form-control" id="asal_sekolah" name="user_id" value="<?php echo $user['user_id']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="mtk">Nilai MTK</label>
                                            <div>
                                                <input type="number" class="form-control" id="mtk" name="mtk" value="<?= old('mtk'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inggris">Nilai English</label>
                                            <div>
                                                <input type="number" class="form-control" id="inggris" name="inggris" value="<?= old('inggris'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info float-right">Daftar</button>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<?= $this->endSection(); ?>