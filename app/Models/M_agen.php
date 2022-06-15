<?php

namespace App\Models;

use CodeIgniter\Model;

class M_agen extends Model
{
    protected $table = "agen";
    protected $primaryKey = "id_agen";
    protected $returnType = "object";
    protected $allowedFields = ['id_agen', 'nama_agen', 'email_agen', 'nope_agen', 'alamat_agen'];
}