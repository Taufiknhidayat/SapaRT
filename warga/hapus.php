<?php
session_start();
include "../config/koneksi.php";
$id = $_GET['id'];
// Pastikan yang dihapus adalah milik user yang login (Security)
$id_warga = $_SESSION['warga']['id'];

mysqli_query($conn, "DELETE FROM aduan WHERE id=$id AND id_warga=$id_warga");
header("Location: index.php");
?>