<?php

namespace App\Models;

use CodeIgniter\Model;

class M_kontak extends Model
{
    protected $table = "kontak";
    protected $primaryKey = "id_pesan";
    protected $returnType = "object";
    protected $allowedFields = ['id_pesan', 'nama_pengirim', 'email_pengirim', 'nope_pengirim', 'subjek', 'pesan'];
}