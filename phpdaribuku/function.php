<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>materi function</title>
</head>

<body>
    <?php
    function jumlah(){
        $jumlah_argumen = func_num_args();
        $nilai = 0;

        for($angka = 0; $angka < $jumlah_argumen; $angka++){
            $nilai += func_get_arg($angka);
        }
        return $nilai;
    }

    echo "Jumlah dai (2,4,5) adalah: ", jumlah(2,4,5);
    echo "<br>";
    echo "jumlah dari (2,0,9,5) adalah: ", jumlah(2, 0, 9, 5);
    ?>
</body>

</html>