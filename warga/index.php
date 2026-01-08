<?php
session_start();
if (!isset($_SESSION['warga'])) header("Location: ../auth/login_warga.php");
include "../config/koneksi.php";

$id_warga = $_SESSION['warga']['id'];
// Ambil aduan HANYA milik warga yang login
$data = mysqli_query($conn, "SELECT * FROM aduan WHERE id_warga='$id_warga' ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <title>Dashboard Warga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">
                <i class="bi bi-chat-left-text-fill me-2"></i>SapaRT <span class="text-secondary small fw-normal">| Warga</span>
            </a>
            <div class="d-flex align-items-center">
                <span class="me-3 small fw-bold">Halo, <?= $_SESSION['warga']['nama'] ?></span>
                <a href="../auth/logout.php" class="btn btn-sm btn-outline-danger rounded-pill">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold text-primary">Aduan Saya</h4>
            <a href="tambah.php" class="btn btn-primary rounded-pill"><i class="bi bi-plus-lg me-1"></i> Buat Aduan Baru</a>
        </div>

        <div class="row">
            <?php if (mysqli_num_rows($data) > 0) {
                while ($d = mysqli_fetch_assoc($data)) {
                    $badge = ($d['status'] == 'Selesai') ? 'bg-success' : (($d['status'] == 'Diproses') ? 'bg-warning' : 'bg-secondary');
            ?>
                    <div class="col-md-6 mb-3">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="badge <?= $badge ?> rounded-pill"><?= $d['status'] ?></span>
                                    <small class="text-muted"><?= date('d M Y', strtotime($d['tanggal'])) ?></small>
                                </div>
                                <p class="card-text fs-5"><?= htmlspecialchars($d['isi_aduan']) ?></p>
                            </div>
                            <div class="card-footer bg-white border-top-0 d-flex justify-content-end gap-2 pb-3">
                                <?php if ($d['status'] == 'Masuk') { ?>
                                    <a href="edit.php?id=<?= $d['id'] ?>" class="btn btn-sm btn-outline-warning">Edit</a>
                                    <a href="hapus.php?id=<?= $d['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Hapus aduan ini?')">Hapus</a>
                                <?php } else { ?>
                                    <small class="text-muted fst-italic">Sedang diproses/selesai (Tidak bisa diedit)</small>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php }
            } else { ?>
                <div class="col-12 text-center py-5">
                    <img src="https://cdni.iconscout.com/illustration/premium/thumb/empty-state-2130362-1800926.png" width="200" style="opacity: 0.5">
                    <p class="text-muted mt-3">Belum ada aduan yang Anda kirim.</p>
                </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>