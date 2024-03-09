<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
    ul li img {
        width: 100px;
        height: 100px;
    }
    </style>
</head>

<body>
    <h1>Latihan Array Numerik</h1>
    <?php

    $mahasiswa = [
        [
            "Muhammad Nuh", "220504027", "muhammadnuh624@gmail.com", "teknik Informatika", "1.png"
        ],
        [
            "General Noeh", "220504026", "gennnuh624@gmail.com", "teknik Informatika", "2.png"
        ],
        [
            "Pejuang Duit", "220504024", "pejuangduit624@gmail.com", "teknik Informatika", "3.png"
        ],
        [
            "Jendral genta", "220504025", "genta624@gmail.com", "teknik Informatika", "4.png"
        ],
        [
            "xoe xerona", "220504021", "xerona@gmail.com", "teknik Informatika", "5.png"
        ],
        [
            "kembar 4", "220504004", "sikembar@gmail.com", "teknik Informatika", "6.png"
        ]
    ];

    ?>

    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama: <?= $mhs[0] ?></li>
        <li>NIM: <?= $mhs[1] ?></li>
        <li>Email: <?= $mhs[2] ?></li>
        <li>Prodi: <?= $mhs[3] ?></li>
        <li>Gambar: <img src="img/<?= $mhs[4] ?>" alt=""></li>
    </ul>
    <?php endforeach ?>
</body>

</html>