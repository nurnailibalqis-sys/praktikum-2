<!DOCTYPE html>
<html>
<head>
    <title>Hasil Registrasi</title>
</head>
<body>
<h1>Hasil Registrasi Mahasiswa Baru</h1>
<hr>
<?php
$nama   = $_POST["nama"];
$nim    = $_POST["nim"];
$prodi  = $_POST["prodi"];
$email  = $_POST["email"];
$alamat = $_POST["alamat"];
?>
<p><b>Nama Lengkap :</b> <?= $nama ?></p>
<p><b>NIM :</b> <?= $nim ?></p>
<p><b>Program Studi :</b> <?= $prodi ?></p>
<p><b>Email :</b> <?= $email ?></p>
<p><b>Alamat :</b> <?= $alamat ?></p>
</body>
</html>
