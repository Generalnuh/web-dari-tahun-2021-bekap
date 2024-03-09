<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan-array-assosiative</title>
    <style>
    tr td img {
        width: 100px;
        height: 100px;
    }
    </style>
</head>

<body>
    <h1>latihan-array-assosiative</h1>

    <?php
    $daftar_anime = [
        [
            "judul" => "Attack On Titan",
            "season" => "1",
            "episode" => "24 Episode",
            "sub" => "Sub Indo & English",
            "poster" => "1.png"
        ],
        [
            "judul" => "One Punch Man",
            "season" => "1",
            "episode" => "24 Episode",
            "sub" => "Sub Indo & English",
            "poster" => "2.png"
        ],
        [
            "judul" => "Spy X Family",
            "season" => "1",
            "episode" => "24 Episode",
            "sub" => "Sub Indo & English",
            "poster" => "3.png"
        ],
        [
            "judul" => "Berserk",
            "season" => "1",
            "episode" => "24 Episode",
            "sub" => "Sub Indo & English",
            "poster" => "4.png"
        ],
        [
            "judul" => "Jujutsu Kaisen",
            "season" => "1",
            "episode" => "24 Episode",
            "sub" => "Sub Indo & English",
            "poster" => "5.png"
        ],
        [
            "judul" => "Boruto",
            "season" => "1",
            "episode" => "160 Episode",
            "sub" => "Sub Indo & English",
            "poster" => "6.png"
        ],
        [
            "judul" => "Baki Hanma",
            "season" => "1",
            "episode" => "24 Episode",
            "sub" => "Sub Indo & English",
            "poster" => "7.png"
        ]
    ];
    ?>

    <table border="1" cellpadding="20" cellspacing="0" align="center">
        <tr>
            <th>Judul</th>
            <th>Season</th>
            <th>Episode</th>
            <th>Subtitle</th>
            <th>Poster</th>
        </tr>
        <?php foreach ($daftar_anime as $list_anime) : ?>
        <tr>
            <td><?= $list_anime["judul"] ?></td>
            <td><?= $list_anime["season"] ?></td>
            <td><?= $list_anime["episode"] ?></td>
            <td><?= $list_anime["sub"] ?></td>
            <td><img src="img/<?= $list_anime["poster"] ?>" alt=""></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>

</html>