<?php
include "config/koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$isi = $_POST['isi_aduan'];

mysqli_query($conn, "INSERT INTO aduan (nama,email,isi_aduan)
VALUES ('$nama','$email','$isi')");

header("Location: index.php");
