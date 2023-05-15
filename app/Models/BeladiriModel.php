<?php

namespace App\Models;

use CodeIgniter\Model;

class BeladiriModel extends Model
{
    protected $table = "beladiri";
    protected $primaryKey = "id";
    protected $allowedFields = ['beladiri', 'img'];

    public function getNamaBeladiri($id)
    {
        $builder = $this->db->table('beladiri');
        $builder->where('id', $id);
        return $builder->get()->getResult();
    }

    public function getDetailBeladiri($id)
    {
        $builder = $this->db->table('beladiri');
        $builder->where('id', $id);
        return $builder->get()->getResult();
    }
}
