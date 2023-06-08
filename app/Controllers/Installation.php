<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Installation extends BaseController
{
    public function index()
    {
        $file2 = new \CodeIgniter\Files\File("../.env");
        if ($file2->getRealPath()) {
            echo "Software Telah Terinstall";
        } else {
            return view('install');
        }
    }

    function writeconf($conf)
    {
        $file2 = new \CodeIgniter\Files\File("../.env");
        if ($file2->getRealPath()) {
            echo "env file loaded";
        } else {
            helper('filesystem');
            $file = new \CodeIgniter\Files\File("../");
            $data = '
CI_ENVIRONMENT = development
database.default.hostname = ' . $conf['server'] . '
database.default.database = ' . $conf['database'] . '
database.default.username = ' . $conf['username'] . '
database.default.password = ' . $conf['password'] . '
database.default.port = 3306   
        ';

            if (!write_file($file->getRealPath() . '/.env', $data)) {
                echo 'env file loaded';
            } else {
                return json_encode(array('status' => true,));
            }
        }
    }

    public function databasecon()
    {
        $request = \Config\Services::request();
        $data = $request->getVar();
        $servername = $data['server'];
        $username = $data['username'];
        $password = $data['password'];

        // Create connection
        $conn = mysqli_connect($servername, $username, $password);
        // Check connection


        // Create database
        if ($data['database']) {
            $sql = "CREATE DATABASE " . $data['database'];
            if (mysqli_query($conn, $sql)) {
                mysqli_select_db($conn, $data['database']);
                mysqli_query($conn, "CREATE TABLE barang ( id int(32) NOT NULL AUTO_INCREMENT, nama varchar(64) NOT NULL, type int(4) DEFAULT NULL, foto varchar(128) DEFAULT NULL, PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");
                mysqli_query($conn, "CREATE TABLE `peminjaman` (id int(32) NOT NULL AUTO_INCREMENT,id_siswa int(32) NOT NULL,id_barang int(32) NOT NULL,tanggal_pinjam timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,tanggal_kembali timestamp NULL DEFAULT NULL,penanggung_jawab int(32) NOT NULL DEFAULT '1', PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");
                mysqli_query($conn, "CREATE TABLE `siswa` (`id` int(11) NOT NULL AUTO_INCREMENT,`nisn` varchar(32) NOT NULL,`nama` varchar(64) NOT NULL,`foto` varchar(64) DEFAULT NULL,`ortu` varchar(64) DEFAULT NULL,`jurusan` varchar(16) NOT NULL, PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");
                mysqli_query($conn, "CREATE TABLE `type_barang` (`id` int(4) NOT NULL AUTO_INCREMENT,`type` varchar(64) NOT NULL, PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");
                $this->writeconf($data);
                return json_encode(array('status' => true,));
            } else {
                return json_encode(array('status' => false,));
                echo "Error creating database: " . mysqli_error($conn);
            }
        }

        if (!$conn) {
            return json_encode(array('status' => false,));
        } else {
            mysqli_close($conn);
            return json_encode(array('status' => true,));
        }
    }
}
