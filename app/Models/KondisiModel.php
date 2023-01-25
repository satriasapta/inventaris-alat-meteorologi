<?php

namespace App\Models;

use CodeIgniter\Model;

class KondisiModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'kondisi';
    protected $primaryKey       = 'id_kondisi';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $allowedFields    = ['kondisi_alat'];
}