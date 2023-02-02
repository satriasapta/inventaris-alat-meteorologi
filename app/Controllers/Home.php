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
        $data = [
            'alat' => $this->alatModel->getAlat()
        ];
        return view('user/home',$data);
    }
    public function dashboard()
    {
        return view('dashboard');
    }
}
