<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
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
    public function detailalat()
    {
        return view('admin/detailalat');
    }
}
