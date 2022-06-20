<?php

namespace App\Models;

use CodeIgniter\Model;

class M_report extends Model
{
    protected $table = "agen_report";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $allowedFields = ['id', 'email', 'nama_agen', 'stok', 'terjual', 'upah'];
}