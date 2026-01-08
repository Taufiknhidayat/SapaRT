<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: ../auth/login.php");
include "../config/koneksi.php";

$cari = $_GET['cari'] ?? '';
if ($cari) {
    $data = mysqli_query($conn, "SELECT * FROM aduan WHERE nama LIKE '%$cari%' ORDER BY id DESC");
} else {
    $data = mysqli_query($conn, "SELECT * FROM aduan ORDER BY id DESC");
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Aduan</title>
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
            <div class="navbar-nav ms-auto d-flex flex-row align-items-center">
                <a href="dashboard.php" class="nav-link text-white me-3">Dashboard</a>
                <a href="../auth/logout.php" class="btn btn-light btn-sm text-primary fw-bold rounded-pill px-3">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card shadow-sm p-0">
            <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                <h5 class="mb-0 fw-bold text-primary"><i class="bi bi-table me-2"></i>Daftar Aduan</h5>
                <form class="d-flex" method="GET">
                    <input class="form-control form-control-sm me-2" name="cari" placeholder="Cari..." value="<?= $cari ?>">
                    <button class="btn btn-primary btn-sm" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover table-striped mb-0 align-middle">
                        <thead class="bg-primary text-white text-center small">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Isi Aduan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="small">
                            <?php
                            $no = 1;
                            if (mysqli_num_rows($data) > 0) {
                                while ($d = mysqli_fetch_assoc($data)) {
                                    $badge = 'bg-secondary';
                                    if ($d['status'] == 'Diproses') $badge = 'bg-warning text-dark';
                                    if ($d['status'] == 'Selesai') $badge = 'bg-success';

                                    $nama = htmlspecialchars($d['nama'] ?? '-');
                                    $email = htmlspecialchars($d['email'] ?? '-');
                                    $isi = htmlspecialchars($d['isi_aduan'] ?? '-');
                            ?>
                                    <tr>
                                        <td class="text-center"><?= $no++ ?></td>
                                        <td>
                                            <strong><?= $nama ?></strong><br>
                                            <small class="text-muted"><?= $email ?></small>
                                        </td>
                                        <td><?= $isi ?></td>
                                        <td class="text-center"><span class="badge <?= $badge ?> rounded-pill"><?= $d['status'] ?></span></td>
                                        <td class="text-center">
                                            <?php if ($d['status'] != 'Selesai') { ?>
                                                <a href="proses_aduan.php?id=<?= $d['id'] ?>&status=Diproses" class="btn btn-sm btn-outline-warning" title="Proses"><i class="bi bi-hourglass-split"></i></a>
                                                <a href="proses_aduan.php?id=<?= $d['id'] ?>&status=Selesai" class="btn btn-sm btn-outline-success" title="Selesai"><i class="bi bi-check-lg"></i></a>
                                            <?php } else {
                                                echo '<i class="bi bi-check-circle-fill text-success"></i>';
                                            } ?>
                                            <a href="../hapus.php?id=<?= $d['id'] ?>" class="btn btn-sm btn-outline-danger ms-1" onclick="return confirm('Hapus?')"><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "<tr><td colspan='5' class='text-center py-4 text-muted'>Kosong</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>