<?php
namespace App\Models;
use CodeIgniter\Model;
class PetugasModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_petugas';
    protected $primaryKey       = 'id_petugas';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nama_petugas'];
}
