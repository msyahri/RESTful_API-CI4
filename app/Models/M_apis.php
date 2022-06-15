<?php

namespace App\Models;
 
use CodeIgniter\Model;
 
class M_apis extends Model
{
    protected $table = 'auth';
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $allowedFields = ['email', 'password'];
}