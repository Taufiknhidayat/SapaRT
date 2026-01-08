<?php
session_start();
include "../config/koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM aduan WHERE id=$id");
$d = mysqli_fetch_assoc($data);

if (isset($_POST['update'])) {
    $isi = $_POST['isi'];
    mysqli_query($conn, "UPDATE aduan SET isi_aduan='$isi' WHERE id=$id");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <title>Edit Aduan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm col-md-6 mx-auto">
            <div class="card-body p-4">
                <h4 class="mb-3 fw-bold text-warning">Edit Aduan</h4>
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Isi Aduan</label>
                        <textarea name="isi" class="form-control" rows="5" required><?= $d['isi_aduan'] ?></textarea>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="index.php" class="btn btn-secondary">Batal</a>
                        <button type="submit" name="update" class="btn btn-warning fw-bold">Update Aduan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>