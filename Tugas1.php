<?php

$nama = "Muhammad Khaliq Teuku Ansari";
$universitas = "Universitas Lambung Mangkurat";
$jurusan = "Teknologi Informasi";
$nim = "2110817310008";
$hobi = "Bermain Voli";
$kelas = "Full StackWeb Developer";
$mitra = "GITS.id"

    ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertemuan 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        .justify {
            text-align: justify;
        }
    </style>
</head>

<body class="bg-dark">
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card bg-dark-subtle" style="width: 30rem;">
            <img src="asset/IMG_0052.JPG" class="card-img-top">
            <div class="card-body">
                <p class="card-text justify">
                    <?php
                    echo "Perkenalkan Nama Saya $nama, saya sedang berkuliah di $universitas jurusan $jurusan. Hobi saya adalah $hobi. Saya adalah mahasiswa yang mengikuti kelas $kelas di mitra $mitra<br>";
                    for ($i = 0; $i < 69; $i++) {
                        echo "-";
                    }
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>