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
    protected $allowedFields    = ['id_alat','id_operasi','tanggal','nama_petugas','keterangan'];

    public function getLogBook()
    {
        $dataLogBook = $this->db->table('tb_logbook')
            ->join('tb_alat', 'tb_alat.id_alat = tb_logbook.id_alat')
            ->join('tb_operasi', 'tb_operasi.id_operasi = tb_logbook.id_operasi')
            ->orderBy('tanggal', 'DESC')
            ->orderBy('tb_operasi.id_operasi', 'DESC')
            ->get()->getResultArray();

        return $dataLogBook;
    }
}
