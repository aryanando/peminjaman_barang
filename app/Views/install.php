<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card text-center mt-5">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="true" href="#" id="nav-step-1">STEP 1 - Check</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="nav-step-2">STEP 2 - Pusat Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="nav-step-3">STEP 3 - Struktur Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="nav-step-4">STEP 4 - Identitas </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li> -->
                </ul>
            </div>
            <div class="card-body" id="body-step-1">
                <h5 class="card-title">Koneksi Ke Server</h5>
                <p class="card-text">Masukkan informasi server database yang anda gunakan</p>
                <div class="container">
                    <div class="row mb-2">
                        <div class="col"></div>
                        <div class="col">
                            <form>
                                <div class="row g-3 align-items-center mb-2">
                                    <div class="col-4">
                                        <label for="inputServer" class="col-form-label">Server</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="inputServer" class="form-control" aria-describedby="passwordHelpInline">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center mb-2">
                                    <div class="col-4">
                                        <label for="inputUsername" class="col-form-label">Username</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="inputUsername" class="form-control" aria-describedby="passwordHelpInline">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center mb-2">
                                    <div class="col-4">
                                        <label for="inputPassword" class="col-form-label">Password</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="password" id="inputPassword" class="form-control" aria-describedby="passwordHelpInline">
                                    </div>
                                </div>

                            </form>
                            <button class="btn btn-primary" id="buttonCheckDatabase" onclick="checkDatabase('<?= base_url() ?>')">Check</button>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
            </div>
            <div class="card-body d-none" id="body-step-2">
                <h5 class="card-title">Buat Database Baru</h5>
                <p class="card-text">Masukkan nama database yang akan anda gunakan</p>
                <div class="container">
                    <div class="row mb-2">
                        <div class="col"></div>
                        <div class="col">
                            <form>
                                <div class="row g-3 align-items-center mb-2">
                                    <div class="col-4">
                                        <label for="inputDatabase" class="col-form-label">Database</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="inputDatabase" class="form-control" aria-describedby="passwordHelpInline">
                                    </div>
                                </div>
                            </form>
                            <button class="btn btn-primary" id="buttonCreateDatabase" onclick="createDatabase('<?= base_url() ?>')">Check</button>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="/assets/js/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="/assets/custom/js/install.js">
    
</script>
    
</html>