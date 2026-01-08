<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: ../auth/login.php");
include "../config/koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM aduan");
$total = mysqli_num_rows($query);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="dashboard.php">
                <i class="bi bi-chat-left-text-fill me-2"></i>SapaRT <span class="fw-light ms-1 fs-6">Admin</span>
            </a>
            <div class="d-flex align-items-center">
                <span class="text-white me-3 small">Halo, <?= $_SESSION['admin'] ?></span>
                <a href="../auth/logout.php" class="btn btn-light btn-sm text-primary fw-bold rounded-pill px-3">
                    Logout <i class="bi bi-box-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm p-3">
                    <div class="card-body text-center">
                        <div class="display-4 text-primary mb-2">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h6 class="text-muted text-uppercase">Total Aduan</h6>
                        <h2 class="fw-bold mb-3"><?= $total ?></h2>
                        <a href="data_aduan.php" class="btn btn-outline-primary w-100 rounded-pill">Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>