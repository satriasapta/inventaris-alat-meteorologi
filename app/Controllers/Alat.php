<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AlatModel;

class Alat extends BaseController
{
    public function __construct()
    {
        $this->alatModel = new AlatModel();
    }

    public function index()
    {
        $data = [
            'alat' =>$this->alatModel->findAll()
        ];
        return view('detail_alat',$data);
    }

    public function detail($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('tb_alat')->getWhere(['id_alat' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['alat'] = $query->getRow();
                return view('detail_alat', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

}
