<?= $this->extend('admin/templateadmin'); ?>

<?= $this->section('content'); ?>
<?php $index = 1 ?>
<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <?php if (session()->has('success')) : ?>
                            <p class="text-success"><?= session()->getFlashdata('success'); ?></p>
                        <?php endif; ?>
                        <?php $validation = session()->getFlashdata('validation'); ?>
                        <h2>Daftar Alat</h2>
                        <p>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</p>
                    </div>
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Alat</th>
                                    <th>Kelompok Cara Kerja Alat</th>
                                    <th>Kondisi</th>
                                    <th>Tahun Pembelian</th>
                                    <th>Kalibrasi Terakhir</th>
                                    <th>

                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($alat as $a) : ?>
                                    <tr>
                                        <td><?= $index; ?></td>
                                        <td><?= $a['nama_alat']; ?></td>
                                        <td><?= $a['kategori_alat']; ?></td>
                                        <td><?= $a['kondisi_alat']; ?></td>
                                        <td><?= $a['tahun_pembelian']; ?></td>
                                        <td><?= $a['kalibrasi']; ?></td>
                                        <td>
                                            <a href="<?= base_url('/admin/detailalat/' . $a['id_alat']); ?>" class="btn btn-sm btn-info">Detail</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Alat</th>
                                    <th>Jenis Alat</th>
                                    <th>Kelompok Cara Kerja Alat</th>
                                    <th>Kondisi</th>
                                    <th>Tahun Pembelian</th>
                                    <th>Kalibrasi Terakhir</th>
                                    <th>

                                    </th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>