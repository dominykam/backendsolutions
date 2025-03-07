<?php
//Sum
function calculateSum ($number1, $number2) 
{ $sum = $number1 + $number2;

return $sum;
}

$number1= 2;
$number2 = 4;

$result = calculateSum ($number1, $number2);

//Multiplication
function multiply ($number1, $number2)
{ $multiplyNum = $number1 * $number2;

    return $multiplyNum;

}

$result2 = multiply ($number1, $number2);


//To check if number is even
function isEven($number)
{ 
    return $number % 2 === 0;
}

$isEvenResult1 = isEven($number1);
$isEvenResult2 = isEven($number2);

//Function to return length and uppercase version of a string
function getStringDetails($string)
{ 
    $length = strlen($string);
    $uppercase = strtoupper($string);
    
    return [$length, $uppercase];
}

$string = "Hey everyone";
$stringDetails = getStringDetails($string);
$length = $stringDetails[0];
$uppercaseString = $stringDetails[1];
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
        
        <h1>Functions: basic</h1>
        
        <h2>Part 1</h2>
       

        <h2>The sum of <?= $number1?> and <?= $number2?> is:  <?= $result?></h2>

        <h2>The multiplication of <?= $number1?> and <?= $number2?> is:  <?= $result2?></h2>

        <h2>Even Number Check</h2>
        <p>Is <?= $number1 ?> even? <?= $isEvenResult1 ? 'Yes' : 'No' ?></p>
        <p>Is <?= $number2 ?> even? <?= $isEvenResult2 ? 'Yes' : 'No' ?></p>

        <h2>String Details</h2>
        <p>Original string: "<?= $string ?>"</p>
        <p>Length of string: <?= $length ?></p>
        <p>Uppercase version: "<?= $uppercaseString ?>"</p>

</body>
</html>