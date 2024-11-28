<?php
include 'koneksi.php';
$nidn =$_POST['nidn'];
$nama_dosen =$_POST['nama_dosen'];
$alamat =$_POST['alamat'];
mysqli_query($koneksi, "insert into dosen values('', '$nidn', '$nama_dosen', '$alamat' )");
header("location:index.php");
?>