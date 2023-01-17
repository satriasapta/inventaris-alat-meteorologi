<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AlatModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->alatModel = new AlatModel();
    }

    public function index()
    {
        return view('admin/dashboard');
    }

    public function tambahalat()
    {
        return view('admin/tambahalat');
    }

    public function daftaralat()
    {
        return view('admin/daftaralat');
    }
    public function detailalat($id = null)
    {

        if ($id != null) {
            $query = $this->db->table('tb_alat')->getWhere(['id_alat' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['alat'] = $query->getRow();
                return view('admin/detailalat', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
}
