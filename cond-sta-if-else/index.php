<?php

$year = "2023";

if ($year % 400 == 0 ) {
    $result = "$year is a leap year";
} elseif ($year % 100 == 0) {
    $result = "$year is not a leap year";
} elseif ($year % 4 == 0) {
    $result = "$year is a leap year";
} else {
    $result = "$year is not a leap year";
}

?>



<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/global.css">
        <link rel="stylesheet" type="text/css" href="/css/directory.css">
        <link rel="stylesheet" type="text/css" href="/css/facade.css">
    </head>
    <body>

        <h1>Conditional statements: if else</h1>

        <h2>Part 1</h2>

    <p> <?= $result ?> </p>




<?php
$totalSeconds = '221108521';

$years = 365 * 24 * 60 * 60;
$months = 31 * 24 * 60 * 60;
$weeks = 7 * 24 * 60 * 60;
$days = 24 * 24 * 60 * 60;
$hours = 60 * 60;
$minutes = 60;

//calculates the number in different units
$years = floor($totalSeconds / 31536000);
$months = floor($totalSeconds / 2678400);
$weeks = floor($totalSeconds / 604800);
$days = floor($totalSeconds / 86400);
$hours = floor($totalSeconds / 3600);
$minutes = floor($totalSeconds / 60); 




?>
        <h1 class="extra">Part 2</h1>


        <p> In <?= $totalSeconds ?> seconds:</p>
        <ul>
            <ul>
                <li>minutes: <?= $minutes ?> </li>
                <li>hours: <?= $hours ?></li>
                <li>days: <?= $days ?></li>
                <li>weeks: <?= $weeks ?></li>
                <li>months (31): <?= $months ?></li>
                <li>years (365): <?= $years ?></li>
            </ul>
                </div>

            </li>
        </ul>

    </body>
</html>