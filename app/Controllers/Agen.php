<?php

namespace App\Controllers;

use App\Models\M_report;

class Agen extends BaseController
{
    public function index()
    {
        //API ACCESS
        helper(['RestClient']);
        $url = 'http://localhost/restfulapi/public/produk';
        $data = [];
        $response = akses_client('GET', $url, $data);
        // echo $response;
        $dataArray = json_decode($response, true);
        $menu['menu'] = "produk";
        $produk['produk'] = $dataArray;
        $title['title'] = "Data Produk";
        // foreach ($dataArray as $values) {
        //     echo "Nama Produk: " .$values['nama_produk'] . "<br/>"; 
        //     echo "Jenis Produk: " .$values['jenis_produk'] . "<br/>"; 
        //     echo "Harga Produk: " .$values['harga_produk'] . "<br/>"; 
        //     echo "Stok Produk: " .$values['stok_produk'] . "<br/><br/>"; 
        // }


        //VIEWS
        echo view('agen/v_header', $title);
        echo view('agen/v_sidebar', $menu);
        echo view('agen/v_navbar');
        echo view('agen/v_dashboard', $produk);
        echo view('agen/v_footer');
        echo view('agen/v_plugins');
    }

    function __construct()
    {
        $this->report = new M_report();
    }

    public function report()
    {
        $title['title'] = "Laporan Penjualan";
        $menu['menu'] = "report";
        $email = session()->get('member_email');
        $report['report'] = $this->report->findAll();
        $report['email'] = $email;

        $dataSesi = [
            'email' => $email,
        ];
        session()->set($dataSesi);
        echo view('agen/v_header', $title);
        echo view('agen/v_sidebar', $menu);
        echo view('agen/v_navbar');
        echo view('agen/v_report', $report);
        echo view('agen/v_footer');
    }

    function edit_report($id)
    {
        $dataReport = $this->report->find($id);
        if (empty($dataReport)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Report Tidak ditemukan !');
        }
        $title['title'] = "Update Produk Terjual";
        $menu['menu'] = "report";
        $data['report'] = $dataReport;

        echo view('agen/v_header', $title);
        echo view('agen/v_sidebar', $menu);
        echo view('agen/v_navbar');
        echo view('agen/v_edit_report', $data);
        echo view('agen/v_footer');
    }

    public function redo_report($id)
    {
        if (!$this->validate([
            'terjual' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Masukkan jumlah produk yang baru terjual!'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $stok_lama = $this->request->getVar('stok');
        $min_stok = $this->request->getVar('terjual');
        $stok = $stok_lama - $min_stok;

        $sudah_terjual = $this->request->getVar('sudah_terjual');
        $plus_jual = $this->request->getVar('terjual');
        $terjual = $sudah_terjual + $plus_jual;

        $this->report->update($id, [
            'stok' =>  $stok,
            'terjual' =>  $terjual
        ]);
        session()->setFlashdata('message', 'Berhasil Memperbarui Laporan!');
        return redirect()->to('/agen/report');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login_agen');
    }

    public function home()
    {
        $menu['menu'] = "home";
        $title['title'] = "Dashboard Agen";
        $email = session()->get('member_email');
        $report['report'] = $this->report->findAll();
        $report['email'] = $email;

        echo view('agen/v_header', $title);
        echo view('agen/v_sidebar', $menu);
        echo view('agen/v_navbar');
        echo view('agen/v_home', $report);
        echo view('agen/v_footer');
    }
}
