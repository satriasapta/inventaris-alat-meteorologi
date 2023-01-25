<?= $this->extend('admin/templateadmin'); ?>

<?= $this->section('content'); ?>
<?php $index = 1 ?>
<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <h2>Data Log Book Harian</h2>
                        <p>Log Book Harian BMKG Klas I Bandara Radin Inten II Bandar Lampung</p>
                    </div>
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Pengecekan</th>
                                    <th>Jumlah Alat Operasional</th>
                                    <th>Jumlah Alat Tidak Operasional</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($alat as $a) : ?>
                                    <tr>
                                        <td><?= $index++; ?></td>
                                        <td><?= $a['nama_alat']; ?></td>
                                        <td><?= $a['kategori_alat']; ?></td>
                                        <td><?= $a['kondisi_alat']; ?></td>
                                        <td><?= $a['tahun_pembelian']; ?></td>
                                        <td><?= $a['kalibrasi']; ?></td>
                                        <td>
                                            <div class="material-design-btn">
                                                <form>
                                                    <a href="<?= base_url('/admin/detailalat/' . $a['id_alat']); ?>" class="btn notika-btn-cyan waves-effect">Detail</a>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Pengecekan</th>
                                    <th>Jumlah Alat Operasional</th>
                                    <th>Jumlah Alat Tidak Operasional</th>
                                    <th>Aksi</th>
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