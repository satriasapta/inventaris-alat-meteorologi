<?= $this->extend('admin/templateadmin'); ?>

<?= $this->section('content'); ?>

<div class="form-example-area">
    <div class="container">
        <div class="row">
            <?php if (session()->has('success')) : ?>
                <div class="alert alert-success" role="alert"><?= session()->getFlashdata('success'); ?></div>
            <?php endif; ?>
            <?php if (session()->has('error')) : ?>
                <div class="alert alert-danger" role="alert"><?= session()->getFlashdata('error'); ?></div>
            <?php endif; ?>
            <?php $validation = session()->getFlashdata('validation'); ?>
            <form method="POST" action="<?= current_url(); ?>" enctype="multipart/form-data">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap mg-t-30">
                        <div class="cmp-tb-hd cmp-int-hd">
                            <h2>Tambah Alat Meteorologi</h2>
                        </div>
                        <!-- #UNTUK UPLOAD GAMBAR ALAT TERBARU -->
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Foto Alat Terbaru</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="file" name="gambar_alat" class="form-control" required>
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
                                                <input type="text" name="tahun_pembelian" class="form-control" value="" placeholder="yyyy-mm-dd" required>
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
                                        <label class="hrzn-fm">Nama Alat</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" name="nama_alat" class="form-control input-sm" placeholder="Masukan Nama Alat" required>
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
                                            <select name="id_kategori" class="hrzn-fm selectpicker">
                                                <?php foreach ($kategori as $k) : ?>
                                                    <option value="<?= $k['id_kategori']; ?>"><?= $k['kategori_alat']; ?></option>
                                                <?php endforeach; ?>
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
                                            <select name="id_kondisi" class="hrzn-fm selectpicker">
                                            <?php foreach ($kondisi as $k) : ?>
                                                    <option value="<?= $k['id_kondisi']; ?>"><?= $k['kondisi_alat']; ?></option>
                                                <?php endforeach; ?>
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
                                        <label class="hrzn-fm nk-int-mk sl-dp-mn">Kalibrasi Terakhir</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_2">
                                            <div class="input-group date nk-int-st">
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="kalibrasi" class="form-control" value="" placeholder="yyyy-mm-dd" required>
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
                                            <input type="file" name="lokasi_alat" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- INI INPUT DETAIL LANJUTAN -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="accordion-stn">
                                    <div class="panel-group" data-collapse-color="nk-green" id="accordionGreen" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-collapse notika-accrodion-cus">
                                            <div class="panel-heading" role="tab">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-one" aria-expanded="false">
                                                        Tambah Detail </a>
                                                </h4>
                                            </div>
                                            <div id="accordionGreen-one" class="collapse" role="tabpanel">
                                                <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Detail Lanjutan</label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="form-example-int">
                                                                        <div class="form-group">
                                                                            <label>1. Komponen alat</label>
                                                                            <div class="nk-int-st">
                                                                                <textarea class="form-control" rows="5" placeholder="Ayo lengkapi data" name="komponen_alat"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm"></label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="form-example-int">
                                                                        <div class="form-group">
                                                                            <label>2. Penggantian komponen secara berkala</label>
                                                                            <div class="nk-int-st">
                                                                                <textarea class="form-control" rows="5" placeholder="Ayo lengkapi data" name="penggantian_komponen"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm"></label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="form-example-int">
                                                                        <div class="form-group">
                                                                            <label>3. Pemeliharaan berkala</label>
                                                                            <div class="nk-int-st">
                                                                                <textarea class="form-control" rows="5" placeholder="Ayo lengkapi data" name="pemeliharaan_alat"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm"></label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="form-example-int">
                                                                        <div class="form-group">
                                                                            <label>4. Perbaikan peralatan pada saat terjadi kerusakan</label>
                                                                            <div class="nk-int-st">
                                                                                <textarea class="form-control" rows="5" placeholder="Ayo lengkapi data" name="perbaikan_alat"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm"></label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="form-example-int">
                                                                        <div class="form-group">
                                                                            <label>5. Persiapan pemeliharaan</label>
                                                                            <div class="nk-int-st">
                                                                                <textarea class="form-control" rows="5" placeholder="Ayo lengkapi data" name="persiapan_pemeliharaan"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm"></label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="form-example-int">
                                                                        <div class="form-group">
                                                                            <label>6. Cara pemeliharaan</label>
                                                                            <div class="nk-int-st">
                                                                                <textarea class="form-control" rows="5" placeholder="Ayo lengkapi data" name="cara_pemeliharaan"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm"></label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="form-example-int">
                                                                        <div class="form-group">
                                                                            <label>7. Modifikasi, rekondisi, dan rehabilitasi peralatan</label>
                                                                            <div class="nk-int-st">
                                                                                <textarea class="form-control" rows="5" placeholder="Ayo lengkapi data" name="modifikasi_alat"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm"></label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="form-example-int">
                                                                        <div class="form-group">
                                                                            <label>8. Penyediaan peralatan cadangan</label>
                                                                            <div class="nk-int-st">
                                                                                <textarea class="form-control" rows="5" placeholder="Ayo lengkapi data" name="penyediaan_alat"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm"></label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="form-example-int">
                                                                        <div class="form-group">
                                                                            <label>9. Penyediaan dan pengelolaan suku cadang</label>
                                                                            <div class="nk-int-st">
                                                                                <textarea class="form-control" rows="5" placeholder="Ayo lengkapi data" name="penyediaan_sukucadang"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm"></label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="form-example-int">
                                                                        <div class="form-group">
                                                                            <label>10. Keamanan dan Persyaratan Lingkungan</label>
                                                                            <div class="nk-int-st">
                                                                                <textarea class="form-control" rows="5" placeholder="Ayo lengkapi data" name="keamanan_alat"></textarea>

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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-10"></div>
                        <div class="col-xs-6 col-md-2">
                            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                            <a href="<?= base_url('admin/daftaralat'); ?>" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>