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

    <link rel="stylesheet" href="../style/nav.css" />
</head>

<body class="container-fluid">
    <header>
        <nav class="navbar navbar-expand-lg navbar-transparent bg-transparent">
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
                            <a class="nav-link active" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="https://www.google.com/maps/search/spklu+terdekat/@-8.5603181,115.3330859,10z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI1MDQyMy4wIKXMDSoASAFQAw%3D%3D">Find Station</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Route Planner</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">EV Tips</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="daftar.php">Sign In/Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>