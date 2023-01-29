<?= $this->extend('admin/templateadmin'); ?>

<?= $this->section('content'); ?>
<?php $index = 1 ?>
<div class="data-table-area">
    <div class="container">
        <div class="row">
            <?php if (session()->has('success')) : ?>
                <div class="alert alert-success" role="alert"><?= session()->getFlashdata('success'); ?></div>
            <?php endif; ?>
            <?php if (session()->has('error')) : ?>
                <div class="alert alert-danger" role="alert"><?= session()->getFlashdata('error'); ?></div>
            <?php endif; ?>
            <?php $validation = session()->getFlashdata('validation'); ?>
            <form method="POST" action="<?= base_url('admin/post'); ?>" enctype="multipart/form-data" id="SimpanData">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list">
                        <div class="col-lg-8 col-md-3 col-sm-3 col-xs-12">
                            <div class="basic-tb-hd">
                                <label class="hrzn-fm">Nama Petugas</label>
                                <div class="nk-int-st">
                                    <input type="text" name="nama_petugas" class="form-control input-sm" placeholder="Masukan Nama Petugas" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="hrzn-fm nk-int-mk sl-dp-mn">Tanggal Pengecekan</label>
                        </div>
                        <div class="col-lg-3 col-md-7 col-sm-7 col-xs-12">
                            <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                <div class="input-group date nk-int-st">
                                    <span class="input-group-addon"></span>
                                    <input type="text" name="tanggal" class="form-control" value="" placeholder="yyyy-mm-dd" required>
                                </div>
                            </div>
                        </div>
                        <div class="bsc-tbl">
                            <table class="table table-sc-ex">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Nama Alat</th>
                                        <th>OPERASIONAL</th>
                                        <th>TIDAK OPERASIONAL</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($alat as $a) : ?>
                                        <tr>
                                            <td><?= $index++ ?></td>
                                            <td><?= $a['nama_alat']; ?>
                                                <input type="hidden" name="id_alat[]" class="form-control input-sm" value="<?= $a['id_alat']; ?>">
                                            </td>
                                            <td><label><input type="radio" value="Layak" name="kondisi[<?= $index; ?>]" class="i-checks"> <i></i></label></td>
                                            <td><label><input type="radio" value="Tidak Layak" name="kondisi[<?= $index; ?>]" class="i-checks"> <i></i></label></td>
                                            <td><input type="text" name="keterangan[]" class="form-control input-sm" placeholder="Keterangan"></td>

                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
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
            </form>
        </div>

    </div>
</div>
<script>
    $(document).ready(function() {
        $('#SimpanData').submit(function(e) {
            e.preventDefault();
            biodata();
        });
    });

    function biodata() {
        $.ajax({
            url: $("#SimpanData").attr('action'),
            type: 'post',
            cache: false,
            dataType: "json",
            data: $("#SimpanData").serialize(),
            success: function(data) {
                if (data.success == true) {
                    $('#SimpanData').each(function() {
                        this.reset();
                    });
                    // $('#notif').fadeIn(800, function() {
                    //     $("#notif").html(data.notif).fadeOut(5000).delay(800);
                    // });
                } else {
                    $('#notif').html('<div class="alert alert-danger">Data Gagal Disimpan</div>')
                }
            },

            error: function(error) {
                alert(error);
            }
        });
    }
    
</script>
<?= $this->endSection(); ?>