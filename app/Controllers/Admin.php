<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AlatModel;
use App\Models\KategoriModel;
use App\Models\LogBookModel;
use App\Models\KondisiModel;
use App\Models\UserModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->alatModel = new AlatModel();
        $this->kategoriModel = new KategoriModel();
        $this->logBookModel = new LogBookModel();
        $this->kondisiModel = new KondisiModel();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $dataAlat = $this->alatModel->get()->resultID->num_rows;
        $dataKategori = $this->kategoriModel->get()->resultID->num_rows;
        $dataLogBook = $this->logBookModel->get()->resultID->num_rows;
        $dataKondisi = $this->alatModel->getWhere(['id_kondisi' => 1])->resultID->num_rows;
        $dataKondisi2 = $this->alatModel->getWhere(['id_kondisi' => 2])->resultID->num_rows;
        $dataKondisi3 = $this->alatModel->getWhere(['id_kondisi' => 3])->resultID->num_rows;

        $data = [
            'alat' => $this->alatModel->getAlat(),
            'kondisi' => $this->kondisiModel->findAll(),
            'dataAlat' => $dataAlat,
            'dataKategori' => $dataKategori,
            'dataLogBook' => $dataLogBook,
            'dataKondisi' => $dataKondisi,
            'dataKondisi2' => $dataKondisi2,
            'dataKondisi3' => $dataKondisi3,
        ];
        return view('admin/dashboard', $data);
    }

    public function dashboard()
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
            $query = $this->db->table('tb_alat')->join('tb_kategori', 'tb_kategori.id_kategori = tb_alat.id_kategori')->join('kondisi', 'kondisi.id_kondisi = tb_alat.id_kondisi')->getWhere(['id_alat' => $id]);
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
                    'id_kategori' => $this->request->getPost('id_kategori'),
                    'id_kondisi' => $this->request->getPost('id_kondisi'),
                ];
                $this->alatModel->insert($data);
                return redirect()->to('admin/daftaralat')->with('success', ' Data Berhasil Disimpan');
            }
            return redirect()->back()->with('error', ' Data Gagal Disimpan, Silahkan Cek Format Gambar!');
        }
        $data = [
            'kategori' => $this->kategoriModel->findAll(),
            'kondisi' => $this->kondisiModel->findAll()
        ];
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
        if ($id != null) {
            $query = $this->db->table('tb_alat')->join('tb_kategori', 'tb_kategori.id_kategori = tb_alat.id_kategori')->join('kondisi', 'kondisi.id_kondisi = tb_alat.id_kondisi')->getWhere(['id_alat' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data = [
                    'alat' => $query->getRow(),
                    'kategori' => $this->alatModel->getAlat(),
                    'kondisi' => $this->kondisiModel->findAll()
                ];
                return view('admin/editalat', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        }
    }
    public function updateAlat($id)
    {

        if ($this->request->getMethod() === 'post') {
            $rules = [
                'nama_alat' => [
                    'label' => 'Nama Alat',
                    'rules' => 'required'
                ],
                'tahun_pembelian' => [
                    'label' => 'Tahun Pembelian',
                    'rules' => 'required'
                ],
                'kalibrasi' => [
                    'label' => 'Kalibrasi',
                    'rules' => 'required'
                ]
            ];
            if ($this->validate($rules)) {
                $prod_item = $this->alatModel->find($id);
                $gambar_alat = $this->request->getFile('gambar_alat');
                if ($gambar_alat->isValid() && !$gambar_alat->hasMoved()) {
                    $old_img_name = $prod_item['gambar_alat'];
                    if (file_exists("uploads/$old_img_name")) {
                        unlink("uploads/$old_img_name");
                    }
                    $filename = time() . $gambar_alat->getClientName();
                    $gambar_alat->move('uploads', $filename);
                }
                $lokasi_alat = $this->request->getFile('lokasi_alat');
                if ($lokasi_alat->isValid() && !$lokasi_alat->hasMoved()) {
                    $old_img_name = $prod_item['lokasi_alat'];
                    if (file_exists("uploads/$old_img_name")) {
                        unlink("uploads/$old_img_name");
                    }
                    $filename2 = time() . $lokasi_alat->getClientName();
                    $lokasi_alat->move('uploads', $filename2);
                }
                $data = [
                    'nama_alat' => $this->request->getPost('nama_alat'),
                    'tahun_pembelian' => $this->request->getPost('tahun_pembelian'),
                    'kalibrasi' => $this->request->getPost('kalibrasi'),
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
                    'id_kategori' => $this->request->getPost('id_kategori'),
                    'id_kondisi' => $this->request->getPost('id_kondisi'),
                ];
                $this->alatModel->update($id, $data);
                return redirect()->to('admin/daftaralat')->with('success', ' Data Berhasil Disimpan');
            }
            return redirect()->back()->with('error', ' Data Gagal Disimpan, Silahkan Cek Format Gambar!');
        }
    }

    public function inputlogbook()
    {

        $data = [
            'logbook' => $this->logBookModel->getLogbook(),
            'alat' => $this->alatModel->getAlat()
        ];

        return view('admin/logbook', $data);
    }
    public function post()
    {
     
        $logbook = model(LogBookModel::class);
        $rules = [
            'kondisi' => [
                'label' => 'Kondisi',
                'rules' => 'required'
            ],
            'tanggal' => [
                'label' => 'Tanggal',
                'rules' => 'required'
            ],
            'nama_petugas' => [
                'label' => 'Nama Petugas',
                'rules' => 'required'
            ]
        ];
        if ($this->request->getMethod() === 'post' && $this->validate($rules)) {

            $kondisi = $this->request->getPost('kondisi');
            $id_alat = $this->request->getPost('id_alat');
            $tanggal = $this->request->getPost('tanggal');
            $keterangan = $this->request->getPost('keterangan');
            $nama_petugas = $this->request->getPost('nama_petugas');
            $i = 0;
            if (!empty($kondisi)) {
                foreach ($kondisi as $k) {
                    $data = [
                        'id_alat' => $id_alat[$i],
                        'kondisi' => $k,
                        'tanggal' => $tanggal,
                        'keterangan' => $keterangan[$i],
                        'nama_petugas' => $nama_petugas
                    ];
                    $logbook->save($data);
                    $i++;
                }
            }
            $message = [
                'success' => true,
                'notif' => 'Data Berhasil Disimpan'
            ];

        } else {
            $message = [
                'success' => false,
                'notif' => 'Data Gagal Disimpan'
            ];
        }
        return redirect()->back()->with('success', ' Data Berhasil Disimpan');
    }
    // {
    //     $i = 0; // untuk loopingnya
    //     $a = $this->input->post('first_name');
    //     $b = $this->input->post('last_name');
    //     if ($a[0] !== null) {
    //         foreach ($a as $row) {
    //             $data = [
    //                 'first_name' => $row,
    //                 'last_name' => $b[$i],
    //             ];

    //             $insert = $this->db->insert('biodata', $data);
    //             if ($insert) {
    //                 $i++;
    //             }
    //         }
    //     }

    //     $arr['success'] = true;
    //     $arr['notif']  = '<div class="alert alert-success">
    //       <i class="fa fa-check"></i> Data Berhasil Disimpan
    //     </div>';
    //     return redirect()->back()->with('success', ' Data Berhasil Disimpan');
    // }




    // $dataalat = $this->alatModel->get()->resultID->num_rows;
    // for($i = 0; $i < $dataalat; $i++){

    //         $data = [
    //             'kondisi' => $this->request->getVar('kondisi'.$i),
    //             'id_alat' => $this->request->getVar('id_alat'.$i),
    //             'tanggal' => $this->request->getVar('tanggal'),
    //             'keterangan' => $this->request->getVar('keterangan'.$i),
    //             'nama_petugas' => $this->request->getVar('nama_petugas'),
    //         ];
    //     }
    //     dd($data);
    //     $this->logBookModel->insert($data);
    //     return redirect()->back()->with('success', ' Data Berhasil Disimpan');


    // $data = [
    //     'logbook' => $this->logBookModel->getLogbook(),
    //     'alat' => $this->alatModel->getAlat()
    // ];
    // return view('admin/logbook', $data);

}
// $main_arr = array();
//                 for($i=0;$i<sizeof($data['id_alat']);$i++){
//                     $arr=array('id_alat'=>$data['id_alat'][$i],'kondisi'=>$data['kondisi'][$i],'keterangan'=>$data['keterangan'][$i],);
//                     $main_arr = $arr;
//                 }