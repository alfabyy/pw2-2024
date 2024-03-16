<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jk'];
$prodi = $_POST['program-studi'];
$keahlian = $_POST['keahlian'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];
?>

<h1>Terima kasih Sudah Mendaftar</h1>
<h5>NIM : <?= $nim; ?></h5>
<h5>Nama : <?= $nama; ?></h5>
<h5>Jenis Kelamin : <?= $jenis_kelamin; ?></h5>
<h5>Prodi : <?= $prodi; ?></h5>
<h5>Keahlian : <?= $keahlian; ?></h5>
<h5>Domisili : <?= $domisili; ?></h5>
<h5>Email : <?= $email; ?></h5>