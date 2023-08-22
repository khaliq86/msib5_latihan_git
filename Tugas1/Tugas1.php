<?php

$nama = "Muhammad Khaliq Teuku Ansari";
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
        .besar:hover {
            width: 35rem;
            cursor: pointer;
        }
    </style>
</head>

<body class="bg-dark">
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card bg-dark-subtle" style="width: 30rem;">
            <img src="asset/IMG_0052.JPG" class="card-img-top">
            <div class="card-body">
                <p class="card-text">
                    <?php
                    echo "Perkenalkan Nama Saya $nama. Hobi saya adalah $hobi. Saya adalah mahasiswa yang mengikuti kelas $kelas di mitra $mitra.<br>";
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