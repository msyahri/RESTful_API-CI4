<?php

namespace App\Models;

use CodeIgniter\Model;

class M_profil extends Model
{
    protected $table = "profil";
    protected $returnType = "object";
    protected $allowedFields = ['alamat', 'nope', 'email', 'website'];

    public function getUsers()
    {
        return $this->findAll();
    }
}