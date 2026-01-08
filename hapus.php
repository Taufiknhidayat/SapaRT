<?php
session_start();
// Cek apakah user sudah login sebagai admin
if (!isset($_SESSION['admin'])) {
    header("Location: auth/login.php");
    exit;
}

include "config/koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM aduan WHERE id=$id");
}

header("Location: admin/data_aduan.php");
?>