<?php
$mahasiswa = [
    [
        "nama" => "Muhammad Nuh",
        "nim" => "220504027",
        "prodi" => "Teknik Informatika",
        "email" => "muhammadnuh624@gmail.com",
        "gambar" => "1.png"
    ],
    [
        "nama" => "General zoe",
        "nim" => "220504013",
        "prodi" => "Teknik Informatika",
        "email" => "zoe624@gmail.com",
        "gambar" => "2.png"
    ],
    [
        "nama" => "Bedoel Sijabar",
        "nim" => "220504031",
        "prodi" => "Teknik Informatika",
        "email" => "sibedoel@gmail.com",
        "gambar" => "3.png"
    ],
    [
        "nama" => "yakub di sayuri",
        "nim" => "2205040o2",
        "prodi" => "Teknik Informatika",
        "email" => "yahudiacumalaka@gmail.com",
        "gambar" => "4.png"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
    <style>
    ul li img {
        width: 250px;
        height: 200px;
    }
    </style>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li><?= $mhs["nama"] ?></li>
        <li><img src="../../img/<?= $mhs["gambar"] ?>" alt=""></li>
    </ul>
    <?php endforeach ?>
</body>

</html>