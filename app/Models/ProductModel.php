<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class ProductModel extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    protected $allowedFields = ['nama_produk','jenis_produk','harga_produk','stok_produk'];

    protected $validationRules = [
        'nama_produk' => 'required',
        'jenis_produk' => 'required',
        'harga_produk' => 'required',
        'stok_produk' => 'required'
    ];

    protected $validationMessages = [
        'nama_produk' => [ 
            'required' =>'Nama produk belum diisi!'
        ],
        'jenis_produk' => [
            'required' => 'Jenis produk belum diisi!'
        ],
        'harga_produk' => [
            'required' => 'Harga produk belum diisi!'
        ],
        'stok_produk' => [
            'required' => 'Stok produk belum diisi!'
        ]
    ];
}