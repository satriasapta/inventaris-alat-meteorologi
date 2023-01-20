<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AlatModel;
use App\Models\KategoriModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->alatModel = new AlatModel();
        $this->kategoriModel = new KategoriModel();
    }

    public function index()
    {
        return view('admin/dashboard');
    }



    public function daftaralat()
    {
        $data = [
            'alat' => $this->alatModel->getAlat()
        ];
        return view('admin/daftaralat', $data);
    }


    public function detailalat($id = null)
    {

        if ($id != null) {
            $query = $this->db->table('tb_alat')->join('tb_kategori', 'tb_kategori.id_kategori = tb_alat.id_kategori')->getWhere(['id_alat' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data = [
                    'alat' => $query->getRow(),
                    'kategori' => $this->alatModel->getAlat()
                ];
                return view('admin/detailalat', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function tambahalat()
    {
        if ($this->request->getMethod() === 'post') {
            $rules = [
                'nama_alat' => [
                    'label' => 'Nama Alat',
                    'rules' => 'required'
                ],
                'gambar_alat' => [
                    'label' => 'Gambar Alat',
                    'rules' => 'uploaded[gambar_alat]|mime_in[gambar_alat,image/jpeg,image/jpg,image/png]'
                ],
                'kondisi_alat' => [
                    'label' => 'Kondisi Alat',
                    'rules' => 'required'
                ],
                'tahun_pembelian' => [
                    'label' => 'Tahun Pembelian',
                    'rules' => 'required'
                ],
                'kalibrasi' => [
                    'label' => 'Kalibrasi',
                    'rules' => 'required'
                ],
                'lokasi_alat' => [
                    'label' => 'lokasi Alat',
                    'rules' => 'uploaded[lokasi_alat]|mime_in[lokasi_alat,image/jpeg,image/jpg,image/png]'
                ]
            ];
            if ($this->validate($rules)) {
                $gambar_alat = $this->request->getFile('gambar_alat');
                $filename = time() . $gambar_alat->getClientName();
                $gambar_alat->move('uploads', $filename);
                $lokasi_alat = $this->request->getFile('lokasi_alat');
                $filename2 = time() . $lokasi_alat->getClientName();
                $lokasi_alat->move('uploads', $filename2);
                $data = [
                    'nama_alat' => $this->request->getPost('nama_alat'),
                    'gambar_alat' => $filename,
                    'kondisi_alat' => $this->request->getPost('kondisi_alat'),
                    'tahun_pembelian' => $this->request->getPost('tahun_pembelian'),
                    'kalibrasi' => $this->request->getPost('kalibrasi'),
                    'lokasi_alat' => $filename2,
                    'komponen_alat' => $this->request->getPost('komponen_alat'),
                    'penggantian_komponen' => $this->request->getPost('penggantian_komponen'),
                    'pemeliharaan_alat' => $this->request->getPost('pemeliharaan_alat'),
                    'perbaikan_alat' => $this->request->getPost('perbaikan_alat'),
                    'persiapan_pemeliharaan' => $this->request->getPost('persiapan_pemeliharaan'),
                    'cara_pemeliharaan' => $this->request->getPost('cara_pemeliharaan'),
                    'modifikasi_alat' => $this->request->getPost('modifikasi_alat'),
                    'penyediaan_alat' => $this->request->getPost('penyediaan_alat'),
                    'penyediaan_sukucadang' => $this->request->getPost('penyediaan_sukucadang'),
                    'keamanan_alat' => $this->request->getPost('keamanan_alat'),
                    'id_kategori' => $this->request->getPost('id_kategori')
                ];
                $this->alatModel->insert($data);
                return redirect()->back()->with('success', ' Data Berhasil Disimpan');
            }
            return redirect()->back()->with('error', ' Data Gagal Disimpan, Silahkan Cek Format Gambar!');
        }
        $data['kategori'] = $this->kategoriModel->findAll();
        return view('admin/tambahalat', $data);
    }

    public function hapusAlat($id)
    {
        $this->alatModel->delete($id);
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to('/admin/daftaralat');
    }

    public function editAlat($id = null)
    {
       if($id != null){
        $query = $this->db->table('tb_alat')->join('tb_kategori', 'tb_kategori.id_kategori = tb_alat.id_kategori')->getWhere(['id_alat' => $id]);
        if($query->resultID->num_rows > 0){
            $data = [
                'alat' => $query->getRow(),
                'kategori' => $this->alatModel->getAlat()
            ];
            return view('admin/editalat', $data);
        }else{
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
       }
    }
}
