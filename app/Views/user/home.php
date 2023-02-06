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
                <?php foreach ($alat as $a) : ?>
                <div class="card h-100 bg-secondary text-white" style="max-width: 300px; margin: 10px;">
                    <img class="card-img mt-3" src="<?= base_url('uploads/'.$a['gambar_alat']); ?>" alt="Card image">
                    <div class="text-center mt-4">
                        <h5 class="card-title"><?= $a['nama_alat']; ?></h5>
                        <p class="card-text"><?= $a['kategori_alat']; ?></p>
                    </div>
                    <div class="card-footer p-4 pt-4 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark text-white border-dark mt-auto" href="#">Detail</a></div>
                    </div>
                </div>
               <?php endforeach ?>
            </div>
        </div>
    </section>

</body>

</html>


<?= $this->endSection(); ?>