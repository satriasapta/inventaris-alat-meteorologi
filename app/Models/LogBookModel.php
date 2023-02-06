<?php

namespace App\Models;

use CodeIgniter\Model;

class LogBookModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_logbook';
    protected $primaryKey       = 'id_logbook';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $allowedFields    = ['id_alat','kondisi','tanggal','nama_petugas','keterangan'];

    public function getLogBook()
    {
        $dataLogBook = $this->db->table('tb_logbook')
            ->join('tb_alat', 'tb_alat.id_alat = tb_logbook.id_alat')
            ->orderBy('tanggal', 'DESC')
            ->get()->getResultArray();

        return $dataLogBook;
    }

    public function getLast()
    {
        $dataLogBook = $this->db->table('tb_logbook')
            ->join('tb_alat', 'tb_alat.id_alat = tb_logbook.id_alat')
            ->orderBy('id_logbook', 'DESC')
            ->limit(1)
            ->get()->getRowArray();

        return $dataLogBook;
    }

    public function getdate()
    {
        $dataLogBook = $this->db->table('tb_logbook')
        ->join('tb_alat', 'tb_alat.id_alat = tb_logbook.id_alat')
        ->where(' tanggal >=', '2021-01-01')
        ->where(' tanggal <=', '2021-01-31')
        ->orderBy('tanggal', 'DESC')
        ->get()->getResultArray();
        return $dataLogBook;
    }
}
