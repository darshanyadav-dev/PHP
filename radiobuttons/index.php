<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with Radio Buttons in PHP</title>
</head>

<body>
    <form action="index.php" method="POST">
        <h3> Select a card to pay.</h3>
        <input type="radio" name="card" value="visa">Visa<br>
        <input type="radio" name="card" value="mastercard">Mastercard<br>
        <input type="radio" name="card" value="amex">American Express<br>
        <input type="submit" name="confirm" value="Confirm Selection">
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $card = null;

        if (isset($_POST["confirm"])) {
            $card = $_POST["card"] ?? 0;

            switch ($card):
                case "visa":
                    echo "You selected {$card} card as your payment option.";
                    break;
                case "mastercard":
                    echo "You selected {$card} card as your payment option.";
                    break;
                case "amex":
                    echo "You selected {$card} card as your payment option.";
                    break;
                default : echo "Please select atleast one payment option.";

            endswitch;

        } 
    }

    ?>
</body>

</html>