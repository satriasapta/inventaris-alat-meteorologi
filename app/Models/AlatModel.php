<?php

namespace App\Models;

use CodeIgniter\Model;

class AlatModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_alat';
    protected $primaryKey       = 'id_alat';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nama_alat', 'kelompok_alat', 'gambar_alat', 'kondisi_alat', 'tahun_pembelian','kalibrasi','lokasi_alat','detail_alat'];

    public function getAlat()
    {
        $dataAlat = $this->db->table('tb_alat')
            ->join('tb_kategori', 'tb_kategori.id_kategori = tb_alat.id_kategori')
            ->get()->getResultArray();

        return $dataAlat;
    }

}
