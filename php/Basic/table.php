<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabel menggunakan PHP</title>
</head>

<body>
    <table border="1" cellpadding="30" cellspacing="0" align="center" style="margin-top: 50px;">
        <?php $i = 0; while($i <= 5) : $i++ ?>
        <?php if($i % 2 == 0) : ?>
        <tr style="background-color: cyan;">
            <?php else : ?>
            <?php endif ?>
            <?php for($j = 0; $j <= 10; $j++) : ?>
            <td><?= "$i,$j" ?></td>
            <?php endfor ?>
        </tr>
        <?php endwhile ?>
    </table>
</body>

</html>