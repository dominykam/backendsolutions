<?php

//strtotime turns this date string to Unix timestamp
$timestamp = strtotime("10:35:25 pm 21 January 1904");

//turn timestamp to a readable format
$readableDate = date("d F Y, h:i:s A", $timestamp);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Time Functions</title>
</head>
<body>

    <h1>Time: Functions</h1>

    <h2>Part 1</h2>
    <p>Original Date: 10:35:25 pm 21 January 1904</p>
    <p>Converted to Timestamp: <?= $timestamp ?></p>
    <p>Formatted Date: <?= $readableDate ?></p>


</body>
</html>
