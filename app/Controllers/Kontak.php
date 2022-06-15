<?php

namespace App\Controllers;

use App\Models\M_kontak;
use App\Models\M_profil;

class Kontak extends BaseController
{
    function __construct()
    {
        $this->kontak = new M_kontak();
        $this->profil = new M_profil();
    }

    public function index()
    {
        $data['kontak'] = $this->kontak->findAll();
         $datap['profil'] = $this->profil->findAll();
        return view('kontak', $datap);
    }

    public function submit()
    {
        if (!$this->validate([
            'nama_pengirim' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi'
                ]
            ],
            'email_pengirim' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email harus diisi'
                ]
            ],
            'nope_pengirim' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor WhatsApp harus diisi'
                ]
            ],
            'subjek' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Subjek pesan harus diisi'
                ]
            ],
            'pesan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pesan harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->kontak->insert([
            'nama_pengirim' => $this->request->getVar('nama_pengirim'),
            'email_pengirim' => $this->request->getVar('email_pengirim'),
            'nope_pengirim' => $this->request->getVar('nope_pengirim'),
            'subjek' => $this->request->getVar('subjek'),
            'pesan' => $this->request->getVar('pesan'),
        ]);
        session()->setFlashdata('result', 'Pesan telah terkirim!');
        return redirect()->to('/kontak');
    }
}
