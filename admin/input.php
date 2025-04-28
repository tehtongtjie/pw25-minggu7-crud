<?php
include("header.php");
?>
<?php
$id = "";
$name = "";
$email = "";
$phone_number = "";
$error = "";
$sukses = "";

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone'];

    if ($id == '' || $name == '' || $email == '' || $phone_number == '') {
        $error = "Silahkan memasukkan data yang masih kosong.";
    }

    if (empty($error)) {
        $sql1 = "INSERT INTO crud_071(name, email, phone_number) VALUES ('$name', '$email', '$phone_number')";
        $q1 = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $sukses = "Sukses memasukkan data.";
        } else {
            $error = "Gagal memasukkan data.";
        }
    }
}
?>

<h1>Input Data</h1>
<div class="mb-3">
    <a href="pengguna.php">
        << Kembali ke halaman utama</a>
</div>

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

<form action="" method="post">
    <div class="mb-3">
        <label for="idpengguna" class="form-label">ID Pengguna</label>
        <input type="text" class="form-control" id="idpengguna" name="id" value="<?php echo $id; ?>" aria-describedby="idpenggunaHelp">
        <div id="idpenggunaHelp" class="form-text">Masukkan ID Pengguna.</div>
    </div>

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
        <label for="phone" class="form-label">Nomor Handphone</label>
        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone_number; ?>" aria-describedby="phoneHelp">
        <div id="phoneHelp" class="form-text">Masukkan Nomor Handphone Pengguna.</div>
    </div>

    <button type="submit" name="simpan" class="btn btn-primary">Simpan Data</button>
</form>

<?php include("footer.php"); ?>