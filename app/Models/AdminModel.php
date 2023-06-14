<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $db;
    protected $builderPeminjaman;
    protected $builderBarang;
    protected $builderSiswa;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builderPeminjaman = $this->db->table('peminjaman');
        $this->builderBarang = $this->db->table('barang');
        $this->builderSiswa = $this->db->table('siswa');
    }

    public function getAllData()
    {
        $data = array(
            'jumlahTotalPeminjaman' => $this->builderPeminjaman->get()->getNumRows(), 
            'jumlahTotalBarang' => $this->builderBarang->get()->getNumRows(), 
            'jumlahTotalSiswa' => $this->builderSiswa->get()->getNumRows(),
        );
        return $data;
    }

    public function addSiswa($dataSiswa){
        if ($this->builderSiswa->insert($dataSiswa)) {
            return true;
        }
        return false;
    }
    public function addBarang($dataBarang){
        if ($this->builderBarang->insert($dataBarang)) {
            return true;
        }
        return false;
    }
}
