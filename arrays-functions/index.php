<?php
$animals = array("Dog", "Cat", "Pig", "Cow", "Horse", "Snake");

var_dump($animals);


$numAnimals = count($animals); //counts animals

$teZoekenDier = "Cat"; 

// this is to check if the animal exists in the array
if (in_array($teZoekenDier, $animals)) {
    $message = "The animal '$teZoekenDier' is found";
} else {
    $message = "The animal '$teZoekenDier' is not found";
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
    <p> There are <?= $numAnimals?> animals in here. </p>

    <p> <?= $message ?> </p>  <!-- Print the message -->
</body>
</html>