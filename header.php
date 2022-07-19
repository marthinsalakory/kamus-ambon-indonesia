<?php include 'fungsi.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kamus</title>
    <!-- icon web -->
    <link rel="Icon" href="assets/img/kamus.png" type="icons/x-icon">

    <!-- Vertikal Garis -->
    <style>
        .vl {
            border-left: 1px solid #CBCBCB;
            height: 70%;
            position: absolute;
            left: 50%;
            margin-left: -3px;
            top: 15%;
        }
    </style>

    <!-- Google font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Jquery JS -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- mycss -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Datatables CSS -->
    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
</head>

<body>
    <div class="position-relative">
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark position-fixed top-0" style="width: 100%; z-index: 2;">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/kamus.png" alt="" width="30" class="d-inline-block align-text-top me-2 rounded-circle bg-light">
                    Kaman
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item mx-2">
                            <a class="nav-link <?= nav_on('index.php'); ?>" aria-current="page" href="index.php">Beranda</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link <?= nav_on('terjemahkan_otomatis.php'); ?>" href="terjemahkan_otomatis.php">Terjemahkan Otomatis</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link <?= nav_on('kosakata.php'); ?>" href="kosakata.php">Kosakata</a>
                        </li>
                    </ul>
                    <div>
                        <button id="register" class="btn text-light" data-bs-toggle="modal" data-bs-target="#idmodal">Daftar</button>
                        <button id="login" class="btn btn-light text-primary" data-bs-toggle="modal" data-bs-target="#idmodal">Masuk</button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="idmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="" method="POST">
                    <div class="modal-header bg-primary text-light">
                        <h5 class="modal-title" id="ModalLabel">Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row nama_lengkap">
                            <div class="col-md-5 col-sm-12">
                                <label class="form-label" for="email">Nama Lengkap : </label>
                            </div>
                            <div class="col-md-7 col-sm-12">
                                <input required autocomplete="off" class="form-control" type="text" name="nama_lengkap" id="nama_lengkap">
                                <div class="valid-feedback v-nama_lengkap">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-5 col-sm-12">
                                <label class="form-label" for="email">Email : </label>
                            </div>
                            <div class="col-md-7 col-sm-12">
                                <input required autocomplete="off" class="form-control" type="text" name="email" id="email">
                                <div class="valid-feedback v-email">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3 password1">
                            <div class="col-md-5 col-sm-12">
                                <label class="form-label" for="password">Password : </label>
                            </div>
                            <div class="col-md-7 col-sm-12">
                                <input required autocomplete="off" class="form-control" type="password" name="password" id="password">
                                <div class="valid-feedback v-password">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-5 col-sm-12">
                                <label class="form-label" for="password1">Konfirmasi Password : </label>
                            </div>
                            <div class="col-md-7 col-sm-12">
                                <input required autocomplete="off" class="form-control" type="password" id="password1">
                                <div class="valid-feedback v-password1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="btn-register" name="register" type="button" class="btn btn-primary">register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>