<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functionstring</title>
    <style>
    p {
        color: orange;
        font-size: larger;
        font-family: cursive;
    }
    </style>
</head>

<body>
    <h2>Function yang ada hubungannya dengan string</h2>
    <div class="strlen">
        <h3>Function strlen()</h3>
        <p>
            <?php
            // strlen
            $nama = 'Muhammad Nuh';
            echo "Panjang nama saya = " . strlen($nama) . " huruf";
            ?>
        </p>
    </div>
    <div class="strcmp">
        <h3>Function strcmp()</h3>
        <p>
            <?php
            $var1 = "Hello";
            $var2 = "hello";
            if (strcmp($var1, $var2) !== 0) {
                echo '$var1 tidak sama dengan $var2 dalam perbandingan string peka huruf besar/kecil';
            }
            ?>
        </p>
    </div>
    <div class="explode">
        <h3>Function explode()</h3>
        <p>
            <?php
            // Example 1
            $pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
            $pieces = explode(" ", $pizza);
            echo $pieces[0]; // piece1
            echo $pieces[1]; // piece2

            // Example 2
            $data = "foo:*:1023:1000::/home/foo:/bin/sh";
            list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
            echo $user; // foo
            echo $pass; // *

            ?>
        </p>
    </div>
    <div class="htmlspecialchars">
        <h3>htmlspecialchars</h3>
        <p>
            <?php
            $new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
            echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
            ?>
        </p>
    </div>
</body>

</html>