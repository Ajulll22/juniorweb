<?= $this->extend('layouts/admin_template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Nilai Inggris</th>
                        <th>Nilai MTK</th>
                        <th>Status</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tbody>
                <?php 
                foreach($siswa as $key => $data) { ?>
                <tr>
                <td><?php echo $data['siswa_nama']; ?></td>
                <td><?php echo $data['nilai_inggris']; ?></td>
                <td><?php echo $data['nilai_mtk']; ?></td>
                <td><?php echo $data['status']; ?></td>
                <td><a class="btn btn-primary" href="<?php echo base_url('/Admin/terima/'.$data['siswa_id']); ?>">Terima</a> <a class="btn btn-primary" href="<?php echo base_url('/Admin/tolak/'.$data['siswa_id']); ?>">Tolak</a> <a class="btn btn-primary" href="<?php echo base_url('/Admin/cadang/'.$data['siswa_id']); ?>">Cadang</a></td>
                </tr>
                <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>

<?= $this->endSection(); ?>