<?php

namespace App\Models;

use CodeIgniter\Model;

class DiskusiModel extends Model
{
    protected $table = "diskusi";
    protected $primaryKey = "id";
    protected $allowedFields = ['username', 'kode', 'pesan', 'date'];

    public function getDiskusi($kode)
    {
        $builder = $this->db->table('diskusi');
        $builder->where('kode', $kode);
        return $builder->get()->getResultArray();
    }

    public function getLastestDiskuis()
    {
        $builder = $this->db->table('diskusi');
        $builder->orderBy('date', 'ASC');
        $builder->limit(5);
        return $builder->get()->getResultArray();
    }
}
