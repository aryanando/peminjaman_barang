<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel as BarangModel;

class Barang extends BaseController
{
    private $BarangModel;
    public function __construct()
    {
        $this->BarangModel = new BarangModel();
    }

    public function index()
    {
        $dataBarang = $this->BarangModel->findAll();
        dd($dataBarang);
    }
}
