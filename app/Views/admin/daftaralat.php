<?= $this->extend('admin/templateadmin'); ?>

<?= $this->section('content'); ?>

<div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Daftar Alat</h2>
                            <p>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</p>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Alat</th>
                                        <th>Jenis Alat</th>
                                        <th>Kelompok Cara Kerja Alat</th>
                                        <th>Kondisi</th>
                                        <th>Tahun Pembelian</th>
                                        <th>Kalibrasi Terakhir</th>                                      
                                        <th>
                                        
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Campble Stokes</td>
                                        <td>Alat Pengukur Radiasi Matahari</td>
                                        <td>Konvensional</td>
                                        <td>Layak</td>
                                        <td>2005</td>
                                        <td>2023/01/15</td>                                      
                                        <td>
                                            <button class="btn btn-sm btn-info">Detail</button>
                                        </td>
                                    </tr>                                                                    
                                
                                <tfoot>
                                    <tr>
                                        <th>Nama Alat</th>
                                        <th>Jenis Alat</th>
                                        <th>Kelompok Cara Kerja Alat</th>
                                        <th>Kondisi</th>
                                        <th>Tahun Pembelian</th>
                                        <th>Kalibrasi Terakhir</th>                                      
                                        <th>
                                        
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>