<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>utility</title>
    <style>
        .penjelasan {
            margin: 20px 25px 20px 25px;
            background-color: gray;
            color: white;
            font-family: cursive;
        }

        .penjelasan p {
            margin-top: -30px;
            font-size: 15px;
            padding: 30px;
        }
    </style>
</head>

<body>
    <div class="penjelasan">
        <h3>Sedikit Penjelasan Apa Itu utility</h3>
        <p>
            Dalam pemrograman, "utility" merujuk pada sekumpulan fungsi atau program kecil yang bertujuan menyediakan
            operasi bantu atau tugas-tugas umum. Utilitas digunakan untuk meningkatkan keterbacaan dan pemeliharaan kode
            dengan memisahkan fungsionalitas tertentu dari program utama. Dengan sifatnya yang dapat digunakan ulang,
            utilitas membantu menghindari duplikasi kode, meningkatkan efisiensi, dan menyederhanakan pengembangan
            perangkat lunak dengan menyediakan solusi untuk tugas-tugas umum seperti pengolahan string, manipulasi data,
            atau operasi-operasi file.
        </p>
    </div>

    <div class="contoh-sederhana">
        <h3>Contoh sederhana</h3>
        <h1>1. Menggunakan var_dump()</h1>
        <p>
            <?php
            $a = array(1, 2, array("a", "b", "c"));
            var_dump($a);
            ?>
        </p>
        <b>outputnya akan sama seperti ini jika, dituliskan dengan array:</b>
        <pre>
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  array(3) {
    [0]=>
    string(1) "a"
    [1]=>
    string(1) "b"
    [2]=>
    string(1) "c"
  }
}
        </pre>
    </div>

    <div class="isset">
        <h1>2. Menggunakan isset()</h1>
        <h3>Sedikit penjelasan tentang isset()</h3>
        <p>
            Untuk mengecek apakah variable sudah dibuat apa belum
        </p>
        <b>Contoh penggunaan</b>
        <p>
            <?php
            $nama = "John";

            // Memeriksa apakah variabel $nama telah diatur
            if (isset($nama)) {
                echo "Variabel \$nama diatur, nilainya adalah: " . $nama;
            } else {
                echo "Variabel \$nama tidak diatur.";
            }
            ?>
        </p>
        <b>Bentuk codingan</b>
        <pre>
    $nama = "John";

    // Memeriksa apakah variabel $nama telah diatur
    if (isset($nama)) {
        echo "Variabel \$nama diatur, nilainya adalah: " . $nama;
    } else {
        echo "Variabel \$nama tidak diatur.";
    }
        </pre>
    </div>

    <div class="empty">
        <h1>3. Menggunakan empty()</h1>
        <h3>Sedikit penjelasan</h3>
        <p>

            Dalam bahasa pemrograman PHP, empty adalah fungsi yang digunakan untuk memeriksa apakah suatu variabel
            kosong atau tidak diatur. Fungsi ini mengembalikan nilai boolean true jika variabel kosong, false jika
            variabel memiliki nilai atau telah diatur. empty berguna dalam pengujian keberadaan dan nilai variabel
            sebelum digunakan untuk menghindari kesalahan dan memastikan bahwa variabel memiliki nilai yang diharapkan.
            Berikut adalah contoh penggunaan empty:
        </p>
        <pre>
            contoh:
            $data = "Hello";
        
            // Memeriksa apakah variabel $data kosong
            if (empty($data)) {
            echo "Variabel \$data kosong atau tidak diatur.";
            } else {
            echo "Variabel \$data diatur, nilainya adalah: " . $data;
            }
        </pre>
        <p>
            output:
            <?php
            $data = "Hello";

            // Memeriksa apakah variabel $data kosong
            if (empty($data)) {
                echo "Variabel \$data kosong atau tidak diatur.";
            } else {
                echo "Variabel \$data diatur, nilainya adalah: " . $data;
            }
            ?>

        </p>
    </div>

    <div class="empty">
        <h1>4. Menggunakan die()</h1>
        <h3>Sedikit Penjelasan</h3>
        <p>
            Fungsi die() dalam PHP digunakan untuk mengakhiri eksekusi skrip dan menampilkan pesan kesalahan atau pesan
            yang ditentukan. Fungsi ini sering digunakan untuk menangani kesalahan atau kondisi yang memerlukan
            penghentian eksekusi skrip.
        </p>
        <p>
            Contoh:
            <?php
            $nilai = 10;

            // Memeriksa nilai variabel, dan menghentikan eksekusi jika nilainya kurang dari 20
            if ($nilai < 20) {
                die("Error: Nilai harus minimal 20.");
            }

            // Eksekusi ini hanya terjadi jika nilai lebih besar atau sama dengan 20
            echo "Nilai memenuhi syarat: " . $nilai;
            ?>

        </p>
        <pre>
            bentuk sintaks
            $nilai = 10;

            // Memeriksa nilai variabel, dan menghentikan eksekusi jika nilainya kurang dari 20
            if ($nilai < 20) {
                die("Error: Nilai harus minimal 20.");
            }

            // Eksekusi ini hanya terjadi jika nilai lebih besar atau sama dengan 20
            echo "Nilai memenuhi syarat: " . $nilai;
        </pre>
    </div>
    <div class="sleep">
        <h1>5. Menggunakan sleep()</h1>
        <h3>Sedikit Penjelasan</h3>
        <p>

            Fungsi sleep() dalam PHP digunakan untuk memperlambat eksekusi skrip untuk jumlah detik tertentu. Fungsi ini
            berguna dalam situasi di mana Anda ingin memberi jeda waktu sebelum melanjutkan eksekusi skrip, misalnya,
            untuk simulasi, penundaan, atau pengaturan interval tertentu.
        </p>
        <p>
            <b>Contoh</b>
        <pre>
                <?php
                echo "Mulai eksekusi skrip.\n";

                // Menunda eksekusi skrip selama 5 detik
                sleep(5);

                echo "Skrip dilanjutkan setelah jeda waktu.\n";
                ?>

            </pre>
        </p>
    </div>
</body>

</html>