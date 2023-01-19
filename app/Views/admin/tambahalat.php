<?= $this->extend('admin/templateadmin'); ?>

<?= $this->section('content'); ?>

<div class="form-example-area">
    <div class="container">
        <div class="row">
            <?php if (session()->has('success')) : ?>
                <p class="text-success"><?= session()->getFlashdata('success'); ?></p>
            <?php endif; ?>
            <?php $validation = session()->getFlashdata('validation'); ?>
            <form method="POST" action="<?= current_url(); ?>" enctype="multipart/form-data">
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
                                            <input type="text" name="nama_alat" class="form-control input-sm" placeholder="Masukan Nama Alat">
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
                                            <select name="kondisi_alat" class="hrzn-fm selectpicker">
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
                                                <input type="text" name="tahun_pembelian" class="form-control" placeholder="Masukan Tahun/Bulan/Tanggal Pembelian Alat">
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
                                                <input type="text" name="kalibrasi" class="form-control" placeholder="Masukan Tahun/Bulan/Tanggal Kalibrasi Terakhir Alat">
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
                                            <input type="file" name="lokasi_alat" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                            <input type="file" name="gambar_alat" class="form-control">
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
                                                                                <input type="text" name="komponen_alat" placeholder="masukin penjelasan panjang">
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
                                                                                <input type="text" name="penggantian_komponen" placeholder="masukin penjelasan panjang">
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
                                                                                <input type="text" name="pemeliharaan_alat"  placeholder="masukin penjelasan panjang">
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
                                                                                <input type="text" name="perbaikan_alat"  placeholder="masukin penjelasan panjang">
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
                                                                                <input type="text" name="persiapan_pemeliharaan" placeholder="masukin penjelasan panjang">
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
                                                                                <input type="text" name="cara_pemeliharaan" placeholder="masukin penjelasan panjang">
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
                                                                                <input type="text" name="modifikasi_alat" placeholder="masukin penjelasan panjang">
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
                                                                                <input type="text" name="penyediaan_alat"  placeholder="masukin penjelasan panjang">
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
                                                                                <input type="text" name="penyediaan_sukucadang" placeholder="masukin penjelasan panjang">
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
<<<<<<< Updated upstream
                                                                                <input type="text" name="keamanan_alat" placeholder="masukin penjelasan panjang">
=======
                                                                                <textarea class="form-control" rows="5" placeholder="Ayo lengkapi data"></textarea>
>>>>>>> Stashed changes
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
                </div>
                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
<<<<<<< Updated upstream
=======
        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
            <button type="submit" class="btn btn-success notika-btn-success">Submit</button>
        </div>
        </form>
>>>>>>> Stashed changes
    </div>
</div>



<?= $this->endSection(); ?>