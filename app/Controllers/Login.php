<?php

namespace App\Controllers;

class Login extends BaseController
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
        $modelUser = new \App\Models\ModelUser();
        $data['title'] = 'SiKasur - Login';
        $data['judul'] = 'Login';

        $Login = $this->request->getPost('Login');
        if ($Login) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            if ($username == '' or $password == '') {
                $err = 'Silahkan masukankan username dan password';
            }

            if (empty($err)) {
                $datauser = $modelUser->where("username", $username)->first();
                if ($datauser['password'] != $password) {
                    $err = "Password Tidak Sesuai";
                }
            }

            if (empty($err)) {
                $datasesi = [
                    'username' => $datauser['username'],
                    'password' => $datauser['password'],
                ];
                session()->set($datasesi);
                return redirect()->to('/Admin/');
            }

            if ($err) {
                session()->setFlashdata('username', $username);
                session()->setFlashdata('error', $err);
                return redirect()->to('/Login/');
            }
        }
        // $data['konten'] = 'pages/beranda';
        // echo view('pages/home', $data);

        return view('Admin/Login', $data);
    }


    public function logout()
    {
        session()->destroy();
        return redirect()->to('/Login/');
    }
}
