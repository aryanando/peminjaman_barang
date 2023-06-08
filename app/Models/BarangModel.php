<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'barang';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    protected $db;
    protected $builder;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('barang');
    }

    public function findAll(int $limit = 0, int $offset = 0)
    {
        $result = $this->db->query('SELECT b.id id, b.nama nama, t.type nama_type_barang, b.foto foto FROM barang b INNER JOIN type_barang t WHERE b.type = t.id', false);
        return $result->getResultArray();
    }

    public function BarangByAll($keyword = null)
    {
        $this->builder->like('id', $keyword);
        $this->builder->orLike('nama', $keyword);
        return $this->builder->getWhere()->getResultArray();
    }

    public function BarangByName($keyword = null)
    {
        return $this->builder->getWhere(['nama' => $keyword])->getRowArray();
    }
}
