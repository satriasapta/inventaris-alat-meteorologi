<?= $this->extend('admin/templateadmin'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

  <div class="container">
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
          <tr>
            <div class="container">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="accordion-wn-wp">
                    <div class="accordion-hd">
                      <h2>Accordion Color Schemes</h2>
                      <p>Make sure to give the available color in accordion collapse's data-attribute <code>'data-collase-color'</code></p>
                    </div>
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="accordion-stn">
                          <div class="panel-group" data-collapse-color="nk-green" id="accordionGreen" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-collapse notika-accrodion-cus">
                              <div class="panel-heading" role="tab">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-one" aria-expanded="true">
                                    Collapse Green #1
                                  </a>
                                </h4>
                              </div>
                              <div id="accordionGreen-one" class="collapse in" role="tabpanel">
                                <div class="panel-body">
                                  <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry cry then richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf msr noontemporem, sunt aliqua put a bird on it squid single-origin coffee nullassumendan shoreditch et.</p>
                                </div>
                              </div>
                            </div>
                            <div class="panel panel-collapse notika-accrodion-cus">
                              <div class="panel-heading" role="tab">
                                <h4 class="panel-title">
                                  <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-two" aria-expanded="false">
                                    Collapse Green #2
                                  </a>
                                </h4>
                              </div>
                              <div id="accordionGreen-two" class="collapse" role="tabpanel">
                                <div class="panel-body">
                                  <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry cry then richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf msr noontemporem, sunt aliqua put a bird on it squid single-origin coffee nullassumendan shoreditch et.</p>
                                </div>
                              </div>
                            </div>
                            <div class="panel panel-collapse notika-accrodion-cus">
                              <div class="panel-heading" role="tab">
                                <h4 class="panel-title">
                                  <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-three" aria-expanded="false">
                                    Collapse Green #3
                                  </a>
                                </h4>
                              </div>
                              <div id="accordionGreen-three" class="collapse" role="tabpanel">
                                <div class="panel-body">
                                  <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry cry then richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf msr noontemporem, sunt aliqua put a bird on it squid single-origin coffee nullassumendan shoreditch et.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
          </tr>

        </div>
        <?= $this->endSection(); ?>