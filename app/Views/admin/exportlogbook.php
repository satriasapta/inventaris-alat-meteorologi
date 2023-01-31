<?php

$index = 1;

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Logbook.xls");
?>

<body>
    <center>
        <h2>Laporan Barang Keluar</h2>
    </center>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Petugas</th>
                <th>Tanggal Pengecekan</th>
                <th>Nama Alat</th>
                <th>Kondisi Alat</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($logbook as $lb) : ?>
                <tr>
                    <td><?= $index ?></td>
                    <td><?= $lb['nama_petugas']; ?></td>
                    <td><?= $lb['tanggal']; ?></td>
                    <td><?= $lb['nama_alat']; ?></td>
                    <td><?= $lb['kondisi']; ?></td>
                    <td><?= $lb['keterangan']; ?></td>
                    
                </tr>
                <?php $index++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>