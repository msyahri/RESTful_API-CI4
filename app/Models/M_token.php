<?php
namespace App\Models;
use CodeIgniter\Model;

class M_token extends Model
{
    protected $table = 'token';
    protected $primaryKey = "id";
    //protected $returnType = "object";
    protected $allowedFields = ['id', 'token'];

    function getToken($id)
    {
        $builder = $this->table('token');
        $data = $builder->where('id', $id)->first();
        return $data['token'];
    }
}