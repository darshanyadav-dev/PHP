<?php
$capitals = array("USA" => "Washington D.C.", "India" => "New Delhi", "Pakistan" => "Islamabad", "China" => "Beijing", "Russia" => "Moscow");

$capitals["United Kingdom"] = "London";

$keys = array_keys($capitals);
foreach ($keys as $key) {
    echo "{$key}" . "<br>";
}

?>
