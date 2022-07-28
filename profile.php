<?php

namespace App\Controllers\pegawai;

use App\Models\pegawai_model;

class Profil extends BaseController
{
    public function index()
    {
        checkpegawai();
        $m_pegawai = new pegawai_model();
        $pegawai   = $m_pegawai->detail($this->session->get('id_pegawai'));

        $data = ['title' => $pegawai['nama_lengkap'],
            'siswa'      => $pegawai,
            'content'    => 'pegawai/profil/index',
        ];
        echo view('pegawai/layout/wrapper', $data);
    }
}