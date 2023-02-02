<?= $this->extend('templates'); ?>

<?= $this->section('content'); ?>

<!DOCTYPE html>
<html lang="en">

<body>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">BMKG x SIALMET</h1>
                <p class="lead fw-normal text-white-50 mb-0">Ini harusnya carousel</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Foto Alat -->
                        <div class="card p-1" style="width: 13.75rem;height: min-content">
                            <img src="<?= base_url('img/termometer.jpeg'); ?>" class="card-img-top" alt="card image cup">
                        </div>
                        <!-- Keterangan -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama Alat -->
                                <h5 class="fw-bolder">Penangkal Petir</h5>
                                <!-- Kelompok Cara Kerja Alat -->
                                Modern
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Detail</a></div>
                        </div>
                    </div>
                </div>

                    <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Foto Alat -->
                        <div class="card p-1" style="width: 13.75rem;height: min-content">
                            <img src="<?= base_url('img/1.png'); ?>" class="card-img-top" alt="card image cup">
                        </div>
                        <!-- Keterangan -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama Alat -->
                                <h5 class="fw-bolder">Thermometer</h5>
                                <!-- Kelompok Cara Kerja Alat -->
                                Mekanik
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Detail</a></div>
                        </div>
                    </div>
                </div>

                <div class="card h-100 bg-secondary text-white">
                    <img class="card-img mt-3" src="<?= base_url('img/termometer.jpeg'); ?>" alt="Card image">
                    <div class="card-img-overlay text-center mt-4">
                        <h5 class="card-title">Thermometer Max-Min</h5>
                        <p class="card-text">Konvensional</p>
                    </div>
                    <div class="card-footer p-4 pt-4 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark text-white border-dark mt-auto" href="#">Detail</a></div>
                    </div>
                </div>
                <div class="card h-100 bg-secondary text-white">
                    <img class="card-img mt-3" src="<?= base_url('img/1.png'); ?>" alt="Card image">
                    <div class="card-img-overlay text-center mt-4">
                        <h5 class="card-title">Babang Tamvan</h5>
                        <p class="card-text">Buaya Baik</p>
                    </div>
                    <div class="card-footer p-4 pt-4 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark text-white border-dark mt-auto" href="#">Detail</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>


<?= $this->endSection(); ?>