<?php
include "../config/koneksi.php";
if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $user = $_POST['username'];
    $pass = md5($_POST['password']);
    $telp = $_POST['telp'];

    mysqli_query($conn, "INSERT INTO warga (nama, username, password, telp) VALUES ('$nama', '$user', '$pass', '$telp')");
    echo "<script>alert('Pendaftaran berhasil! Silakan login.'); window.location='login_warga.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <title>Daftar Akun Warga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="bg-light d-flex align-items-center" style="min-height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card border-0 shadow-lg rounded-4">
                    <div class="card-body p-5">
                        <h4 class="fw-bold text-primary text-center mb-4">Daftar Akun Warga</h4>
                        <form method="post">
                            <div class="mb-3"><label class="form-label small fw-bold">Nama Lengkap</label><input type="text" name="nama" class="form-control" required></div>
                            <div class="mb-3"><label class="form-label small fw-bold">No. Telepon</label><input type="text" name="telp" class="form-control" required></div>
                            <div class="mb-3"><label class="form-label small fw-bold">Username</label><input type="text" name="username" class="form-control" required></div>
                            <div class="mb-3"><label class="form-label small fw-bold">Password</label><input type="password" name="password" class="form-control" required></div>
                            <button name="daftar" class="btn btn-primary w-100 mb-3">Daftar Sekarang</button>
                            <p class="text-center small">Sudah punya akun? <a href="login_warga.php" class="text-primary fw-bold">Login Disini</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>