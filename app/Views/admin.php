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
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="bootstrap" viewBox="0 0 118 94">
            <title>Bootstrap</title>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
        </symbol>
        <symbol id="home" viewBox="0 0 16 16">
            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
        </symbol>
        <symbol id="admin" viewBox="0 0 16 16">
            <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z" />
        </symbol>

    </svg>

    <header>
        <div class="px-3 py-2 bg-dark text-white">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                        <img src="<?= base_url("assets/img/mini_logo_smkis1.png") ?>" alt="" width="60" height="60">
                    </a>

                    <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                        <li>
                            <a href="/" class="nav-link text-secondary">
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                    <use xlink:href="#home" />
                                </svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="/admin" class="nav-link text-secondary text-white">
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                    <use xlink:href="#admin" />
                                </svg>
                                Admin
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </header>
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
                    <form action="" id="formBarang">
                        <div class="mb-3">
                            <label for="inputNamaBarang" class="form-label">Nama :</label>
                            <input type="text" class="form-control" id="inputNamaBarang" aria-describedby="namaBarangHelp" name="nama">
                            <div id="namaBarangHelp" class="form-text d-none">Masukkan nama Barang</div>
                        </div>
                        <div class="inputDeskripsiBarang">
                            <label for="inputDeskripsiBarang">Deskripsi :</label>
                            <textarea class="form-control" id="inputDeskripsiBarang" name="deskripsi" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Foto :</label>
                            <input class="form-control form-control-sm" id="formFileSm" type="file" name="foto">
                        </div>
                    </form>
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
    <script src="/assets/js/Chart.min.js"></script>
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
            var dataBarang = new FormData($('#formBarang')[0]);
            $.ajax({
                url: '<?= base_url() ?>admin/tambahbarang/', // The targeted resource
                type: 'POST', // The type of HTTP request.
                data: dataBarang,
                // {
                //     // ['deskripsi']: $('#inputDeskripsiBarang').val(),
                //     // ['nama']: $('#inputNamaBarang').val(),
                //     // ['foto']: $('#inputFotoBarang').prop('files'),
                // }, // We pass our variables
                dataType: 'json', // The type of data to receive, here, from HTML.
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                cache: false,
                timeout: 600000,
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