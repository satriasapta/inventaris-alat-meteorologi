<?php
namespace App\Models;
use CodeIgniter\Model;
class OperasiModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_operasi';
    protected $primaryKey       = 'id_operasi';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $allowedFields    = ['operasi'];
}
