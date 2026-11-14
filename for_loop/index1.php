<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index1.php" method="post">
        <label>Enter number to count from.</label>
        <input type="number" name="counter"><br><br>
        <input type="submit" value="count."><br><br>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $counter = $_POST["counter"] ?? 0;
        for ($i = $counter; $i >0; $i--) {
            echo $i . "\n";
        }
    }
    ?>
</body>

</html>