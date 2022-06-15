<?php

namespace App\Controllers;

use App\Models\M_adminprod;
use App\Models\M_agen;
use App\Models\M_kontak;
use App\Models\M_sa;
use App\Models\M_apis;

class Admin extends BaseController
{
    function __construct()
    {
        $this->produk = new M_adminprod();
        $this->agen = new M_agen();
        $this->kontak = new M_kontak();
        $this->admin = new M_sa();
        $this->apis = new M_apis();
    }

    public function index()
    {
        $cekproduk = $this->produk->countAllResults();
        $cekagen = $this->agen->countAllResults();
        $cekapis = $this->apis->countAllResults();
        $cekpesan = $this->kontak->countAllResults();
        $cekadmin = $this->admin->countAllResults();

        $data['title'] = "Admin Dashboard";
        $data['activeMenu'] = "dashboard";
        $data['cekproduk'] = $cekproduk;
        $data['cekagen'] = $cekagen;
        $data['cekapis'] = $cekapis;
        $data['cekpesan'] = $cekpesan;
        $data['cekadmin'] = $cekadmin;
        
        echo view('v_header', $data);
        echo view('v_navbar');
        echo view('v_sidebar', $data);
        echo view('v_dashboard', $data);
        echo view('v_footer');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

    protected $produk;

    //MANAGE AGEN CONTROLLER

    public function produk()
    {
        $data['title'] = "Produk";
        $data['activeMenu'] = "produk";
        $data['produk'] = $this->produk->findAll();
        echo view('v_header', $data);
        echo view('v_navbar');
        echo view('v_sidebar', $data);
        echo view('AV_produk', $data);
        echo view('v_footer');
        echo view('v_plugins');
    }

    public function tambah_produk()
    {
        $data['title'] = "Tambah Produk";
        $data['activeMenu'] = "produk";
        $data['produk'] = $this->produk->findAll();
        echo view('v_header', $data);
        echo view('v_navbar');
        echo view('v_sidebar', $data);
        echo view('AV_tambah_produk');
        echo view('v_footer');
    }

    public function store_new()
    {
        if (!$this->validate([
            'nama_produk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jenis_produk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'harga_produk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'stok_produk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->produk->insert([
            'nama_produk' => $this->request->getVar('nama_produk'),
            'jenis_produk' => $this->request->getVar('jenis_produk'),
            'stok_produk' => $this->request->getVar('stok_produk'),
            'harga_produk' => $this->request->getVar('harga_produk'),
        ]);
        session()->setFlashdata('message', 'Berhasil Menambahkan Produk Baru!');
        return redirect()->to('/admin/produk');
    }

    function edit_produk($id_produk)
    {
        $dataProduk = $this->produk->find($id_produk);
        if (empty($dataProduk)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Tidak ditemukan !');
        }
        $data['produk'] = $dataProduk;
        $data['title'] = "Update Produk";
        $data['activeMenu'] = "produk";
        //$data['produk'] = $this->produk->findAll();
        echo view('v_header', $data);
        echo view('v_navbar');
        echo view('v_sidebar', $data);
        echo view('AV_edit_produk', $data);
        echo view('v_footer');
    }

    public function do_edit_produk($id_produk)
    {
        if (!$this->validate([
            'nama_produk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jenis_produk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'harga_produk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'stok_produk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->produk->update($id_produk, [
            'nama_produk' => $this->request->getVar('nama_produk'),
            'jenis_produk' => $this->request->getVar('jenis_produk'),
            'harga_produk' => $this->request->getVar('harga_produk'),
            'stok_produk' => $this->request->getVar('jenis_produk')
        ]);
        session()->setFlashdata('message', 'Berhasil Memperbarui Produk!');
        return redirect()->to('/admin/produk');
    }

    function hapus_produk($id_produk)
    {
        $dataProduk = $this->produk->find($id_produk);
        if (empty($dataProduk)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Tidak ditemukan !');
        }
        $this->produk->delete($id_produk);
        session()->setFlashdata('message', 'Berhasil Menghapus Produk!');
        return redirect()->to('/admin/produk');
    }

    //MANAGE AGEN CONTROLLER

    public function agen()
    {
        $data['title'] = "Agen";
        $data['activeMenu'] = "agen";
        $data['agen'] = $this->agen->findAll();
        echo view('v_header', $data);
        echo view('v_navbar');
        echo view('v_sidebar', $data);
        echo view('AV_agen', $data);
        echo view('v_footer');
        echo view('v_plugins');
    }

    public function tambah_agen()
    {
        $data['title'] = "Tambah Agen";
        $data['activeMenu'] = "agen";
        $data['agen'] = $this->agen->findAll();
        echo view('v_header', $data);
        echo view('v_navbar');
        echo view('v_sidebar', $data);
        echo view('AV_tambah_agen');
        echo view('v_footer');
    }

    public function store_new_agen()
    {
        if (!$this->validate([
            'nama_agen' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'email_agen' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => 'Email Harus Valid'
                ]
            ],
            'nope_agen' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'alamat_agen' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->agen->insert([
            'nama_agen' => $this->request->getVar('nama_agen'),
            'email_agen' => $this->request->getVar('email_agen'),
            'nope_agen' => $this->request->getVar('nope_agen'),
            'alamat_agen' => $this->request->getVar('alamat_agen'),
        ]);
        session()->setFlashdata('message', 'Berhasil Menambahkan Data Agen!');
        return redirect()->to('/admin/agen');
    }

    function edit_agen($id_agen)
    {
        $dataAgen = $this->agen->find($id_agen);
        if (empty($dataAgen)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Agen Tidak ditemukan !');
        }
        $data['agen'] = $dataAgen;
        $data['title'] = "Update Agen";
        $data['activeMenu'] = "agen";
        echo view('v_header', $data);
        echo view('v_navbar');
        echo view('v_sidebar', $data);
        echo view('AV_edit_agen', $data);
        echo view('v_footer');
    }

    public function do_edit_agen($id_agen)
    {
        if (!$this->validate([
            'nama_agen' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'email_agen' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nope_agen' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'alamat_agen' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->agen->update($id_agen, [
            'nama_agen' => $this->request->getVar('nama_agen'),
            'email_agen' => $this->request->getVar('email_agen'),
            'nope_agen' => $this->request->getVar('nope_agen'),
            'alamat_agen' => $this->request->getVar('alamat_agen')
        ]);
        session()->setFlashdata('message', 'Berhasil Memperbarui Agen!');
        return redirect()->to('/admin/agen');
    }

    function hapus_agen($id_agen)
    {
        $dataAgen = $this->agen->find($id_agen);
        if (empty($dataAgen)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Agen Tidak ditemukan !');
        }
        $this->agen->delete($id_agen);
        session()->setFlashdata('message', 'Berhasil Menghapus Data Agen!');
        return redirect()->to('/admin/agen');
    }

    //MANAGE PESAN CONTROLLER

    public function pesan()
    {
        $data['title'] = "Kontak";
        $data['activeMenu'] = "kontak";
        $data['kontak'] = $this->kontak->findAll();
        echo view('v_header', $data);
        echo view('v_navbar');
        echo view('v_sidebar', $data);
        echo view('AV_kontak', $data);
        echo view('v_footer');
        echo view('v_plugins');
    }

    function hapus_pesan($id_pesan)
    {
        $dataKontak = $this->kontak->find($id_pesan);
        if (empty($dataKontak)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Agen Tidak ditemukan !');
        }
        $this->kontak->delete($id_pesan);
        session()->setFlashdata('message', 'Berhasil Menghapus Pesan!');
        return redirect()->to('/admin/pesan');
    }

    //MANAGE ADMIN CONTROLLER

    public function super()
    {
        $data['title'] = "Akses Admin";
        $data['activeMenu'] = "admin";
        $data['admin'] = $this->admin->findAll();
        echo view('v_header', $data);
        echo view('v_navbar');
        echo view('v_sidebar', $data);
        echo view('AV_admin', $data);
        echo view('v_footer');
        echo view('v_plugins');
    }

    public function sa_add()
    {

        $data['title'] = "Akses Admin";
        $data['activeMenu'] = "admin";
        $data['admin'] = $this->admin->findAll();
        echo view('v_header', $data);
        echo view('v_navbar');
        echo view('v_sidebar', $data);
        echo view('AV_tambah_admin');
        echo view('v_footer');
    }

    public function sa_submit()
    {
        if (!$this->validate([
            'unm' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Masukkan usernme yang akan digunakan!'
                ]
            ],
            'u_e' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Masukkan email!',
                    'valid_email' => 'Email Harus Valid'
                ]
            ],
            'u_p' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Masukkan password yang akan digunakan'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $pwd = $this->request->getVar('u_p');
        $pass = sha1($pwd);

        $this->admin->insert([
            'unm' => $this->request->getVar('unm'),
            'u_e' => $this->request->getVar('u_e'),
            // 'u_p' => $this->request->getVar(SHA1('u_p')),
            'u_p' => $pass,
        ]);
        session()->setFlashdata('message', 'Berhasil Menambahkan Kredensial Admin Baru!');
        return redirect()->to('/admin/super');
    }

    function edit_sa($id)
    {
        $dataAdmin = $this->admin->find($id);
        if (empty($dataAdmin)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Admin Tidak ditemukan !');
        }
        $data['admin'] = $dataAdmin;
        $data['title'] = "Update Admin";
        $data['activeMenu'] = "admin";
        echo view('v_header', $data);
        echo view('v_navbar');
        echo view('v_sidebar', $data);
        echo view('AV_edit_admin', $data);
        echo view('v_footer');
    }

    public function do_edit_sa($id)
    {
        if (!$this->validate([
            'unm' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Masukkan username!'
                ]
            ],
            'u_e' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Masukkan email!'
                ]
            ],
            'u_p' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Masukkan password baru!'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $pwd = $this->request->getVar('u_p');
        $pass = sha1($pwd);

        $this->admin->update($id, [
            'unm' => $this->request->getVar('unm'),
            'u_e' => $this->request->getVar('u_e'),
            'u_p' => $pass
        ]);
        session()->setFlashdata('message', 'Berhasil Memperbarui Kredensial!');
        return redirect()->to('/admin/super');
    }

    function hapus_sa($id)
    {
        $dataAdmin = $this->admin->find($id);
        if (empty($dataAdmin)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Agen Tidak ditemukan !');
        }
        $this->admin->delete($id);
        session()->setFlashdata('message', 'Berhasil Menghapus Kredensial!');
        return redirect()->to('/admin/super');
    }

    //MANAGE API USER CONTROLLER

    public function apis()
    {
        $data['title'] = "Akses API";
        $data['activeMenu'] = "apis";
        $data['apis'] = $this->apis->findAll();
        echo view('v_header', $data);
        echo view('v_navbar');
        echo view('v_sidebar', $data);
        echo view('AV_apis', $data);
        echo view('v_footer');
        echo view('v_plugins');
    }

    function apis_add()
    {

        $data['agen'] = $this->agen->findAll();
        $data['title'] = "Reset User Password";
        $data['activeMenu'] = "apis";
        $data['apis'] = $this->apis->findAll();
        echo view('v_header', $data);
        echo view('v_navbar');
        echo view('v_sidebar', $data);
        echo view('AV_tambah_apis', $data);
        echo view('v_footer');
    }

    public function apis_submit()
    {
        if (!$this->validate([
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pilih Email Agen!'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Masukkan password'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $pwd = $this->request->getVar('password');
        $pass = sha1($pwd);

        $this->apis->insert([
            'email' => $this->request->getVar('email'),
            'password' => $pass
        ]);
        session()->setFlashdata('message', 'Berhasil Menambahkan user API Baru!');
        return redirect()->to('/admin/apis');
    }

    function reset_apis($id)
    {
        $dataApis = $this->apis->find($id);
        if (empty($dataApis)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data APIS Tidak ditemukan !');
        }
        $data['apis'] = $dataApis;
        $data['title'] = "Resest API User Password";
        $data['activeMenu'] = "apis";
        echo view('v_header', $data);
        echo view('v_navbar');
        echo view('v_sidebar', $data);
        echo view('AV_reset_apis', $data);
        echo view('v_footer');
    }

    public function redo_apis($id)
    {
        if (!$this->validate([
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Masukkan password baru!'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $pwd = $this->request->getVar('password');
        $pass = sha1($pwd);

        $this->apis->update($id, [
            'password' => $pass
        ]);
        session()->setFlashdata('message', 'Berhasil Memperbarui Password!');
        return redirect()->to('/admin/apis');
    }

    function hapus_apis($id)
    {
        $dataApis = $this->apis->find($id);
        if (empty($dataApis)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Agen Tidak ditemukan !');
        }
        $this->apis->delete($id);
        session()->setFlashdata('message', 'Berhasil Menghapus Kredensial!');
        return redirect()->to('/admin/apis');
    }
}
