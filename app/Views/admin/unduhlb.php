<?= $this->extend('admin/templateadmin'); ?>

<?= $this->section('content'); ?>
<?php $index = 1 ?>

<div class="data-table-area">
    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success m-3" role="alert">
            <?= session()->getFlashdata('success'); ?>
        </div>
    <?php endif; ?>
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list ">
                    <form action="" method="get" autocomplete="off">
                        <div id="data-table-basic_filter" class="dataTables_filter">
                            <div class="input-group date nk-int-st">
                                <?php $request = \Config\Services::request();; ?>
                                <div class="col-lg-6 col-md-6">
                                    <h5>Tanggal Awal :</h5>
                                    <input type="date" name="keyword" class="form-control" value="<?= $request->getGet('keyword'); ?>" placeholder="yyyy-mm-dd" required>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <h5>Tanggal Akhir :</h5>
                                    <input type="date" name="keyword2" class="form-control" value="<?= $request->getGet('keyword2'); ?>" placeholder="yyyy-mm-dd" required>
                                </div>
                            </div>
                            <div style="margin-top: 30px; text-align: center;" >
                                <?php
                                $request = \Config\Services::request();
                                $keyword = $request->getGet('keyword');
                                $keyword2 = $request->getGet('keyword2');
                                if ($keyword && $keyword2 != '') {
                                    $param = "?keyword=" . $keyword . "&keyword2=" . $keyword2;
                                } else {
                                    $param = '';
                                } ?>
                                <button type="submit" class="notika-icon notika-search"></button>
                                <a href="<?= base_url('admin/exportlogbook' . $param); ?>"><i class="notika-icon notika-sent" style=""></i></a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>