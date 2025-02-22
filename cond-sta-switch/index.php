<?php

$number = "4";

switch ($number) {
    case 1:
        $day = "monday";
        break;
    case 2:
        $day = "tuesday";
        break;
    case 3:
        $day = "wednesday";
        break;
    case 4:
        $day = "thursday";
        break;
    case 5:
        $day = "friday";
        break;
    case 6:
        $day = "saturday";
        break;
    case 7:
        $day = "sunday";
        break;
    default:
        $day = "invalid number";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p> The number is <?= $number ?> so the corresponding day is <?= $day  ?>.</p>
</body>
</html>