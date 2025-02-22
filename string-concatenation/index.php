<?php
    //  first and last name variables
    $firstName = "Dominyka";
    $lastName = "Muraskaite";

    // link variables to create full name
    $fullName = $firstName . ' ' . $lastName;

    // Get the character count of full name
    $fullNameLength = strlen($fullName);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?= $fullName ?></p>
    <p><?= $firstName ?> <?= $lastName ?></p>
    <p>The name "<?= $fullName ?>" contains <?= $fullNameLength ?> characters</p>

</body>
</html>