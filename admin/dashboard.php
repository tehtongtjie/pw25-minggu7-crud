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

  <!-- Styles -->
  <link rel="stylesheet" href="../style/pengguna.css" />
</head>

<body>
  <!-- Navbar Start -->
  <nav class="navbar">
    <a href="#">
      <img
        src="../img/Logo Jemari.png"
        alt="Logo Jemari"
        style="height: 50px; width: auto; max-width: 150px" />
    </a>
    <div class="navbar-nav">
      <a href="#dashboard" id="homeBtn">Dashboard</a>
      <a href="#" id="mnjmBtn">Manajemen Stasiun</a>
      <a href="#" id="lprnBtn">Laporan</a>
      <a href="pengguna.php">Pengguna</a>
      <a href="#">Pengaturan</a>
      <a href="#">Keluar </a>
    </div>
    <div class="navbar-extra">
      <a href="#" id="menu"><i data-feather="menu"></i></a>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Hero Section Start -->
  <section class="hero" id="home">
    <main class="content">
      <h1>Temukan Charging <span>Station EV</span> Terdekat dengan Mudah</h1>
      <p>
        Jelajahi jalanan tanpa khawatir kehabisan baterai — stasiun pengisian ada di ujung jarimu.
      </p>
      <a href="daftar.html" class="cta">Mulai Berjualan!</a>
    </main>
  </section>
  <!-- Hero Section End -->

  <!-- About Section Start -->
  <section class="about" id="about">
    <div class="content">
      <h2>Tentang Kami</h2>
      <div class="row">
        <div class="text">
          <p>
            <span>JemariNTB</span> adalah platform digital yang hadir untuk
            mendorong kemajuan UMKM di Nusa Tenggara Barat. Kami memberikan
            solusi terpadu bagi pelaku usaha lokal agar bisa menjual produk,
            mengelola bisnis, dan memperluas jangkauan pasar secara lebih
            mudah dan efisien melalui teknologi. Dengan semangat kolaborasi
            bersama pemerintah dan komunitas, JemariNTB berkomitmen membangun
            ekosistem digital yang mendukung pertumbuhan UMKM yang modern,
            mandiri, dan berdaya saing tinggi di tingkat lokal maupun
            nasional.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section End -->

  <!-- umkm start -->
  <section class="umkm" id="umkm">
    <h2 class="section-title">UMKM Aktif di <span>JemariNTB</span></h2>
    <div class="table-container">
      <table class="sales-table">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama UMKM</th>
            <th>Jenis Usaha</th>
            <th>Lokasi</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>KopiLokal NTB</td>
            <td>Minuman</td>
            <td>Lombok Barat</td>
            <td><span class="status tersedia">Aktif</span></td>
            <td><a href="#" class="btn-detail">Lihat</a></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Tenun Kita Lombok</td>
            <td>Fashion / Tenun</td>
            <td>Lombok Timur</td>
            <td><span class="status tersedia">Aktif</span></td>
            <td><a href="#" class="btn-detail">Lihat</a></td>
          </tr>
          <tr>
            <td>3</td>
            <td>MaduAsli Sumbawa</td>
            <td>Produk Kesehatan</td>
            <td>Sumbawa</td>
            <td><span class="status tersedia">Aktif</span></td>
            <td><a href="#" class="btn-detail">Lihat</a></td>
          </tr>
          <tr>
            <td>4</td>
            <td>Sambal Gili Rasa</td>
            <td>Makanan Olahan</td>
            <td>Lombok Tengah</td>
            <td><span class="status tersedia">Aktif</span></td>
            <td><a href="#" class="btn-detail">Lihat</a></td>
          </tr>
          <tr>
            <td>5</td>
            <td>Lilin Aromaterapi NTB</td>
            <td>Kriya & Kerajinan</td>
            <td>Mataram</td>
            <td><span class="status tersedia">Aktif</span></td>
            <td><a href="#" class="btn-detail">Lihat</a></td>
          </tr>
          <tr>
            <td>6</td>
            <td>Keripik Pisang Rinjani</td>
            <td>Makanan Ringan</td>
            <td>Lombok Utara</td>
            <td><span class="status tersedia">Aktif</span></td>
            <td><a href="#" class="btn-detail">Lihat</a></td>
          </tr>
          <tr>
            <td>7</td>
            <td>Batik Sasambo</td>
            <td>Fashion</td>
            <td>Bima</td>
            <td><span class="status tersedia">Aktif</span></td>
            <td><a href="#" class="btn-detail">Lihat</a></td>
          </tr>
          <tr>
            <td>8</td>
            <td>NTB Organik</td>
            <td>Pertanian</td>
            <td>Dompu</td>
            <td><span class="status tersedia">Aktif</span></td>
            <td><a href="#" class="btn-detail">Lihat</a></td>
          </tr>
          <tr>
            <td>9</td>
            <td>Kerajinan Anyaman Taliwang</td>
            <td>Kriya & Kerajinan</td>
            <td>Sumbawa Barat</td>
            <td><span class="status tersedia">Aktif</span></td>
            <td><a href="#" class="btn-detail">Lihat</a></td>
          </tr>
          <tr>
            <td>10</td>
            <td>Roti Bakar Kekinian</td>
            <td>Makanan & Minuman</td>
            <td>Kota Mataram</td>
            <td><span class="status tersedia">Aktif</span></td>
            <td><a href="#" class="btn-detail">Lihat</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
  <!-- umkm end -->

  <!-- footer -->
  <footer>
    <div class="footer">
      <div class="footer-text">
        <p>Copyright &copy; 2023, JemariNTB</p>
      </div>
    </div>
  </footer>
  <!-- footer end -->

  <!-- Icons -->
  <script>
    feather.replace();
  </script>

  <!-- JavaScript -->
  <script src="../js/script.js"></script>
</body>

</html>