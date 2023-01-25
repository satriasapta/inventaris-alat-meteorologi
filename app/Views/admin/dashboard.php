<?= $this->extend('admin/templateadmin'); ?>

<?= $this->section('content'); ?>

<div class="notika-status-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow">
                    <div class="website-traffic-ctn">
                        <h2><span class="counter">59,999</span></h2>
                        <p>Total Semua Alat</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <h2><span class="counter">990,000</span>k</h2>
                        <p>Total Alat Operasional</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <h2><span class="counter">410,000</span></h2>
                        <p>Total Alat Tidak Operasional</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <h2><span class="counter">1,000</span></h2>
                        <p>Total Alat Menunggu Perbaikan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

<?= $this->endsection(); ?>