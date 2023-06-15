<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use CodeIgniter\Files\File;
use PhpParser\Node\Expr\Isset_;

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

    public function tambahSiswa()
    {
        $request = \Config\Services::request();
        $data = $request->getVar();
        if ($this->PeminjamanModel->addSiswa($data)) {
            $dataReturn['status'] = true;
        } else {
            $dataReturn['status'] = false;
        }
        return json_encode($dataReturn);
    }
    public function tambahBarang()
    {
        $request = \Config\Services::request();
        $data = $request->getVar();
        $dataReturn['data'] = $data;

        if ($this->validate(['foto' => 'uploaded[foto]|max_size[foto,1024]',])) {
            $img = $this->request->getFile('foto');
            $newName = $img->getRandomName();
            $img->move(ROOTPATH . 'public/assets/img/item/', $newName);
            if ($img->hasMoved()) {
                $filepath = ROOTPATH . 'public/assets/img/item/' . $newName;
                $data1 = ['uploaded_fileinfo' => new File($filepath)];
                $data['foto'] = $data1['uploaded_fileinfo']->getBasename();
            }
        }
        if ($this->PeminjamanModel->addBarang($data)) {
            $dataReturn['data'] = $data;
            $dataReturn['status'] = true;
        } else {
            $dataReturn['status'] = false;
        }
        return json_encode($dataReturn);
    }
}
