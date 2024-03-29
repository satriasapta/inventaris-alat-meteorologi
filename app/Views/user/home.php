<?= $this->extend('templates'); ?>

<?= $this->section('content'); ?>

<body>
    <!-- Header-->
    <header class="bg-light py-1">
    <div class="notika-status-area">
    <div class="container">
        <div class="row" style="margin-bottom: 30px;">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner">
                    <div class="website-traffic-ctn text-center">
                        <h2><span class="counter text-info"><?= $dataAlat; ?></span></h2>
                        <p>Semua Alat</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30">
                    <div class="website-traffic-ctn text-center">
                        <h2><span class="counter text-success"><?= $dataKondisi; ?></span></h2>
                        <p>Alat Baik</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                    <div class="website-traffic-ctn text-center">
                        <h2><span class="counter text-danger"><?= $dataKondisi2; ?></span></h2>
                        <p>Alat Rusak Ringan</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                    <div class="website-traffic-ctn text-center">
                        <h2><span class="counter text-dark"><?= $dataKondisi3; ?></span></h2>
                        <p>Alat Rusak Berat</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- <div class="container px-4 px-lg-5 my-5"> -->
      <!--  <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 30px;">
        

             <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo base_url('img/slider1.jpg') ?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('img/slider2.jpg') ?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('img/slider3.jpg') ?>" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div> -->

            <!-- <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">BMKG x SIALMET</h1>
            </div> 
            </div>
        </div>-->
    </header>
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php foreach ($rusakberat as $a) : ?>
                <div class="card h-100 bg-secondary text-white" style="max-width: 300px; margin: 10px;">
                    <img class="card-img mt-3" src="<?= base_url('uploads/' . $a['gambar_alat']); ?>" alt="Card image">
                    <div class="text-center mt-4" style="color: black;">
                        <h5 class="card-title"><?= $a['nama_alat']; ?></h5>
                        <p class="card-text"><?= $a['kategori_alat']; ?></p>
                        <p class="card-text"><?= $a['kondisi_alat']; ?></p>
                    </div>
                    <div class="card-footer p-4 pt-4 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark text-white border-dark mt-auto" href="<?= base_url('detailalat/' . $a['id_alat']); ?>">Detail</a></div>
                    </div>
                </div>
            <?php endforeach ?>
            <?php foreach ($rusak as $a) : ?>
                <div class="card h-100 bg-secondary text-white" style="max-width: 300px; margin: 10px;">
                    <img class="card-img mt-3" src="<?= base_url('uploads/' . $a['gambar_alat']); ?>" alt="Card image">
                    <div class="text-center mt-4" style="color: #ad2617;">
                        <h5 class="card-title"><?= $a['nama_alat']; ?></h5>
                        <p class="card-text"><?= $a['kategori_alat']; ?></p>
                        <p class="card-text"><?= $a['kondisi_alat']; ?></p>
                    </div>
                    <div class="card-footer p-4 pt-4 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark text-white border-dark mt-auto" href="<?= base_url('detailalat/' . $a['id_alat']); ?>">Detail</a></div>
                    </div>
                </div>
            <?php endforeach ?>
            <?php foreach ($baik as $a) : ?>
                <div class="card h-100 bg-secondary text-white" style="max-width: 300px; margin: 10px;">
                    <img class="card-img mt-3" src="<?= base_url('uploads/' . $a['gambar_alat']); ?>" alt="Card image">
                    <div class="text-center mt-4">
                        <h5 class="card-title"><?= $a['nama_alat']; ?></h5>
                        <p class="card-text"><?= $a['kategori_alat']; ?></p>
                        <p class="card-text"><?= $a['kondisi_alat']; ?></p>
                    </div>
                    <div class="card-footer p-4 pt-4 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark text-white border-dark mt-auto" href="<?= base_url('detailalat/' . $a['id_alat']); ?>">Detail</a></div>
                    </div>
                </div>
            <?php endforeach ?>
            
        </div>
    </div>

</body>

</html>


<?= $this->endSection(); ?>