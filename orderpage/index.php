<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Code</title>
</head>

<body>
    <form action="index.php" method="post">
        <label> Item : </label>
        <input type="text" name="item" placeholder="Name the item you want to order"><br><br>
        <label>Quantity</label>
        <input type="number" name="quantity" placeholder="Enter the quantity of the item."><br><br>
        <input type="submit" value="Total">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $total = null;
        $price = 10;
        $item = htmlspecialchars($_POST['item'] ?? "");
        $quantity = (int) 
            $_POST['quantity'] ?? 0;
        $total = $price * $quantity;
        echo "You ordered {$quantity} x {$item} & your total is {$total} .";
    }
    ?>
</body>

</html>