<?php
function salam($waktu = "Datang", $nama = "Admin")
{
    return "Selamat $waktu $nama :)";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>

<body>
    <h2>Materi function</h2>
    <h1><?= salam('pagi', 'Muhammad Nuh') ?></h1>
    <?php
    echo date('D m y') . "<br>";
    echo date('l') . "<br>";
    echo date('l jS \of F Y h:i:s A') . "<br>";
    echo "February 06, 2004 is on a " . date("l", mktime(0, 0, 0, 2, 6, 2004)) . "<br>";
    echo date(DATE_RFC2822) . "<br>";
    echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000)) . "<br>";
    print_r(gettimeofday());

    echo gettimeofday(true);

    // sisanya kapan kapan aja semuanya ada di php.net

    ?>
</body>

</html>