<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;

class M_auth extends Model
{
    protected $table                = 'auth';
    protected $primaryKey           = 'id';
    protected $allowedFields        = ['email','password'];

    // Dates
    protected $useTimestamps        = false;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    function getEmail($email)
    {
        $builder = $this->table("auth");
        $data = $builder->where("email", $email)->first();
        if (!$data) {
            throw new Exception("Data auth tidak ditemukan");
        }

        return $data;
    }

}