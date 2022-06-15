<?php

namespace App\Models;

use CodeIgniter\Model;

class M_adminprod extends Model
{
    protected $table = "produk";
    protected $primaryKey = "id_produk";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_produk', 'nama_produk', 'jenis_produk', 'stok_produk', 'harga_produk'];
}