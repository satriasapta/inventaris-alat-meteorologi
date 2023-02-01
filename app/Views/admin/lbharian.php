<?= $this->extend('admin/templateadmin'); ?>

<?= $this->section('content'); ?>
<?php $index = 1 ?>

<div class="data-table-area">
    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success m-3" role="alert">
            <?= session()->getFlashdata('success'); ?>
        </div>
    <?php endif; ?>
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <form action="" method="get" autocomplete="off">
                        <div class="basic-tb-hd">
                            <h2>Data Log Book Harian</h2>
                            <p>Log Book Harian BMKG Klas I Bandara Radin Inten II Bandar Lampung</p>
                        </div>
                        <div id="data-table-basic_filter" class="dataTables_filter">
                        <div class="input-group date nk-int-st">
                            <?php $request = \Config\Services::request();; ?>
                            <input type="date" name="keyword" class="form-control" value="<?= $request->getGet('keyword'); ?>" placeholder="yyyy-mm-dd" required>
                        </div>

                            <button type="submit" class="notika-icon notika-search"></button>
                        </div>
                        <?php
                        $request = \Config\Services::request();
                        $keyword = $request->getGet('keyword');
                        if ($keyword != '') {
                            $param = "?keyword=" . $keyword;
                        } else {
                            $param = '';
                        } ?>
                        <div>
                            <div class="breadcomb-report">
                                <a href="<?= base_url('admin/exportlogbook'.$param); ?>"><i class="notika-icon notika-sent"></i></a>
                            </div>
                        </div>

                    </form>
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <td>Nama Petugas </td>
                                    <td><?= $logbook['nama_petugas'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Pengecekan </td>
                                    <td><?= $logbook['tanggal']; ?></td>
                                </tr>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Alat</th>
                                    <th>Kondisi</th>
                                    <th>Tanggal</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($lb as $l) : ?>
                                    <tr>
                                        <td><?= $index++; ?></td>
                                        <td><?= $l['nama_alat']; ?></td>
                                        <td><?= $l['kondisi']; ?></td>
                                        <td><?= $l['tanggal']; ?></td>
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