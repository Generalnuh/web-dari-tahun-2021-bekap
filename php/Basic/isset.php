<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function isset</title>
</head>

<body>
    <h2>Isset</h2>
    <?php

    $var = '';

    // This will evaluate to TRUE so the text will be printed.
    if (isset($var)) {
        echo "This var is set so I will print.";
    }

    // In the next examples we'll use var_dump to output
    // the return value of isset().

    $a = "test";
    $b = "anothertest";

    var_dump(isset($a));      // TRUE
    var_dump(isset($a, $b)); // TRUE

    unset($a);

    var_dump(isset($a));     // FALSE
    var_dump(isset($a, $b)); // FALSE

    $foo = NULL;
    var_dump(isset($foo));   // FALSE

    $expected_array_got_string = 'somestring';
    var_dump(isset($expected_array_got_string['some_key']));
    var_dump(isset($expected_array_got_string[0]));
    var_dump(isset($expected_array_got_string['0']));
    var_dump(isset($expected_array_got_string[0.5]));
    var_dump(isset($expected_array_got_string['0.5']));
    var_dump(isset($expected_array_got_string['0 Mostel']));
    ?>
</body>

</html>