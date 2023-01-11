<?php $index = 1 ?>
<?= $this->extend('templates'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success m-3" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
    
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Alat</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama Alat</th>
                            <th>Kelompok alat</th>
                            <th>Kondisi</th>
                            <th>Tahun Pembelian</th>
                            <th>Kalibrasi Terakhir</th>
                            <th>lokasi alat</th>
                            <th>detail alat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                            <tr class="text-center">
                                <td><?= $index ?></td>
                                <td>gambar.jpg</td>
                                <td>Termometer</td>
                                <td>Digital</td>
                                <td>Layak</td>
                                <td>28 mei 2022</td>
                                <td>28 juni 2022</td>
                                <td>lokasi.jpg</td>
                                <td><a href="detail.html">Detail Alat-></a></td>
                                <td>
                                    <form action="#" method="post">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="submit" class="btn btn-danger btn-delete" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            <?php $index++; ?>

                    </tbody>
                </table>
                <a href="#" class="btn btn-primary">Tambah</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>