<?php

namespace App\Controllers;

use App\Models\PeminjamanModel as PeminjamanModel;

class Home extends BaseController
{
    private $PeminjamanModel;
    public function __construct()
    {
        $this->PeminjamanModel = new PeminjamanModel();
    }
    public function index()
    {
        $data['dataPeminjaman'] = $this->PeminjamanModel->findAll();
        $data['dataSiswa'] = $this->getAllSiswa();
        //dd($data);
        return view('home', $data);
        //dd($dataPemninjaman);
    }
    public function kembali($id = null)
    {
        return $this->PeminjamanModel->Kembali($id);
    }
    public function pinjam()
    {
        $request = \Config\Services::request();
        $data = $request->getVar();
        if (count($data['nama_barang']) == 1) {
            if ($this->getDataBarang($data['nama_barang'][0])) {
                $newData = [
                    'id_siswa' => $this->getSiswaID($data['nisn']),
                    'id_barang' => $this->getDataBarang($data['nama_barang'][0]),
                ];
                $this->PeminjamanModel->insert($newData);
                return redirect()->to(base_url())->with('success', 'Data Berhasil Ditambahkan');
                // dd($newData);
            } else {
                return redirect()->to(base_url())->with('fail', 'Data Gagal Ditambahkan Barang Tidak Ditemukan');
            }
        } else {
            for ($i = 0; $i < count($data['nama_barang']); $i++) {
                if ($this->getDataBarang($data['nama_barang'][$i])) {
                    $newData = [
                        'id_siswa' => $this->getSiswaID($data['nisn']),
                        'id_barang' => $this->getDataBarang($data['nama_barang'][$i]),
                    ];
                    $this->PeminjamanModel->insert($newData);
                    // dd($newData);
                } else {
                    return redirect()->to(base_url())->with('fail', 'Data Gagal Ditambahkan ' . $data['nama_barang'][$i] . ' Tidak Ditemukan');
                }
            }
            return redirect()->to(base_url())->with('success', 'Data Berhasil Ditambahkan');
        }
    }

    public function ubah()
    {
        $request = \Config\Services::request();
        $data = $request->getVar();
        if ($this->getDataBarang($data['nama_barang'])) {
            $newData = [
                'id' => $data['id'],
                'id_barang' => $this->getDataBarang($data['nama_barang']),
            ];
            if ($this->PeminjamanModel->ubah($newData)) {
                return json_encode(array('status' => true, 'id' => $data['id'], 'id_barang' => $data['nama_barang']));
            } else {
                return json_encode(array('status' => false,));
            }
            // dd($newData);
        } else {
            return json_encode(array('status' => false,));
        }
    }




    // ----------------------------------------------------------------------------------

    function getSiswaID($var = null)
    {
        $userModel = model('SiswaModel');
        $dataSiswa = $userModel->SiswaByNISN($var);
        return $dataSiswa['id'];
    }

    function getDataBarang($var = null)
    {
        $userModel = model('BarangModel');
        $dataBarang = $userModel->BarangByName($var);
        if ($dataBarang !== Null) {
            return $dataBarang['id'];
        } else {
            return false;
        }
    }

    function getAllSiswa()
    {
        $userModel = model('SiswaModel');
        $dataSiswa = $userModel->findAll();
        return $dataSiswa;
    }
}
