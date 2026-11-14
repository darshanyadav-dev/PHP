<?php
$capitals = array("USA" => "Washington D.C.", "India" => "New Delhi", "Pakistan" => "Islamabad", "China" => "Beijing", "Russia" => "Moscow");

$capitals["United Kingdom"] = "London";

foreach ($capitals as $key => $value) {
    echo "{$value} is capital of {$key}. <br><br>";
}
?>