<?php
include("../inc/inc_koneksi.php")
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Nusavolt</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

</head>

<body class="container">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <img
                    src="../img/Logo Jemari.png"
                    alt="Logo Jemari"
                    style="height: 50px; width: auto; max-width: 150px" />
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Manajemen Stasiun</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Laporan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Pengguna</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Pengaturan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Keluar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>