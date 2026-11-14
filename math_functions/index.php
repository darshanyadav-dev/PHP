<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circumferemce_Area_Volume_Calculator.</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>Radius : </label>
        <input type="number" name="radius" placeholder="Enter the radius of the circle or sphere."><br><br>
        <label>operation : </label>
        <select name="select">
            <option value="circumference"> Circumference of Circle.</option>
            <option value="area"> Area of Circle.</option>
            <option value="volume"> Volume of Sphere.</option>
        </select><br><br>
        <input type="submit" value="Calculate" step="any"><br><br>
</form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $radius = (float) 
                   ( $_POST["radius"] ?? 0);
                $operation = $_POST["select"] ?? "";

                switch ($operation):
                    case "circumference":
                        $circumference = 2 * pi() * $radius;
                        $circumference=round($circumference, 2);
                        echo "Circumference of circle is {$circumference}";
                        break;

                    case "area":
                        $area = pi() * pow($radius, 2);
                        $area=round($area, 2);
                        echo "Area of circle is {$area}";
                        break;

                    case "volume":
                        $volume = (4 / 3) * pi() * pow($radius, 3);
                        $volume=round($volume, 2);
                        echo "Volume of Sphere is {$volume}";
                        break;

                    default:
                        echo "Select valid operaton.";

                endswitch;

            }
            ?>
</body>

</html>