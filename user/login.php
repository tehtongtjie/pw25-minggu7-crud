<?php
include("header.php");
?>
<?php
$email = "";
$error = "";
$sukses = "";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == '' || $password == '') {
        $error = "Silahkan memasukkan email dan password.";
    }

    if (empty($error)) {
        // Fetch user from database
        $sql = "SELECT * FROM crud_071 WHERE email = '$email'";
        $result = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);

            // Verify password
            if (password_verify($password, $user['password'])) {
                // Password is correct, start a new session
                session_start();

                // Store data in session variables
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $user['id'];
                $_SESSION["name"] = $user['name'];
                $_SESSION["email"] = $user['email'];

                // Redirect to welcome page
                header("location: home.php");
                exit;
            } else {
                // Password is not valid
                $error = "Password yang dimasukkan tidak valid.";
            }
        } else {
            // Email doesn't exist
            $error = "Email tidak ditemukan.";
        }
    }
}
?>

<h1>Login NusaVolt</h1>

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
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Masukkan Email Pengguna.</div>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp">
        <div id="passwordHelp" class="form-text">Masukkan Password Anda.</div>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Login</button>
    <p class="mt-3">Belum punya akun? <a href="daftar.php">Daftar disini</a></p>
    <p class="mt-3">Masuk Sebagai Admin? <a href="../admin/admin_login.php">Masuk Sebagai Admin!</a></p>
</form>