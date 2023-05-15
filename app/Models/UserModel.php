<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "user";
    protected $primaryKey = "username";
    protected $allowedFields = ['username', 'password', 'email', 'img', 'name'];

    public function getProfile()
    {
        $builder = $this->db->table('user');
        $builder->where('username', session()->get('username'));
        return $builder->get()->getResultArray();
    }
}
