<?php

$data1 = ["id" => 1, "nim" => "01101", "nama" => "Stephen", "ijazah" => "ada", "skl" => "ada"];
$data2 = ["id" => 2, "nim" => "01102", "nama" => "James", "ijazah" => "-", "skl" => "ada"];
$data3 = ["id" => 3, "nim" => "01103", "nama" => "Bryant", "ijazah" => "-", "skl" => "ada"];
$data4 = ["id" => 4, "nim" => "01104", "nama" => "Kevin", "ijazah" => "ada", "skl" => "-"];


$kumpulan_data = [$data1, $data2, $data3, $data4];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Nilai Siswa</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Daftar Kelengkapan Dokumen</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Ijazah</th>
                    <th scope="col">SKL</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($kumpulan_data as $data): ?>

                    <tr>
                        <td><?= $data["id"]?></td>
                        <td><?= $data["nim"]?></td>
                        <td><?= $data["nama"]?></td>
                        <td><?= $data["ijazah"]?></td>
                        <td><?= $data["skl"]?></td>
                        
                    </tr>
                
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>

