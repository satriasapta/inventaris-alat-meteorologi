<?= $this->extend('admin/templateadmin'); ?>



<?= $this->section('content'); ?>
<?php $index = 1 ?>

<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <?php if (session()->getFlashdata('success')) : ?>
                            <div class="alert alert-success m-3" role="alert">
                                <?= session()->getFlashdata('success'); ?>
                            </div>
                        <?php endif; ?>
                        <h2>Daftar Alat</h2>
                        <p>Daftar alat yang ada di BMKG Klas I Bandara Radin Inten II Bandar Lampung</p>
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
                                                <form action="<?= base_url('/admin/hapusalat/' . $a['id_alat']); ?>" method="POST" onsubmit="return confirm('Yakin ingin hapus data?')">
                                                    <a href="<?= base_url('/admin/detailalat/' . $a['id_alat']); ?>" class="btn notika-btn-cyan waves-effect">Detail</a>
                                                    <a href="<?= base_url('/admin/editalat/' . $a['id_alat']); ?>" class="btn notika-btn-teal waves-effect">Edit</a>
                                                    <input type="hidden" name="_method" value="delete">
                                                    <button class="btn notika-btn-red waves-effect">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Alat</th>
                                    <th>Kelompok Cara Kerja Alat</th>
                                    <th>Kondisi</th>
                                    <th>Tahun Pembelian</th>
                                    <th>Kalibrasi Terakhir</th>
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

<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div>
                        <div class="breadcomb-report">
                            <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
                        </div>
                    </div>
                    <div class="basic-tb-hd">
                        <h2>Data Log Book Harian</h2>
                        <p>Log Book Harian BMKG Klas I Bandara Radin Inten II Bandar Lampung</p>
                    </div>
                    <div id="data-table-basic_filter" class="dataTables_filter">
                        <label> "Search"
                            <input type="search" class placeholder aria-controls="data-table-basic">
                        </label>
                    </div>
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
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($alat as $a) : ?>
                                    <tr>
                                        <td><?= $index++; ?></td>
                                        <td><?= $a['nama_alat']; ?></td>
                                        <td><?= $a['kategori_alat']; ?></td>
                                        <td><?= $a['kondisi_alat']; ?></td>

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
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>