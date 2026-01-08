<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../auth/login.php");
    exit;
}

include "../config/koneksi.php";

$id = $_GET['id'];
$status = $_GET['status'];

mysqli_query($conn, "UPDATE aduan SET status='$status' WHERE id=$id");
header("Location: data_aduan.php");
?>