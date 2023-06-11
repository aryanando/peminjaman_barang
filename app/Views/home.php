<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>APLIKASI PEMINJAMAN SMKISLAM BATU</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">


    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="icon" href="/assets/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">

    <!-- Data Table -->
    <link href="/assets/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

    <style>
        .blink {
            animation: blink 5s;
        }

        @keyframes blink {
            0% {
                background: green;
            }

            100% {
                background: white;
            }
        }

        @-webkit-keyframes blink {
            0% {
                background: green;
            }

            100% {
                background: white;
            }
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-moz-keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-o-keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-ms-keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .success-alert {
            position: absolute;
            width: 100%;
            left: 0px;
            top: 0px;
            z-index: 1;
            animation: fadeIn 2s;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="/assets/css/custom/headers.css" rel="stylesheet">
</head>

<body>
    <?php
    if (session()->getFlashData('success')) {
    ?>
        <div class="alert alert-success d-flex align-items-center success-alert" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div class="center">
                <?= session()->getFlashData('success') ?>
            </div>
        </div>
    <?php
    }
    ?>

    <?php
    if (session()->getFlashData('fail')) {
    ?>
        <div class="alert alert-danger alert-dismissible fade show success-alert" role="alert">
            <?= session()->getFlashData('fail') ?>
        </div>
    <?php
    }
    ?>

    <?php
    if (session()->getFlashData('info')) {
    ?>
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <?= session()->getFlashData('info') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php
    }
    ?>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="bootstrap" viewBox="0 0 118 94">
            <title>Bootstrap</title>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
        </symbol>
        <symbol id="home" viewBox="0 0 16 16">
            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
        </symbol>
        <symbol id="speedometer2" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
            <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
        </symbol>
        <symbol id="table" viewBox="0 0 16 16">
            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
        </symbol>
        <symbol id="people-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </symbol>
        <symbol id="grid" viewBox="0 0 16 16">
            <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
        </symbol>
    </svg>

    <header>
        <div class="px-3 py-2 bg-dark text-white">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                        <!-- <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                            <use xlink:href="#bootstrap" />
                        </svg> -->
                        <img src="<?= base_url("assets/img/mini_logo_smkis1.png") ?>" alt="" width="60" height="60">
                    </a>

                    <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                        <li>
                            <a href="#" class="nav-link text-secondary">
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                    <use xlink:href="#home" />
                                </svg>
                                Home
                            </a>
                        </li>
                        <!-- <li>
                            <a href="#" class="nav-link text-white">
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                    <use xlink:href="#speedometer2" />
                                </svg>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                    <use xlink:href="#table" />
                                </svg>
                                Orders
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                    <use xlink:href="#grid" />
                                </svg>
                                Products
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                    <use xlink:href="#people-circle" />
                                </svg>
                                Customers
                            </a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>

    </header>
    <main class="container overflow-auto">
        <div class="row my-3">
            <!-- Form Peminjaman -->
            <div class="col">
                <form method="post" action="<?= base_url() ?>home/pinjam">
                    <div class="mb-3">
                        <label for="nisn-form" class="form-label">NISN / NAMA SISWA</label>
                        <input type="text" class="form-control" id="nisn-form" aria-describedby="emailHelp" name="nisn" required autofocus>
                        <div id="emailHelp" class="form-text">Tekan tab untuk otomatis cek</div>
                    </div>
                    <div class="mb-3 form-control p-3" id="input-barang-form">
                        <label for="kode-barang-form" class="form-label">Kode Barang</label>
                        <div class="input-group mb-1" id="id-form-barang">
                            <input type="text" class="form-control" id="kode-barang-form" name="nama_barang[]" required>
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-primary btn" onclick="addNewItemForm()">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="kode-guru-form" class="form-label">Kode Guru</label>
                        <input type="text" class="form-control" id="kode-guru-form" disabled value="1" name="kode_guru">
                    </div>
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
            <!-- Data Siswa Peminjam -->
            <div class="col">
                <div class="card" style="width: 18rem; width: auto;">
                    <img src="https://mm.widyatama.ac.id/wp-content/uploads/2020/08/dummy-profile-pic-male1.jpg" class="rounded mx-auto d-block" alt="..." id="foto-form-peminjaman" style="max-width: 200px;">
                    <div class="card-body">
                        <h5 class="card-title" id="nama-form-peminjaman">Nama</h5>
                        <p class="card-text" id="jurusan-form-peminjaman">-</p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
            <!-- Count -->
            <div class="col">
                <div class="card" style="width: auto;">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="true" onclick="changestatusnavbar(1)" id="status-harian">Harian</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" onclick="changestatusnavbar(2)" id="status-mingguan">Mingguan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" onclick="changestatusnavbar(3)" id="status-total">Keseluruhan</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body" style="width: auto;">
                        <h5 class="card-title" id="Jumlah-Peminjam">0</h5>
                        <h5 class="card-title" id="Total-Peminjam">0</h5>
                        <canvas id="myPieChart" width="100%" height="50"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- Data Peminjaman All -->
        <table id="example" class="display " style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode Barang</th>
                    <th>Nama</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0;
                $no2 = 0;
                $totalKeseluruhan = 0;
                $belumKembaliHariIni = 0;
                foreach ($dataPeminjaman as $data) {
                    // dd($data);
                    if ($data['tanggal_kembali'] == NULL) {
                        $no++;
                    }
                    $date = new DateTime($data['tanggal_pinjam']);
                    $dateNow = new DateTime('now');
                    $tanggal_Peminjaman = $date->format('Y-m-d');
                    if ($tanggal_Peminjaman == $dateNow->format('Y-m-d')) {
                        $no2++;
                    }
                    if ($tanggal_Peminjaman == $dateNow->format('Y-m-d') and $data['tanggal_kembali'] == NULL) {
                        $belumKembaliHariIni++;
                    }
                    $totalKeseluruhan++;

                ?>

                    <tr id="row-peminjaman-<?= $data['id_peminjaman'] ?>">
                        <td><?= $data['id_peminjaman'] ?></td>
                        <td id="datatable-nama-barang-<?= $data['id_peminjaman'] ?>"><?= $data['nama_barang'] ?></td>
                        <td><?= $data['nama_siswa'] ?></td>
                        <td><?= $data['tanggal_kembali'] == "" ? '<button type="button" class="btn btn-sm btn-warning">On Process</button>' : '<button type="button" class="btn btn-sm btn-success">Done</button>' ?></td>
                        <td><?= '<button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal" id="button-detail-' . $data['id_peminjaman'] . '"
                        data-bs-nama="' . $data['nama_siswa'] . '"
                        data-bs-nisn="' . $data['nisn'] . '" 
                        data-bs-namabarang="' . $data['nama_barang'] . '"
                        data-bs-idbarang="' . $data['id_barang'] . '"
                        data-bs-tanggalpinjam="' . $data['tanggal_pinjam'] . '"
                        data-bs-tanggalkembali="' . $data['tanggal_kembali'] . '"
                        data-bs-idpeminjaman="' . $data['id_peminjaman'] . '"
                        data-bs-jurusan="' . $data['jurusan'] . '"
                        >Detail</button>' ?></td>
                    </tr>

                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Kode Barang</th>
                    <th>Nama</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Peminjaman</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://randomuser.me/api/portraits/lego/0.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title" id="nama_siswa_form_kembali">Nama</h5>
                                    <h6 class="card-title" id="jurusan_siswa_form_kembali">Jurusan</h6>
                                    <p class="card-text">Silahkan klik <b>KONFIRMASI</b> untuk melanjutkan proses pengembalian</p>
                                    <p class="card-text">Kode Barang = </p>

                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control border-0 " disabled aria-label="Recipient's username" aria-describedby="basic-addon2" id="data_peminjaman">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" onclick="enableFormUbah()" id="btnUbahBarang">Edit</button>
                                        </div>
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success d-none" id="badge-ubah-barang">
                                            Ok
                                        </span>
                                    </div>
                                    <p class="card-text" id="data_tanggalpeminjaman">-</p>
                                    <p class="card-text" id="data_tanggalkembali">-</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" id="konfirmasi" onclick="">Konfirmasi</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <!-- <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li> -->
            </ul>
            <p class="text-center text-muted">&copy; 2023 Arsya Tech</p>
        </footer>
    </div>


    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/jquery.dataTables.min.js"></script>
    <script src="/assets/js/chart.min.js">

    </script>
    <script>
        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#292b2c';

        // Pie Chart Example
        var ctx = document.getElementById("myPieChart");
        var data = [<?= $no2 - $belumKembaliHariIni ?>, <?= $belumKembaliHariIni ?>];
        var myPieChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["Selesai", "Belum Kembali"],
                datasets: [{
                    data: data,
                    backgroundColor: ['#007bff', '#dc3545'],
                }],
            },
        });

        function changestatusnavbar(params) {
            if (params == 1) {
                $('#status-harian').addClass('active');
                $('#status-mingguan').removeClass('active');
                $('#status-total').removeClass('active');
                $(document).ready(function() {
                    $("#Jumlah-Peminjam").text("Belum Kembali = " + <?= $belumKembaliHariIni ?>);
                    $("#Total-Peminjam").text("Total Peminjaman = " + <?= $no2 ?>);
                });
                data = [<?= $no2 - $belumKembaliHariIni ?>, <?= $belumKembaliHariIni ?>];
                myPieChart.data.datasets[0].data = data;
                myPieChart.update();

            } else if (params == 2) {
                $('#status-harian').removeClass('active');
                $('#status-mingguan').addClass('active');
                $('#status-total').removeClass('active');
                $(document).ready(function() {
                    $("#Jumlah-Peminjam").text("Belum Kembali = COOMING SOON");
                    $("#Total-Peminjam").text("Total Peminjaman = COOMING SOON");
                });

            } else {
                $('#status-harian').removeClass('active');
                $('#status-mingguan').removeClass('active');
                $('#status-total').addClass('active');
                $(document).ready(function() {
                    $("#Jumlah-Peminjam").text("Belum Kembali = " + <?= $no ?>);
                    $("#Total-Peminjam").text("Total Peminjaman = " + <?= $totalKeseluruhan ?>);
                });
                data = [<?= $no ?>, <?= $totalKeseluruhan ?>];
                myPieChart.data.datasets[0].data = data;
                myPieChart.update();

            }
        }
    </script>

    <script>
        let id_form_barang = 0;
        $(document).ready(function() {
            $('#example').DataTable({
                order: [
                    [0, 'desc']
                ],
            });
        });


        var idBarang;
        var kodeBarang;
        var idTransaksi;
        var flagUbahData = false;
        var exampleModal = document.getElementById('exampleModal');
        exampleModal.addEventListener('show.bs.modal', function(event) {
            $('#badge-ubah-barang').addClass('d-none');
            var button = event.relatedTarget
            var nama_siswa = button.getAttribute('data-bs-nama')
            var jurusan_siswa = button.getAttribute('data-bs-jurusan')
            kodeBarang = button.getAttribute('data-bs-namabarang')
            var tanggal_pinjam = button.getAttribute('data-bs-tanggalpinjam')
            var id_pinjam = button.getAttribute('data-bs-idpeminjaman')
            var modalNamaSiswa = document.getElementById('nama_siswa_form_kembali')
            var dataKodeBarang = document.getElementById('data_peminjaman')
            var dataTanggalPeminjaman = document.getElementById('data_tanggalpeminjaman')
            var konfirmasiButton = document.getElementById('konfirmasi')
            idBarang = button.getAttribute('data-bs-idbarang');
            idTransaksi = id_pinjam;
            modalNamaSiswa.textContent = nama_siswa
            dataTanggalPeminjaman.textContent = "Tanggal Pinjam = " + tanggal_pinjam
            konfirmasiButton.setAttribute('onClick', "location.href='<?= base_url() ?>home/kembali/" + id_pinjam + "'")
            document.getElementById('jurusan_siswa_form_kembali').textContent = "Jurusan = " + jurusan_siswa
            $('#konfirmasi').trigger('focus')
            if (button.getAttribute('data-bs-tanggalkembali') !== "") {
                $('#konfirmasi').hide();
                $('#data_tanggalkembali').text('Kembali : ' + button.getAttribute('data-bs-tanggalkembali'));
                $('#btnUbahBarang').hide();
            } else {
                $('#konfirmasi').show();
                $('#data_tanggalkembali').text('Barang Belum Kembali - Tekan konfirmasi untuk pengembalian barang');
                $('#btnUbahBarang').show();
            }
            $('#data_peminjaman').val(kodeBarang);
        })
        exampleModal.addEventListener('hidden.bs.modal', function(event) {
            console.log(flagUbahData);
            if (flagUbahData == true) {
                $('#row-peminjaman-' + idTransaksi).addClass('blink');
                flagUbahData = false;
                $(function() {
                    function show_popup() {
                        $('#row-peminjaman-' + idTransaksi).removeClass('blink');
                    };
                    window.setTimeout(show_popup, 4500); // 4.5 seconds
                });
            }
        })
        $('#data_peminjaman').on('focusout', function() {
            if ($('#data_peminjaman').val() !== kodeBarang) {
                $('#data_peminjaman').prop('disabled', true);
                if ($('#data_peminjaman').val() !== "") {
                    //console.log($('#data_peminjaman').val());
                    $.ajax({
                        url: '<?= base_url() ?>home/ubah/', // The targeted resource
                        type: 'POST', // The type of HTTP request.
                        data: {
                            'id': idTransaksi,
                            'nama_barang': $('#data_peminjaman').val()
                        }, // We pass our variables
                        dataType: 'json', // The type of data to receive, here, from HTML.
                        success: function(data, res, status) {
                            if (data['status']) {
                                flagUbahData = true;
                                $('#badge-ubah-barang').removeClass('d-none');
                                $('#btnUbahBarang').hide();
                                $('#konfirmasi').hide();
                                $('#datatable-nama-barang-' + idTransaksi).html($('#data_peminjaman').val());
                                $('#button-detail-' + idTransaksi).attr('data-bs-namabarang', $('#data_peminjaman').val())
                                console.log(data);
                            }else{
                                alert(data['message']);
                            }
                        }
                    });
                }
            }

        })
        $("#nisn-form").change(function() {
            var content = $(this).text() // the users input
            if ($("#nisn-form").val() !== "") {
                $.ajax({
                    url: '<?= base_url() ?>siswa/ceknisnsiswa/' + $("#nisn-form").val(), // The targeted resource
                    type: 'GET', // The type of HTTP request.
                    //data: 'content=' + content, // We pass our variables
                    dataType: 'json', // The type of data to receive, here, from HTML.
                    success: function(data, res, status) {
                        var data_siswa = data;
                        // console.log(data_siswa);
                        if (data) {
                            if (data_siswa['status'] == true) {
                                $("#nama-form-peminjaman").text(data_siswa['nama']).css('color', 'black');
                                $("#jurusan-form-peminjaman").text(data_siswa['jurusan']).css('color', 'black');
                                if ($("#nisn-form").val() !== data_siswa['nisn']) {
                                    $("#nisn-form").fadeOut(500, function() {
                                        $("#nisn-form").val(data_siswa['nisn']).fadeIn(500);
                                    });
                                }
                            } else {
                                $("#nama-form-peminjaman").text(data_siswa['nama']).css('color', 'red');
                                $("#jurusan-form-peminjaman").text(data_siswa['jurusan'] + " - SEDANG MEMINJAM").css('color', 'red');
                                alert('Siswa Sedang Meminjam');
                                $("#nisn-form").val("");
                            }
                        } else {
                            $("#nisn-form").val("");
                            alert("Data Tidak Ditemukan");
                        }
                    }
                });
            }
        });

        $(document).ready(function() {
            $("#Jumlah-Peminjam").text("Belum Kembali = " + <?= $belumKembaliHariIni ?>);
            $("#Total-Peminjam").text("Total Peminjaman = " + <?= $no2 ?>);
        });

        $(document).ready(function() {
            window.setTimeout(function() {
                $(".success-alert").fadeTo(2000, 500).slideUp(500, function() {
                    $(".success-alert").slideUp(500);
                    $(".success-alert").remove();
                });
            }, 2000);
            $('#exampleModal').on('shown.bs.modal', function() {
                $('#konfirmasi').trigger('focus');
            });
        });

        function addNewItemForm() {
            id_form_barang++;
            $('#input-barang-form').append('<div class="input-group mb-1" id="id-form-barang' + id_form_barang + '"><input type="text" class="form-control" id="kode-barang-form' + id_form_barang + '" name="nama_barang[]" required><span class="input-group-btn"><button type="button" class="btn btn-danger btn" onclick="removeFormBarang(' + id_form_barang + ')"><i class="fa-solid">-</i></button></span></div>');
            $('#id-form-barang' + id_form_barang).hide().fadeIn(600);
        }

        function removeFormBarang(params) {
            $('#id-form-barang' + params).fadeOut(300, function() {
                $('#id-form-barang' + params).remove();
            });
        }
    </script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function() {
            var availableTags = [
                <?php foreach ($dataSiswa as $dataS) {
                    echo '"' . $dataS['nama'] . '", ';
                } ?>
            ];
            $("#nisn-form").autocomplete({
                source: availableTags
            });
        });

        function enableFormUbah() {
            $('#data_peminjaman').removeAttr('disabled').focus();
        }
    </script>

</body>

</html>