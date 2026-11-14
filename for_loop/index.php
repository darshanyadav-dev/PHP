<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forward Number Counter.</title>
</head>

<body>
    <form action="index.php" method="Post">
        <label>Enter a number to count up to.</label>
        <input type="number" name="counter"><br><br>
        <input type="submit" value="Submit"><br><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $counter = $_POST["counter"] ?? 0;
        for ($i=0; $i <= $counter; $i++) {
            echo $i . "\n";
        }
    }
    ?>
</body>

</html>