<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'siswa';
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
        $this->builder = $this->db->table('siswa');
    }

    public function findAll(int $limit = 0, int $offset = 0)
    {
        return $this->builder->get()->getResultArray();
    }

    public function SiswaByNISN($nisn = null)
    {
        return $this->builder->getWhere(['nisn' => $nisn])->getRowArray();
    }

    public function SiswaByNama($nama = null)
    {
        return $this->builder->getWhere(['nama' => $nama])->getRowArray();
    }

    public function SiswaByAll($keyword = null)
    {
        $this->builder->like('nisn', $keyword);
        
        $this->builder->orLike('nama', $keyword);
        return $this->builder->getWhere()->getResultArray();
    }

    public function SiswaByStatusPeminjaman($keyword = null)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('peminjaman');
        $builder->where('id_siswa', $keyword);
        if ($builder->getWhere(['tanggal_kembali' => NULL])->getRowArray()){
            return false;
        }else {
            return true;
        }
    }
}
