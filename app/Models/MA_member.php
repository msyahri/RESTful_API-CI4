<?php

namespace App\Models;
 
use CodeIgniter\Model;
 
class MA_member extends Model
{
    protected $table = 'auth';
    protected $allowedFields = ['id','email','password'];
}