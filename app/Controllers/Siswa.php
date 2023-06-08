<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SiswaModel as SiswaModel;

class Siswa extends BaseController
{
    private $SiswaModel;
    public function __construct()
    {
        $this->SiswaModel = new SiswaModel();
    }

    public function index()
    {
        $dataSiswa = $this->SiswaModel->findAll();
        dd($dataSiswa);
    }

    public function search($keyword)
    {
        $dataSiswa = $this->SiswaModel->SiswaByAll($keyword);
        dd($dataSiswa);
    }

    public function searchbynisn($nisn)
    {
        $dataSiswa = $this->SiswaModel->SiswaByNISN($nisn);
        return json_encode($dataSiswa);
    }

    public function ceknisnsiswa($keyword)
    {
        if ($dataSiswa = $this->SiswaModel->SiswaByNISN($keyword)) {
            $dataSiswa['status'] = $this->SiswaModel->SiswaByStatusPeminjaman($dataSiswa['id']);
        }elseif ($dataSiswa = $this->SiswaModel->SiswaByNama($keyword)) {
            $dataSiswa['status'] = $this->SiswaModel->SiswaByStatusPeminjaman($dataSiswa['id']);
        }
        return json_encode($dataSiswa);
    }
}
