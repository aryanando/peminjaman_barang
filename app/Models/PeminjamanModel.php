<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class PeminjamanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'peminjaman';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_barang','id_siswa'];

    protected $db;
    protected $builder;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('peminjaman');
    }

    public function findAll(int $limit = 0, int $offset = 0)
    {
        if ($limit == 0) {
            $result = $this->db->query('SELECT p.id id_peminjaman, p.id_siswa, s.nisn, s.nama nama_siswa, s.foto foto_siswa, s.jurusan, p.id_barang, b.nama nama_barang, b.foto foto_barang, p.tanggal_pinjam,p.tanggal_kembali,p.penanggung_jawab FROM peminjaman p JOIN siswa s on p.id_siswa = s.id JOIN barang b on p.id_barang = b.id ORDER BY p.tanggal_kembali', false);
        }else{
            $result = $this->db->query('SELECT p.id id_peminjaman, p.id_siswa, s.nisn, s.nama nama_siswa, s.foto foto_siswa, s.jurusan, p.id_barang, b.nama nama_barang, b.foto foto_barang, p.tanggal_pinjam,p.tanggal_kembali,p.penanggung_jawab FROM peminjaman p JOIN siswa s on p.id_siswa = s.id JOIN barang b on p.id_barang = b.id ORDER BY p.tanggal_kembali LIMIT ' . $limit, false);
        }
        
        return $result->getResultArray();
    }

    public function PeminjamanByAll($keyword = null)
    {
        $this->builder->like('id', $keyword);
        $this->builder->orLike('nama', $keyword);
        return $this->builder->getWhere()->getResultArray();
    }

    public function Kembali($id = null)
    {
        $myTime = new Time('now', 'Asia/Jakarta');
        $data = [
            'tanggal_kembali' => $myTime,
        ];
        $this->builder->where("id", $id);
        if ($this->builder->update($data)){
            return redirect()->to(base_url())->with('success', 'Data Berhasil Diproses');
        }
    }

    public function Ubah($data)
    {
        $this->builder->where("id", $data['id']);
        if ($this->builder->update(array('id_barang' => $data['id_barang'], ))){
            return json_encode(array('status' => true, ));
        }
    }
}
