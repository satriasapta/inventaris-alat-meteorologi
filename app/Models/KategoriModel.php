<?php
namespace App\Models;
use CodeIgniter\Model;
class KategoriModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_kategori';
    protected $primaryKey       = 'id_kategori';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $allowedFields    = ['kategori_alat'];
}
