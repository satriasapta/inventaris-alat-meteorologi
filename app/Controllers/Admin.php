<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AlatModel;
use App\Models\KategoriModel;
use App\Models\LogBookModel;
use App\Models\KondisiModel;
use App\Models\UserModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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
                    'kategori' => $this->kategoriModel->findAll(),
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

    public function lbharian()
    {
        $data = [
            'lb' => $this->logBookModel->getLogBook()
        ];

        return view('admin/lbharian', $data);
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
        return redirect()->to('admin/lbharian')->with('success', ' Data Berhasil Disimpan');
    }

    public function unduhlb()
    {
        return view('admin/unduhlb');
    }

    public function exportlogbook()
    {
        // $logbook = $this->logBookModel->getLogBook();
        $keyword = $this->request->getGet('keyword');
        $keyword2 = $this->request->getGet('keyword2');
        $filename = "All Logbook.xlsx";
        $builder = $this->db->table('tb_logbook')
            ->join('tb_alat', 'tb_alat.id_alat = tb_logbook.id_alat');
        if ($keyword && $keyword2 != '') {
            $builder->where('tb_logbook.tanggal >=', $keyword);
            $builder->where('tb_logbook.tanggal <=', $keyword2);
            $filename = "logbook-" . $keyword. " s.d ".$keyword2 . ".xlsx";
        }
        $query = $builder->get();
        $logbook = $query->getResultArray();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Nama Petugas');
        $sheet->setCellValue('C1', 'Tanggal');
        $sheet->setCellValue('D1', 'Nama Alat');
        $sheet->setCellValue('E1', 'Kondisi');
        $sheet->setCellValue('F1', 'Keterangan');

        $column = 2;
        foreach ($logbook as $key => $value) {
            $sheet->setCellValue('A' . $column, ($column - 1));
            $sheet->setCellValue('B' . $column, $value['nama_petugas']);
            $sheet->setCellValue('C' . $column, $value['tanggal']);
            $sheet->setCellValue('D' . $column, $value['nama_alat']);
            $sheet->setCellValue('E' . $column, $value['kondisi']);
            $sheet->setCellValue('F' . $column, $value['keterangan']);
            $column++;
        }
        $sheet->getStyle('A1:F1')->getFont()->setBold(true);
        $sheet->getStyle('A1:F1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFA0A0A0');
        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => 'FF000000'],
                ],
            ],
        ];
        $sheet->getStyle('A1:F' . ($column - 1))->applyFromArray($styleArray);
        $sheet->getColumnDimension('A')->setAutoSize(true);
        $sheet->getColumnDimension('B')->setAutoSize(true);
        $sheet->getColumnDimension('C')->setAutoSize(true);
        $sheet->getColumnDimension('D')->setAutoSize(true);
        $sheet->getColumnDimension('E')->setAutoSize(true);
        $sheet->getColumnDimension('F')->setAutoSize(true);
        $writer = new Xlsx($spreadsheet);
        header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header("Content-Disposition: attachment; filename=" . $filename);
        header("Cache-Control: max-age=0");
        $writer->save('php://output');
        exit();
    }

    public function syz()
    {
        return view('admin/syzz');
    }

    public function profil()
    {
        return view('admin/profila');
    }
}
