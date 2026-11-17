<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Select using checkboxes.</title>
</head>

<body>
    <form action="index.php" method="POST">
        <input type="checkbox" name="foods[]" value="Pizza">Pizza<br>
        <input type="checkbox" name="foods[]" value="Hamburger">Hamburger<br>
        <input type="checkbox" name="foods[]" value="Nachos">Nachos<br>
        <input type="checkbox" name="foods[]" value="Sandwich">Sandwich<br>
        <input type="checkbox" name="foods[]" value="Momos">Momos<br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["submit"])) {
            $foods = $_POST["foods"] ?? " ";

            if (isset($_POST["foods"])) {
                foreach ($foods as $food) {
                    echo "You like {$food} .<br>";

                }
            }
            if (empty($_POST["foods"])) {
                echo "You like nothing of the listed items.";
            }


        }
    }




    ?>

</body>

</html>