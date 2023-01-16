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
                <div id="accordion">
  <div class="card mt-3">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
        </div>
    </div>
    <?= $this->endSection(); ?>