<?php
include 'koneksi.php';
$id = $_POST['id'];
$nidn = $_POST['nidn'];
$nama_dosen = $_POST['nama_dosen'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "UPDATE dosen SET nidn='$nidn', nama_dosen='$nama_dosen', alamat='$alamat' WHERE id='$id'");
header("Location: index.php");
?>
