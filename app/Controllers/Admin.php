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
        return view("admin");
    }
}
