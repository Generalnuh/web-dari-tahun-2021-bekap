<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        .penjelasan {
            background-color: #ffff00;
            padding: 10px 20px 10px 20px;
            width: 300px;
            float: left;
            margin-right: 40px;
        }

        .pembuatan-array {
            float: left;
            background-color: pink;
            padding: 20px;

        }
    </style>
</head>

<body>
    <div class="penjelasan">
        <h3>Sedikit Penjelaskan tentang array</h3>
        <p>
            Dalam pemrograman, "array" adalah struktur data yang digunakan untuk menyimpan kumpulan elemen data yang
            memiliki tipe serupa atau berbeda. Setiap elemen dalam array dapat diakses dengan menggunakan indeks atau
            kunci
            tertentu. Array memungkinkan penyimpanan dan pengelolaan data secara terstruktur.
        </p>
    </div>
    <b style="float: left; margin-right: 10px;">output: </b>
    <div class="pembuatan-array">
        <h3>Cara lama:</h3>
        <p>
            Bentuk penulisan
        <pre>
$array = array("Senin", "Selasa", "rabu")    
            </pre>
        </p>
        <h3>Cara baru:</h3>
        <p>
            Bentuk penulisan
        <pre>
$bulan = ["januari", "february", "maret"]
            </pre>
        </p>
        <p>
            <b>array pada php dapat diisi bebas tipe datanya</b>
        <pre>
$array = [false, "ini string", 123]
            </pre>
        </p>
        <h3>Cara menampilkan array</h3>
        <p>Bisa menggunakan var_dump()</p>
        <pre>
Contoh:
$namaTeam = ["jarot", "benjamin", "kifli"]
var_dump($namaTeam)            
        </pre>
        <p style="background-color: black; color: white;">
            output:
            <?php
            $namaTeam = ["jarot", "benjamin", "kifli"];
            var_dump($namaTeam)
            ?>
        </p>
        <p>Menggunakan echo</p>
        <pre>
$namaGrup = ["bedol", "yahud", "kokon"];
echo $namaGrup[0];            
        </pre>
        <p style="background-color: black; color: white;">
            output:
            <?php
            $namaGrup = ["bedol", "yahud", "kokon"];
            echo $namaGrup[0];
            ?>
        </p>
    </div>
</body>

</html>