<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        // $this->M_Security->check();
        // $tot_peg = $this->db->get("tabel_inputsurat");
        // $tot_selesai = $this->db->get_where('tabel_inputsurat', array('kd_status' => '7'));
        // $tot_proses = $this->db->get_where('tabel_inputsurat', array('kd_status' => '2'));
        // $tot_terima = $this->db->get_where('tabel_inputsurat', array('kd_status' => '1'));

        // // $datagrafik = $this->Model_surat->get_data()->result();
        // // $data['datagrafik'] = json_encode($datagrafik);

        // $data['total_peg'] = $tot_peg->num_rows();
        // $data['total_selesai'] = $tot_selesai->num_rows();
        // $data['total_proses'] = $tot_proses->num_rows();
        // $data['total_terima'] = $tot_terima->num_rows();
        $data['title'] = 'SiKasur - Login';
        $data['judul'] = 'Login';
        // $data['konten'] = 'pages/beranda';
        // echo view('pages/home', $data);

        return view('Admin/Login', $data);
    }
}
