<?php

namespace App\Models;
 
use CodeIgniter\Model;
 
class M_admin extends Model
{
    protected $table = 'tb_sa';
    protected $allowedFields = ['unm','u_e','u_p','id_lvl'];
}