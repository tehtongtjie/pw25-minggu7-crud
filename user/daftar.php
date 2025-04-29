<?php
include("header.php");
?>
<?php
$name = "";
$email = "";
$password = "";
$phone_number = "";
$kendaraan = "";
$domisili = "";
$error = "";
$sukses = "";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $phone_number = $_POST['phone'];
    $kendaraan = $_POST['kendaraan'];
    $domisili = $_POST['domisili'];

    if ($name == '' || $email == '' || $password == '' || $phone_number == '' || $kendaraan == '' || $domisili == '') {
        $error = "Silahkan memasukkan data yang masih kosong.";
    }

    if (empty($error)) {
        $sql1 = "INSERT INTO crud_071(name, email, password, phone_number, kendaraan, domisili)
        VALUES ('$name', '$email', '$password', '$phone_number', '$kendaraan', '$domisili')";
        $q1 = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $sukses = "Sukses memasukkan data.";
        } else {
            $error = "Gagal memasukkan data: " . mysqli_error($koneksi);
        }
    }
}
?>

<h1>Register NusaVolt</h1>

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
<link rel="stylesheet" href="../style/daftar.css" />

<form action="" method="post">
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" aria-describedby="nameHelp">
        <div id="nameHelp" class="form-text">Masukkan Nama Pengguna.</div>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Masukkan Email Pengguna.</div>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp">
        <div id="passwordHelp" class="form-text">Masukkan Password Anda.</div>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Nomor Handphone</label>
        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone_number; ?>" aria-describedby="phoneHelp">
        <div id="phoneHelp" class="form-text">Masukkan Nomor Handphone Pengguna.</div>
    </div>

    <div class="mb-3">
        <label for="kendaraan" class="form-label">Kendaraan</label>
        <input type="text" class="form-control" id="kendaraan" name="kendaraan" value="<?php echo $kendaraan; ?>" aria-describedby="kendaraanHelp">
        <div id="kendaraanHelp" class="form-text">Masukkan Jenis Kendaraan anda.</div>
    </div>

    <div class="mb-3">
        <label for="domisili" class="form-label">Provinsi</label>
        <input type="text" class="form-control" id="domisili" name="domisili" value="<?php echo $domisili; ?>" aria-describedby="domisiliHelp">
        <div id="domisiliHelp" class="form-text">Masukkan Provinsi Anda.</div>
    </div>

    <div class="form-actions">
        <button type="submit" name="submit" class="btn btn-primary">Daftar</button>
    </div>

    <div class="mt-3 text-center">
        Sudah punya akun? <a href="login.php">Masuk disini</a>
    </div>
</form>

<?php include("footer.php"); ?>