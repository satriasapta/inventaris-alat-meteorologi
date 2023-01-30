<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
    }
    public function login()
    {
        if(session('id')){
            return redirect()->to(base_url('admin'));
        }
        return view('admin/loginAdmin');
    }

    public function loginProcess()
    {
        $post = $this->request->getPost();
        $query = $this->db->table('tb_user')->getWhere(['username' => $post['username']]);
        $user = $query->getRow();
        if ($user) {
            if ($post['password'] === $user->password) {
                $params = ['id'=> $user->id];
                session()->set($params);
                return redirect()->to(base_url('admin'));
            } else {
                return redirect()->back()->with('error', 'Password Salah');
            }
        } else {
            return redirect()->back()->with('error', 'Username Tidak Ditemukan');
        }
    }

    public function logout()
    {
        session()->remove('id');
        return redirect()->to(base_url('auth/login'));
    }
}
