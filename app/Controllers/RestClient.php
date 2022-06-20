<?php

namespace App\Controllers;

class RestClient extends BaseController
{
    public function index()
    {
        // $client = \Config\Services::curlrequest();
        // $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6Im1vaHN5YWhyaTEwQGdtYWlsLmNvbSIsImlhdCI6MTY1NTQxNTM4OCwiZXhwIjoxNjU1NDE4OTg4fQ.IbVdMXudzZlFGGi4oXNtE3nhVrtAzlI0DR5LG7n7ue4";
        // $headers = [
        //     'Authorization' => 'Bearer ' . $token
        // ];

        //GET
        // $url = 'http://localhost/restfulapi/public/produk';
        // $response = $client->request('GET', $url, ['headers' => $headers, 'http_errors' => false]);
        //print_r($response);

        // POST
        // $url = 'http://localhost/restfulapi/public/produk';
        // $data = [
        //     'nama_produk' => 'produkREST',
        //     'jenis_produk' => 'Serbuk Instant',
        //     'harga_produk' => '10000',
        //     'stok_produk' => '100'
        // ];
        // $response = $client->request('POST', $url, ['form_params'=> $data, 'headers' => $headers, 'http_errors' => false]);


        //PUT
        // $url = 'http://localhost/restfulapi/public/produk/17';
        // $data = [
        //     'nama_produk' => 'produkREST_KEDUA',
        //     'jenis_produk' => 'Serbuk Instant',
        //     'harga_produk' => '10000',
        //     'stok_produk' => '100',

        // ];
        // $response = $client->request('PUT', $url, ['form_params'=> $data, 'headers' => $headers, 'http_errors' => false]);


        //DELETE
        // $url = 'http://localhost/restfulapi/public/produk/17';
        // $data = [];
        // $response = $client->request('DELETE', $url, ['form_params' => $data, 'headers' => $headers, 'http_errors' => false]);
        // echo $response->getBody();

        helper(['RestClient']);
        $url = 'http://localhost/restfulapi/public/produk';
        $data = [];
        $response = akses_client('GET', $url, $data);
        echo $response;

        $dataArray = json_decode($response, true);
        foreach ($dataArray as $values) {
            echo "<br/><br/>";
            echo "[DECODED]<br/>";
            echo "Nama Produk: " .$values['nama_produk'] . "<br/>"; 
            echo "Jenis Produk: " .$values['jenis_produk'] . "<br/>"; 
            echo "Harga Produk: " .$values['harga_produk'] . "<br/>"; 
            echo "Stok Produk: " .$values['stok_produk'] . "<br/>"; 
        }
    }
}
