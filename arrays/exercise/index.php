<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capital Finder.</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label>Whose capital you want to know : </label>
        <input type="text" name="count_name" placeholder="Enter the name of the country.">
        <input type="submit" value="Find Capital">
    </form>


    <?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $capitals = array("USA" => "Washington D.C.", "India" => "New Delhi", "Pakistan" => "Islamabad", "China" => "Beijing", "Russia" => "Moscow");

    $capital = $capitals[$_POST["count_name"]]; 
    echo "Capital is {$capital} ";
    }
    ?>

</body>
</html>