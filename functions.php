<?php
function myCalculator($num01, $operation, $num02) {
    #declared sum globally, so "sum" didn't have to be declared in every switch statement
    $sum;
    switch ($operation) {
        case "add":
            $sum = $num01 + $num02;
            break;
        
        case "sub";
            $sum = $num01 - $num02;
            break;

        default:
            $sum = "There was an error!";
            break;
    }
    return $sum;
}

$num01 = $_GET["num01"];
$operation = $_GET["operation"];
$num02 = $_GET["num02"];

echo "Value: " . myCalculator($num01, $operation, $num02);