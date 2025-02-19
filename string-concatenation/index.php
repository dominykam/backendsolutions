<?php
    //  first and last name variables
    $firstName = "Dominyka";
    $lastName = "Muraskaite";

    // link variables to create full name
    $fullName = $firstName . ' ' . $lastName;

    // Get the character count of full name
    $fullnameLength = strlen($fullName);

    echo "Full Name: " . $fullName . "<br>";
    echo "Length of Full Name: " . $fullnameLength;
?>
