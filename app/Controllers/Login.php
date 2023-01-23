<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        if(session('id')){
            return redirect()->to(site_url('/admin/dashboard'));
        }
        return view('admin/loginAdmin');
    }
}
