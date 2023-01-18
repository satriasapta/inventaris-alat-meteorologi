<?= $this->extend('admin/templateadmin'); ?>

<?= $this->section('content'); ?>

<div class="form-example-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-example-wrap mg-t-30">
                    <div class="cmp-tb-hd cmp-int-hd">
                        <h2>Tambah Alat Meteorologi</h2>
                    </div>
                    <div class="form-example-int form-horizental">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                    <label class="hrzn-fm">Nama Alat</label>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" placeholder="Masukan Nama Alat">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                    <label class="hrzn-fm">Cara Kerja Alat</label>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="hrzn-fm bootstrap-select fm-cmp-mg">
                                        <select class="hrzn-fm selectpicker">
                                            <option>Konvensional (mekanik)</option>
                                            <option>Otomatis (elektronik)</option>
                                            <option>Modern (canggih)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                    <label class="hrzn-fm">Kondisi Alat</label>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="hrzn-fm bootstrap-select fm-cmp-mg">
                                        <select class="hrzn-fm selectpicker">
                                            <option>Layak</option>
                                            <option>Butuh Perbaikan</option>
                                            <option>Menunggu Perbaikan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                    <label class="hrzn-fm nk-int-mk sl-dp-mn">Tahun Pembelian</label>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                        <div class="input-group date nk-int-st">
                                            <span class="input-group-addon"></span>
                                            <input type="text" class="form-control" value="03/19/2018">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                    <label class="hrzn-fm nk-int-mk sl-dp-mn">Kalibrasi Terakhir</label>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="form-group nk-datapk-ctm form-elet-mg" id="data_2">
                                        <div class="input-group date nk-int-st">
                                            <span class="input-group-addon"></span>
                                            <input type="text" class="form-control" value="03/19/2018">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                    <label class="hrzn-fm">Lokasi Alat</label>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" placeholder="Masukan Lokasi Alat 1-20"> #ini dibikin integer aja sat
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                    <label class="hrzn-fm">Detail Lanjutan</label>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="floating-numner">
                                            <p>1. Komponen Alat</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="form-group">
                                            <div class="nk-int-st">
                                                <textarea class="form-control auto-size" rows="2" placeholder="Start pressing Enter to see growing..."></textarea>
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
    <div class="form-example-int mg-t-15">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
            </div>
            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                <button class="btn btn-success notika-btn-success">Submit</button>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>