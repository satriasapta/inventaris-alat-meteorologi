<?= $this->extend('admin/templateadmin'); ?>

<?= $this->section('content'); ?>
<?php $index = 1 ?>

<div class="data-table-area">

    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <div class="alert-list">
                            <?php if (session()->getFlashdata('success')) : ?>
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <?= session()->getFlashdata('success'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <h2>Data Log Book Harian</h2>
                        <p>Log Book Harian BMKG Klas I Bandara Radin Inten II Bandar Lampung</p>
                    </div>

                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Petugas</th>
                                    <th>Tanggal</th>
                                    <th>Nama Alat</th>
                                    <th>Operasi</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($lb as $l) : ?>
                                    <tr>
                                        <td><?= $index++; ?></td>
                                        <td><?= $l['nama_petugas']; ?></td>
                                        <td><?= $l['tanggal']; ?></td>
                                        <td><?= $l['nama_alat']; ?></td>
                                        <td><?= $l['operasi']; ?></td>
                                        <td><?= $l['keterangan']; ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>