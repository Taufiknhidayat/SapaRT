<?php
session_start();
if (!isset($_SESSION['warga'])) header("Location: ../auth/login_warga.php");
include "../config/koneksi.php";

if (isset($_POST['kirim'])) {
    $id_warga = $_SESSION['warga']['id'];
    $nama = $_SESSION['warga']['nama'];
    $isi = $_POST['isi'];
    // Simpan dengan id_warga
    mysqli_query($conn, "INSERT INTO aduan (id_warga, nama, isi_aduan) VALUES ('$id_warga', '$nama', '$isi')");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <title>Tulis Aduan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm col-md-6 mx-auto">
            <div class="card-body p-4">
                <h4 class="mb-3 fw-bold text-primary">Tulis Aduan Baru</h4>
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Isi Aduan</label>
                        <textarea name="isi" class="form-control" rows="5" placeholder="Jelaskan masalah Anda..." required></textarea>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="index.php" class="btn btn-secondary">Batal</a>
                        <button type="submit" name="kirim" class="btn btn-primary">Kirim Aduan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>