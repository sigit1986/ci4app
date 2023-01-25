<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data['title'] = 'SiKasur - Dashboard';
        $data['judul'] = 'Dashboard';
        // $data['konten'] = 'pages/beranda';
        // echo view('pages/home', $data);

        return view('Admin/Dashboard', $data);
    }
}
