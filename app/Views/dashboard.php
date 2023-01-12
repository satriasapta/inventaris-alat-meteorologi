<?= $this->extend('templates'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('img/slider1.jpg'); ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('img/slider2.jpg'); ?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row text-center mt-3">
            <div class="card ml-3 mb-3" style="width: 16rem;">
                <img src="<?= base_url('img/termometer.jpeg'); ?>" class="card-img-top" width="250" height="325" alt="...">
                <div class="card-body">
                    <h6 class="card-title mb-1">NAMA ALAT SU</h6>
                    <span class="badge badge-pipl badge-success mb-3 mt-4 ">LAYAK ASU</span>
                    <div class="btn btn-sm btn-primary">Tambah ke Perbaikan</div>
                    <div class="btn btn-sm btn-success">Detail</div>
                </div>
            </div>
    </div>
</div>
<?= $this->endSection(); ?>