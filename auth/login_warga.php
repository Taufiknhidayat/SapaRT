<?php
session_start();
include "../config/koneksi.php";

if (isset($_POST['login'])) {
    $u = $_POST['username'];
    $p = md5($_POST['password']);
    $cek = mysqli_query($conn, "SELECT * FROM warga WHERE username='$u' AND password='$p'");

    if (mysqli_num_rows($cek) > 0) {
        $data = mysqli_fetch_assoc($cek);
        $_SESSION['warga'] = $data; // Simpan sesi login warga
        header("Location: ../warga/index.php");
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <title>Login Warga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="bg-light d-flex align-items-center" style="min-height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card border-0 shadow-lg rounded-4">
                    <div class="card-body p-4">
                        <h4 class="fw-bold text-primary text-center mb-4">Login SapaRT</h4> <?php if (isset($error)) echo "<div class='alert alert-danger py-2 small'>$error</div>"; ?>
                        <form method="post">
                            <div class="mb-3"><label class="form-label small fw-bold">Username</label><input type="text" name="username" class="form-control" required></div>
                            <div class="mb-3"><label class="form-label small fw-bold">Password</label><input type="password" name="password" class="form-control" required></div>
                            <button name="login" class="btn btn-primary w-100 mb-2">Masuk</button>
                            <a href="../index.php" class="btn btn-outline-secondary w-100 mb-3">Kembali ke Beranda</a>
                            <p class="text-center small">Belum punya akun? <a href="register.php" class="text-primary fw-bold">Daftar</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>