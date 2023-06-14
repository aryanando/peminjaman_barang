<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Admin extends BaseController
{
    private $PeminjamanModel;
    public function __construct()
    {
        $this->PeminjamanModel = new AdminModel();
    }
    public function index()
    {
        // dd ($this->PeminjamanModel->getAllData());
        $data['data'] = ($this->PeminjamanModel->getAllData());
        return view("admin", $data);
    }

    public function tambahSiswa() {
        $request = \Config\Services::request();
        $data = $request->getVar();
        if ($this->PeminjamanModel->addSiswa($data)) {
            $dataReturn['status'] = true;
        }else{
            $dataReturn['status'] = false;
        }
        return json_encode($dataReturn);
    }
    public function tambahBarang() {
        $request = \Config\Services::request();
        $data = $request->getVar();
        if ($this->PeminjamanModel->addBarang($data)) {
            $dataReturn['status'] = true;
        }else{
            $dataReturn['status'] = false;
        }
        return json_encode($dataReturn);
    }
}
