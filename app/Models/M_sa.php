<?php

namespace App\Models;
 
use CodeIgniter\Model;
 
class M_sa extends Model
{
    protected $table = 'tb_sa';
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $allowedFields = ['unm','u_e','u_p','id_lvl'];
}