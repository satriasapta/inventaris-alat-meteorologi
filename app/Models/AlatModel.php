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
    protected $allowedFields    = ['nama_alat', 'gambar_alat', 'kondisi_alat', 'tahun_pembelian','kalibrasi',
    'lokasi_alat','detail_alat','komponen_alat','penggantian_komponen','pemeliharaan_alat','perbaikan_alat',
    'persiapan_pemeliharaan','cara_pemeliharaan','modifikasi_alat','penyediaan_alat','penyediaan_sukucadang',
    'keamanan_alat','id_kategori','id_kondisi'];

    public function getAlat()
    {
        $dataAlat = $this->db->table('tb_alat')
            ->join('tb_kategori', 'tb_kategori.id_kategori = tb_alat.id_kategori')
            ->join('kondisi', 'kondisi.id_kondisi = tb_alat.id_kondisi')
            ->get()->getResultArray();
        return $dataAlat;
    }
    public function getBaik()
    {
        $dataBaik = $this->db->table('tb_alat')
            ->join('tb_kategori', 'tb_kategori.id_kategori = tb_alat.id_kategori')
            ->join('kondisi', 'kondisi.id_kondisi = tb_alat.id_kondisi')
            ->where('kondisi.id_kondisi','1')
            ->get()->getResultArray();
        return $dataBaik;
    }
    public function getRusak()
    {
        $dataRusak = $this->db->table('tb_alat')
            ->join('tb_kategori', 'tb_kategori.id_kategori = tb_alat.id_kategori')
            ->join('kondisi', 'kondisi.id_kondisi = tb_alat.id_kondisi')
            ->where('kondisi.id_kondisi','2')
            ->get()->getResultArray();
        return $dataRusak;
    }
    public function getRusakBerat()
    {
        $dataRusakBerat = $this->db->table('tb_alat')
            ->join('tb_kategori', 'tb_kategori.id_kategori = tb_alat.id_kategori')
            ->join('kondisi', 'kondisi.id_kondisi = tb_alat.id_kondisi')
            ->where('kondisi.id_kondisi','3')
            ->get()->getResultArray();
        return $dataRusakBerat;
    }
}
