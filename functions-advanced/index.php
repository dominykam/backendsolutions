<?php

$md5HashKey = 'd1fa402db91a7a93c4f414b8278ce073';

//1 way - Access variable directly
function countPercentage($character)
{
    global $md5HashKey; 
    $count = substr_count($md5HashKey, $character);
    $length = strlen($md5HashKey);
    
    return ($count / $length) * 100;
}

//2 way- $md5HashKey as parameter
function countPercentageParam($character, $hashKey)
{
    $count = substr_count($hashKey, $character);
    $length = strlen($hashKey);
    
    return ($count / $length) * 100;
}

//functions
$result1 = countPercentage('2');
$result2 = countPercentageParam('8', $md5HashKey);
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
        
        <h1>Functions: advanced</h1>
        
        <h2>Part 1</h2>

        <h2>Percentage Calculation</h2>

        <h2>Function 1: The needle '2' occurs <?= $result1[0] ?> times in the hash key '<?= $md5HashKey ?>'</h2>
        <h2>Function 2: The needle '8' occurs <?= $result2[0] ?> times in the hash key '<?= $md5HashKey ?>'</h2>


        
    </body>
</html>