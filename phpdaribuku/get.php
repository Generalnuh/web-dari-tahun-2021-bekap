<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get</title>
</head>

<body>
    <h1>Cari kata sesuatu</h1>
    <form action="" method="get">
        <input type="text" name="kata">
        <input type="submit" name="cari"><br>
    </form>
    <?php
    if(isset($_GET['kata'])){
        echo "Anda sedang mencari kata, <b>$_GET[kata]</b>";
    }
    ?>
</body>

</html>