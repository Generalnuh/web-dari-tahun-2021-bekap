<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function bawaan php</title>
</head>

<body>
    <h1>Output</h1>
    <?php
    $nama = "muhammad nuh";
    echo strtolower("Menggunakan strtolower(): ". $nama) . "<br>"; // Output akan membuat string menjadi huruf kecil
    echo strtoupper("Menggunakan strtoupper(): " . $nama) . "<br>";
    echo ucwords("Menggunakan ucwords(): " . $nama) . "<br>";

    $pw = substr("Generalnuh", -5);
    echo "password mu adalah: " . $pw . "<br>";

    $angka1 = 110.24007;
    $angka_bagus = number_format($angka1, 2);
    echo $angka_bagus
    ?>
</body>

</html>