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
        
        <h1>String functions</h1>

        <h2>Part 1</h2>

        <?php
        $fruit = "coconut";
        $fruitLength = strlen($fruit); //Count how many characters the variable fruit has, using a PHP string function> 
        $positionOfO = strpos($fruit, "o");//Determine the position of the first 'o' in the variable <code>$fruit</code>. Print this value.>
        ?>

        <p>Fruit: <?= $fruit ?></p>
        <p> Length of Fruit: <?= $fruitLength ?></p>
        <p>Position of the first 'o': <?= $positionOfO ?></p>
        

        <h2>Part 2</h2>

        <?php
        $fruit2 = "pineapple"; // Create a variable $fruit2 with the value "pineapple"
        $fruit2Needle = "a";
        $lastPosition = strrpos($fruit2, $fruit2Needle); // Determine the position of the last 'a' in the variable $fruit2
        $uppercaseFruit = strtoupper($fruit2); // Convert the value of $fruit2 to uppercase
        ?>

        <p> The position of the last '<?= $fruit2Needle ?>' is: <?= $lastPosition ?></p>
        <p> Uppercase Fruit: <?= $uppercaseFruit ?></p>


        <h2>Part 3</h2>

        <?php
        $letter = "e"; //Create a variable $letter with e as the value.
        $number = "3";
        $longestWord = "pneumonoultramicroscopicsilicovolcanoconiosis";

        $changedWord = str_replace($letter, $number, $longestWord); //replace all the e's in the $longestWord variable with 3's.
        ?>

        <p>Changed word: <?= $changedWord ?></p>

    </body>
</html>