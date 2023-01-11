<?= $this->extend('templates'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">

    <div class="card">
        <h5 class="card-header">Detail Alat</h5>
        <div class="card-body">

            <div class="row">
                <div class="col-md-4">
                    <img src="<?= base_url('img/termometer.jpeg'); ?>" class="card-img-top">
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <td class="col-md-4">Nama Alat</td>
                            <td><strong>: termometer</strong></td>
                        </tr>

                        <tr>
                            <td>Kelompok Alat</td>
                            <td><strong>: Digital</strong></td>
                        </tr>

                        <tr>
                            <td>Kondisi</td>
                            <td><strong>: Layak</strong></td>
                        </tr>

                        <tr>
                            <td>Tahun Pembelian</td>
                            <td><strong>:28 Mei 2022</strong></td>
                        </tr>
                        <tr>
                            <td>Kalibrasi terakhir</td>
                            <td><strong>:28 Juni 2022</strong></td>
                        </tr>
                        <tr>
                            <td>Lokasi Alat</td>
                            <td><strong><button class="btn btn-dark mb-3" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">3</button>
                                    <div class="collapse" id="collapseExample1">

                                        <div class="card card-body">
                                            <img src="<?= base_url('img/tmnalat.jpeg'); ?>" class="card-img-top">

                                        </div>
                                    </div>
                                </strong></td>
                        </tr>
                        <tr>
                        </tr>
                    </table>
                </div>
            </div>
            <button class="btn btn-info mt-3" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Detail</button>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>