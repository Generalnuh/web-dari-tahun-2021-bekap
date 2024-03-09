<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Scope / Lingkup Variable</title>
</head>

<body>
    <?php
    $x = 10;

    function menampilkanX()
    {
        global $x;
        return $x;
    };

    echo menampilkanX();
    ?>
</body>

</html>