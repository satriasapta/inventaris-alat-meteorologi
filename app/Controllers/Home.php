<?php

namespace App\Controllers;
use App\Models\AlatModel;
use App\Models\LogbookModel;
use App\Models\KategoriModel;
use App\Models\KondisiModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->alatModel = new AlatModel();
        $this->logbookModel = new LogbookModel();
        $this->kategoriModel = new KategoriModel();
        $this->kondisiModel = new KondisiModel();
    }
    public function index()
    {
        $dataAlat = $this->alatModel->get()->resultID->num_rows;
        $dataKondisi = $this->alatModel->getWhere(['id_kondisi' => 1])->resultID->num_rows;
        $dataKondisi2 = $this->alatModel->getWhere(['id_kondisi' => 2])->resultID->num_rows;
        $dataKondisi3 = $this->alatModel->getWhere(['id_kondisi' => 3])->resultID->num_rows;
        $data = [
            'alat' => $this->alatModel->getAlat(),
            'baik' => $this->alatModel->getBaik(),
            'rusak' => $this->alatModel->getRusak(),
            'rusakberat' => $this->alatModel->getRusakBerat(),
            'dataAlat' => $dataAlat,
            'dataKondisi' => $dataKondisi,
            'dataKondisi2' => $dataKondisi2,
            'dataKondisi3' => $dataKondisi3,
        ];
        return view('user/home',$data);
    }
    public function detailalat($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('tb_alat')->join('tb_kategori', 'tb_kategori.id_kategori = tb_alat.id_kategori')->join('kondisi', 'kondisi.id_kondisi = tb_alat.id_kondisi')->getWhere(['id_alat' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data = [
                    'alat' => $query->getRow(),
                    'kategori' => $this->alatModel->getAlat()
                ];
                return view('user/detailalat', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function profil()
    {
        return view('user/profil');
    }
    public function daftaralat()
    {
        $data = [
            'alat' => $this->alatModel->getAlat()
        ];
        return view('user/daftaralat',$data);
    }
    public function syz()
    {
        return view('user/syz');
    }
    
}
