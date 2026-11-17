<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Field Checker.</title>
</head>

<body>

    <form action="index.php" method="POST">
        <label for="username"> Username : </label>
        <input type="text" name="username" placeholder="Enter the username here.">
        <label for="password"> Password : </label>
        <input type="password" name="password" placeholder="Enter the password here.">
        <input type="submit" name="login" value="Login.">
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST["login"])) {
            if (empty($_POST["username"])) {
                echo "Enter the username.";
            } elseif (empty($_POST["password"])) {
                echo "Enter the password.";
            } else {
                echo "Hello {$_POST["username"]}";
            }
        }

    }

    ?>

</body>

</html>