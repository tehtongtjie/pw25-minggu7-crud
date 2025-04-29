<?php
session_start();
include("header.php");

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: admin_login.php");
    exit;
}

$name = "";
$email = "";
$phone_number = "";
$kendaraan = "";
$domisili = "";
$error = "";
$sukses = "";

if (isset($_GET['op']) && $_GET['op'] == 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql1 = "DELETE FROM crud_071 WHERE id = '$id'";
    $q1 = mysqli_query($koneksi, $sql1);
    if ($q1) {
        $sukses = "Berhasil menghapus data.";
    } else {
        $error = "Gagal menghapus data: " . mysqli_error($koneksi);
    }
}

if (isset($_GET['op']) && $_GET['op'] == 'edit' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql1 = "SELECT * FROM crud_071 WHERE id = '$id'";
    $q1 = mysqli_query($koneksi, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $name = $r1['name'];
    $email = $r1['email'];
    $phone_number = $r1['phone_number'];
    $kendaraan = $r1['kendaraan'];
    $domisili = $r1['domisili'];

    if ($name == '') {
        $error = "Data tidak ditemukan";
    }
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone'];
    $kendaraan = $_POST['kendaraan'];
    $domisili = $_POST['domisili'];

    if ($name == '' || $email == '' || $phone_number == '' || $kendaraan == '' || $domisili == '') {
        $error = "Silahkan memasukkan data yang masih kosong.";
    }

    if (empty($error)) {
        if (isset($_POST['id'])) {

            $id = $_POST['id'];
            $sql1 = "UPDATE crud_071 SET name='$name', email='$email', phone_number='$phone_number', kendaraan='$kendaraan', domisili='$domisili' WHERE id = '$id'";
            $q1 = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Sukses mengupdate data.";
            } else {
                $error = "Gagal mengupdate data: " . mysqli_error($koneksi);
            }
        } else {

            $password = password_hash('default123', PASSWORD_DEFAULT); // Default password for admin-created accounts
            $sql1 = "INSERT INTO crud_071(name, email, password, phone_number, kendaraan, domisili)
            VALUES ('$name', '$email', '$password', '$phone_number', '$kendaraan', '$domisili')";
            $q1 = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Sukses memasukkan data baru.";
                $name = "";
                $email = "";
                $phone_number = "";
                $kendaraan = "";
                $domisili = "";
            } else {
                $error = "Gagal memasukkan data: " . mysqli_error($koneksi);
            }
        }
    }
}
?>

<div class="container admin-container">
    <h1>Admin Panel NusaVolt</h1>
    <p class="admin-subtitle">Kelola data pengguna NusaVolt</p>

    <?php
    if ($error) {
    ?>
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            <?php echo $error; ?>
        </div>
    <?php
    }
    ?>

    <?php
    if ($sukses) {
    ?>
        <div class="alert alert-primary d-flex align-items-center" role="alert">
            <?php echo $sukses; ?>
        </div>
    <?php
    }
    ?>


    <!-- Styles -->
    <link rel="stylesheet" href="../style/admin.css" />

    <div class="card mb-4">
        <div class="card-header">
            <h5><?php echo (isset($_GET['op']) && $_GET['op'] == 'edit') ? 'Edit Data Pengguna' : 'Tambah Pengguna Baru'; ?></h5>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <?php
                if (isset($_GET['op']) && $_GET['op'] == 'edit') {
                ?>
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                <?php
                }
                ?>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Nomor Handphone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone_number; ?>">
                </div>

                <div class="mb-3">
                    <label for="kendaraan" class="form-label">Kendaraan</label>
                    <input type="text" class="form-control" id="kendaraan" name="kendaraan" value="<?php echo $kendaraan; ?>">
                </div>

                <div class="mb-3">
                    <label for="domisili" class="form-label">Provinsi</label>
                    <input type="text" class="form-control" id="domisili" name="domisili" value="<?php echo $domisili; ?>">
                </div>

                <div class="form-actions">
                    <button type="submit" name="submit" class="btn btn-primary">
                        <?php echo (isset($_GET['op']) && $_GET['op'] == 'edit') ? 'Update' : 'Simpan'; ?>
                    </button>
                    <?php
                    if (isset($_GET['op']) && $_GET['op'] == 'edit') {
                    ?>
                        <a href="admin.php" class="btn btn-secondary">Batal</a>
                    <?php
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5>Daftar Pengguna</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Nomor HP</th>
                            <th>Kendaraan</th>
                            <th>Provinsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2 = "SELECT * FROM crud_071 ORDER BY id DESC";
                        $q2 = mysqli_query($koneksi, $sql2);

                        if (!$q2) {
                            echo '<div class="alert alert-danger">Error executing query: ' . mysqli_error($koneksi) . '</div>';
                        } else {
                            $urut = 1;
                            if (mysqli_num_rows($q2) > 0) {
                                while ($r2 = mysqli_fetch_array($q2)) {
                                    $id = $r2['id'];
                                    $name = $r2['name'];
                                    $email = $r2['email'];
                                    $phone_number = $r2['phone_number'];
                                    $kendaraan = $r2['kendaraan'];
                                    $domisili = $r2['domisili'];
                        ?>
                                    <tr>
                                        <td><?php echo $urut++; ?></td>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $email; ?></td>
                                        <td><?php echo $phone_number; ?></td>
                                        <td><?php echo $kendaraan; ?></td>
                                        <td><?php echo $domisili; ?></td>
                                        <td>
                                            <a href="admin.php?op=edit&id=<?php echo $id; ?>" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="admin.php?op=delete&id=<?php echo $id; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="7" class="text-center">Tidak ada data pengguna.</td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mt-3 text-end">
        <a href="logout.php" class="btn btn-secondary">Logout</a>
    </div>
</div>

<?php include("footer.php"); ?>