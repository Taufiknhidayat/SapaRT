<?php
session_start();
include "../config/koneksi.php";

if (isset($_POST['login'])) {
    $u = $_POST['username'];
    $p = md5($_POST['password']);

    $q = mysqli_query($conn, "SELECT * FROM users WHERE username='$u' AND password='$p'");
    if (mysqli_num_rows($q) > 0) {
        $_SESSION['admin'] = $u;
        header("Location: ../admin/dashboard.php");
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="bg-light d-flex align-items-center" style="min-height: 100vh;">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <i class="bi bi-person-circle display-4 text-primary"></i>
                            <h4 class="mt-2 fw-bold">Login SapaRT</h4>
                            <p class="text-muted small">Silakan masuk untuk mengelola data.</p>
                        </div>

                        <?php if (isset($error)) echo "<div class='alert alert-danger py-2 small'>$error</div>"; ?>

                        <form method="post">
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Username</label>
                                <input class="form-control" name="username" placeholder="Masukkan username" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Password</label>
                                <input class="form-control" type="password" name="password" placeholder="Masukkan password" required>
                            </div>
                            <button name="login" class="btn btn-primary w-100 fw-bold mb-2">Masuk</button>
                            <a href="../index.php" class="btn btn-outline-secondary w-100">Kembali ke Beranda</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>