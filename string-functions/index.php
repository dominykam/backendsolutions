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
        
        echo "Fruit: " . $fruit . "<br>"; //Print this variable>

        echo "Length of Fruit: " . $fruitLength . "<br>"; 

        $positionOfO = strpos($fruit, "o");//Determine the position of the first 'o' in the variable <code>$fruit</code>. Print this value.>

        echo "Position of the first 'o': " . $positionOfO;
        ?>

        <h2>Part 2</h2>

        <?php
        $fruit2 = "pineapple"; // Create a variable $fruit2 with the value "pineapple"
        $fruit2Needle = "a";
        $lastPosition = strrpos($fruit2, $fruit2Needle); // Determine the position of the last 'a' in the variable $fruit2
        $uppercaseFruit = strtoupper($fruit2); // Convert the value of $fruit2 to uppercase

        // Output results
        echo "Last position of 'a' in pineapple: " . $lastPosition . "<br>";
        echo "Uppercase Fruit: " . $uppercaseFruit . "<br>";
        ?>

        <p> The position of the last '<?= $n?>' is: <?= $lastPosition ?></p>


        <h2>Part 3</h2>

        <ul>
            <li>Create a variable <code>$letter</code> with <code>e</code> as the value.</li>
            <li>Create a variable <code>$number</code> with <code>3</code> as the value.</li>
            <li>Create a variable <code>$longestWord</code> with <code>pneumonoultramicroscopicsilicovolcanoconiosis</code> as the value.</li>
            <li>Now replace all the e's in the <code>$longestWord</code> variable with 3's.
                <p class="remark">You can only use the variable names. The values <code>e</code>, <code>3</code> and <code>pneumonoultramicroscopicsilicovolcanoconiosis</code> can only appear once in the PHP document.</p>
            </li>
        </ul>

    </body>
</html>