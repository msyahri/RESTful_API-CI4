<?php

namespace App\Controllers;

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
        // foreach ($dataArray as $values) {
        //     echo "Nama Produk: " .$values['nama_produk'] . "<br/>"; 
        //     echo "Jenis Produk: " .$values['jenis_produk'] . "<br/>"; 
        //     echo "Harga Produk: " .$values['harga_produk'] . "<br/>"; 
        //     echo "Stok Produk: " .$values['stok_produk'] . "<br/><br/>"; 
        // }


        //VIEWS
        echo view('agen/v_header');
        echo view('agen/v_sidebar', $menu);
        echo view('agen/v_navbar');
        echo view('agen/v_dashboard', $produk);
        echo view('agen/v_footer');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login_agen');
    }
}
