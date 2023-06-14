<?php //dd($data) 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Administrator</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="/assets/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">
    <link href="/assets/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Administrator</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="/">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page content-->
    <main class="container overflow-auto">
        <div class="row my-3">
            <div class="col">
                <div class="card text-center">
                    <div class="card-header">
                        Total Barang Hingga Saat Ini
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Live Data</h5>
                        <p class="card-text count fs-1" id="jumlah-total-barang"><?= $data['jumlahTotalBarang'] ?></p>
                    </div>
                    <div class="card-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-8">
                                    <div class="text-muted float-start">
                                        <p id="barang-last-update-text">Terakhir Update Pada</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="float-end">
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addBarangModal"><i class="fas fa-plus"></i></button>
                                        <button type="button" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-header">
                        Total Peminjaman Hingga Saat Ini
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Live Data</h5>
                        <p class="card-text count fs-1"><?= $data['jumlahTotalPeminjaman'] ?></p>
                    </div>
                    <div class="card-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <div class="text-muted float-start">
                                        <p id="peminjaman-last-update-text">Terakhir Update Pada</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="float-end">
                                        <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='/';"><i class="fas fa-plus"></i></button>
                                        <button type="button" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-header">
                        Total Siswa Terdaftar Saat Ini
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Live Data</h5>
                        <p class="card-text count fs-1" id="jumlah-total-siswa"><?= $data['jumlahTotalSiswa'] ?></p>
                    </div>
                    <div class="card-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-8">
                                    <div class="text-muted float-start">
                                        <p id="siswa-last-update-text">Terakhir Update Pada</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="float-end">
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addSiswaModal"><i class="fas fa-plus"></i></button>
                                        <button type="button" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            </ul>
            <p class="text-center text-muted">&copy; 2023 Arsya Tech</p>
        </footer>
    </div>
    <div class="position-fixed bottom-0 end-0 p-3 " style="z-index: 11">
        <div id="liveToast" class="toast hide" style="background-color: #6edb77" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Tambah Siswa</strong>
                <small>View Second Ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Data siswa baru telah disimpan
            </div>
        </div>
    </div>

    <div class="modal fade" id="addSiswaModal" tabindex="-1" aria-labelledby="addSiswaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addSiswaModalLabel">Tambah Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="inputNamaSiswa" class="form-label">Nama :</label>
                        <input type="text" class="form-control" id="inputNamaSiswa" aria-describedby="namaSiswaHelp">
                        <div id="namaSiswaHelp" class="form-text d-none">Masukkan nama siswa</div>
                    </div>
                    <div class="mb-3">
                        <label for="inputNISNSiswa" class="form-label">NISN :</label>
                        <input type="text" class="form-control" id="inputNISNSiswa" aria-describedby="NISNSiswaHelp">
                        <div id="NISNSiswaHelp" class="form-text d-none">Masukkan NISN siswa</div>
                    </div>
                    <div class="mb-3">
                        <label for="inputJurusanSiswa" class="form-label">Jurusan :</label>
                        <input type="text" class="form-control" id="inputJurusanSiswa" aria-describedby="JurusanSiswaHelp">
                        <div id="JurusanSiswaHelp" class="form-text d-none">Masukkan Jurusan siswa</div>
                    </div>
                    <div class="mb-3">
                        <label for="inputAngkatanSiswa" class="form-label">Angkatan :</label>
                        <input type="text" class="form-control" id="inputAngkatanSiswa" aria-describedby="AngkatanSiswaHelp">
                        <div id="AngkatanSiswaHelp" class="form-text d-none">Masukkan Angkatan siswa</div>
                    </div>
                    <div class="mb-3">
                        <label for="inputOrtuSiswa" class="form-label">Ortu :</label>
                        <input type="text" class="form-control" id="inputOrtuSiswa" aria-describedby="OrtuSiswaHelp">
                        <div id="OrtuSiswaHelp" class="form-text d-none">Masukkan Ortu siswa</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="button-simpan-siswa-baru" onclick="addSiswa()">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addBarangModal" tabindex="-1" aria-labelledby="addBarangModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addBarangModalLabel">Tambah Barang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="inputNamaBarang" class="form-label">Nama :</label>
                        <input type="text" class="form-control" id="inputNamaBarang" aria-describedby="namaBarangHelp">
                        <div id="namaBarangHelp" class="form-text d-none">Masukkan nama Barang</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="button-simpan-barang-baru" onclick="addBarang()">Simpan</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap core JS-->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/jquery.dataTables.min.js"></script>
    <script src="/assets/js/chart.min.js"></script>
    <script>
        $('.count').each(function() {
            var $this = $(this);
            jQuery({
                Counter: 0
            }).animate({
                Counter: $this.text()
            }, {
                duration: 2000,
                easing: 'swing',
                step: function() {
                    $this.text(Math.ceil(this.Counter));
                }
            });
        });

        function addSiswa() {
            $.ajax({
                url: '<?= base_url() ?>admin/tambahsiswa/', // The targeted resource
                type: 'POST', // The type of HTTP request.
                data: {
                    ['nama']: $('#inputNamaSiswa').val(),
                    ['nisn']: $('#inputNISNSiswa').val(),
                    ['jurusan']: $('#inputJurusanSiswa').val(),
                    ['angkatan']: $('#inputAngkatanSiswa').val(),
                    ['ortu']: $('#inputOrtuSiswa').val(),
                }, // We pass our variables
                dataType: 'json', // The type of data to receive, here, from HTML.
                success: function(data, res, status) {
                    console.log(data);
                    if (data['status']) {
                        $('#jumlah-total-siswa').fadeOut(1000, function() {
                            $('#jumlah-total-siswa').text(parseInt($('#jumlah-total-siswa').text()) + 1).fadeIn(1000);
                        });
                        $('#button-simpan-siswa-baru').fadeOut(1000, );
                        $('.toast').toast('show');
                    }
                }
            });
        }

        $('#addSiswaModal').on('show.bs.modal', function() {
            $('#inputNamaSiswa').val('');
            $('#inputNISNSiswa').val('');
            $('#inputJurusanSiswa').val('');
            $('#inputAngkatanSiswa').val('');
            $('#inputOrtuSiswa').val('');
            $('#button-simpan-siswa-baru').show();
        })

        function addBarang() {
            $.ajax({
                url: '<?= base_url() ?>admin/tambahbarang/', // The targeted resource
                type: 'POST', // The type of HTTP request.
                data: {
                    ['nama']: $('#inputNamaBarang').val(),
                }, // We pass our variables
                dataType: 'json', // The type of data to receive, here, from HTML.
                success: function(data, res, status) {
                    console.log(data);
                    if (data['status']) {
                        $('#jumlah-total-barang').fadeOut(1000, function() {
                            $('#jumlah-total-barang').text(parseInt($('#jumlah-total-barang').text()) + 1).fadeIn(1000);
                        });
                        $('#button-simpan-barang-baru').fadeOut(1000, );
                        $('.toast').toast('show');
                    }
                }
            });
        }

        $('#addBarangModal').on('show.bs.modal', function() {
            $('#inputNamaBarang').val('')
            $('#button-simpan-barang-baru').show();
        })
    </script>
</body>

</html>