<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" placeholder="username" name="username"><br>
        <input type="password" placeholder="password" name="password"><br>
        <input type="submit" value="Login">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "Username: <b>$_POST[username]</b><br>";
        echo "Password: <b>$_POST[password]</b><br>";
    }
    ?>
</body>

</html>