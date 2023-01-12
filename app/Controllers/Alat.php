<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Alat extends BaseController
{
    public function __construct()
    {
        $this->alatModel = new AlatModel();
    }

    public function index()
    {
        $data = [
            'alat' =>$this->alatModel->findAll(); 
        ];
        return view('home',$data);
    }
}
