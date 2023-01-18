<?= $this->extend('admin/templateadmin'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

  <div class="container">
    <h5 class="card-header">Detail Alat</h5>
    <div class="card-body">

      <div class="row">
        <div class="col-md-4">
          <img src="<?= base_url('img/'.$alat->gambar_alat); ?>" class="card-img-top">
        </div>
        <div class="col-md-8">
          <table class="table">
            <tr>
              <td class="col-md-4">Nama Alat</td>
              <td><strong>: <?= $alat->nama_alat; ?></strong></td>
            </tr>

            <tr>
              <td>Cara Kerja Alat</td>
              <td><strong>: <?= $alat->kelompok_alat; ?></strong></td>
            </tr>

            <tr>
              <td>Kondisi</td>
              <td><strong>: <?= $alat->kondisi_alat; ?></strong></td>
            </tr>

            <tr>
              <td>Tahun Pembelian</td>
              <td><strong>: <?= $alat->tahun_pembelian; ?></strong></td>
            </tr>
            <tr>
              <td>Kalibrasi terakhir</td>
              <td><strong>: <?= $alat->kalibrasi; ?></strong></td>
            </tr>
            <tr>
              <td>Lokasi Alat</td>
              <td><strong><button class="btn btn-dark mb-3" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">3</button>
                  <div class="collapse" id="collapseExample1">

                    <div class="card card-body">
                      <img src="<?= base_url('img/'.$alat->lokasi_alat); ?>" class="card-img-top">

                    </div>
                  </div>
                </strong></td>
            </tr>
          </table>
          <tr>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="accordion-stn">
                  <div class="panel-group" data-collapse-color="nk-green" id="detaillanjutan" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-collapse notika-accrodion-cus">
                      <div class="panel-heading" role="tab">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-detail" aria-expanded="true">
                            Detail Lebih Lanjut
                          </a>
                        </h4>
                      </div>
                      <div id="accordionGreen-detail" class="collapse" role="tabpanel">
                        <div class="panel-body">
                          
                          <div class="accordion-wn-wp">
                            <div class="accordion-hd">
                              <h2>Detail ini berdasarkan</h2>
                              <p>PERTURAN KEPALA BADAN METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA</p>
                              <P>Nomor 7 Tahun 2014 Tentang Standar Teknis Dan Operasional Pemeliharaan Peralatan Pengamatan Meteorologi, Klimatologi, Dan Geofisika</P>
                            </div>
      
                            <div class="accordion-stn">
                              <div class="panel-group" data-collapse-color="nk-green" id="accordionGreen" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-collapse notika-accrodion-cus">
                                  <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                      <a data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-one" aria-expanded="false">
                                        1. Komponen alat
                                      </a>
                                    </h4>
                                  </div>
                                  <div id="accordionGreen-one" class="collapse" role="tabpanel">
                                    <div class="panel-body">
                                      <p><?= $alat->komponen_alat; ?></p>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel panel-collapse notika-accrodion-cus">
                                  <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                      <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-two" aria-expanded="false">
                                        2. Penggantian komponen secara berkala
                                      </a>
                                    </h4>
                                  </div>
                                  <div id="accordionGreen-two" class="collapse" role="tabpanel">
                                    <div class="panel-body">
                                      <p><?= $alat->penggantian_komponen; ?></p>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel panel-collapse notika-accrodion-cus">
                                  <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                      <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-three" aria-expanded="false">
                                        3. Pemeliharaan berkala
                                      </a>
                                    </h4>
                                  </div>
                                  <div id="accordionGreen-three" class="collapse" role="tabpanel">
                                    <div class="panel-body">
                                      <p><?= $alat->pemeliharaan_alat; ?></p>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel panel-collapse notika-accrodion-cus">
                                  <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                      <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-4" aria-expanded="false">
                                        4. Perbaikan peralatan pada saat terjadi kerusakan </a>
                                    </h4>
                                  </div>
                                  <div id="accordionGreen-4" class="collapse" role="tabpanel">
                                    <div class="panel-body">
                                      <p><?= $alat->perbaikan_alat; ?></p>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel panel-collapse notika-accrodion-cus">
                                  <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                      <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-5" aria-expanded="false">
                                        5. Persiapan pemeliharaan </a>
                                    </h4>
                                  </div>
                                  <div id="accordionGreen-5" class="collapse" role="tabpanel">
                                    <div class="panel-body">
                                      <p><?= $alat->persiapan_pemeliharaan; ?></p>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel panel-collapse notika-accrodion-cus">
                                  <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                      <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-6" aria-expanded="false">
                                        6. Cara pemeliharaan </a>
                                    </h4>
                                  </div>
                                  <div id="accordionGreen-6" class="collapse" role="tabpanel">
                                    <div class="panel-body">
                                      <p><?= $alat->cara_pemeliharaan; ?></p>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel panel-collapse notika-accrodion-cus">
                                  <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                      <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-7" aria-expanded="false">
                                        7. Modifikasi, rekondisi, dan rehabilitasi peralatan </a>
                                    </h4>
                                  </div>
                                  <div id="accordionGreen-7" class="collapse" role="tabpanel">
                                    <div class="panel-body">
                                      <p><?= $alat->modifikasi_alat; ?></p>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel panel-collapse notika-accrodion-cus">
                                  <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                      <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-8" aria-expanded="false">
                                        8. Penyediaan peralatan cadangan </a>
                                    </h4>
                                  </div>
                                  <div id="accordionGreen-8" class="collapse" role="tabpanel">
                                    <div class="panel-body">
                                      <p><?= $alat->penyediaan_alat; ?></p>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel panel-collapse notika-accrodion-cus">
                                  <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                      <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-9" aria-expanded="false">
                                        9. Penyediaan dan pengelolaan suku cadang </a>
                                    </h4>
                                  </div>
                                  <div id="accordionGreen-9" class="collapse" role="tabpanel">
                                    <div class="panel-body">
                                      <p><?= $alat->penyediaan_sukucadang; ?></p>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel panel-collapse notika-accrodion-cus">
                                  <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                      <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-10" aria-expanded="false">
                                        10. Keamanan dan Persyaratan Lingkungan</a>
                                    </h4>
                                  </div>
                                  <div id="accordionGreen-10" class="collapse" role="tabpanel">
                                    <div class="panel-body">
                                      <p><?= $alat->keamanan_alat; ?></p>
                                    </div>
                                  </div>
                                </div>
                                
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