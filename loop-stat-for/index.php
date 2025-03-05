<?php 
    $numbers = ""; 
    for ($num = 0; $num <= 100; $num++) {
        $numbers .= $num;
        if ($num < 100) {
            $numbers .= ", ";
        }
    }

    // Find numbers divisible by 3 and greater than 40 but smaller than 80
    $divideByThree = ""; // stores numbers that meet the conditions
    for ($num = 41; $num < 80; $num++) {
        if ($num % 3 == 0) {
            $divideByThree .= $num;
            if ($num < 78) {
                $divideByThree .= ", ";
            }
        }
    }


    // Creating multiplication table
    $num = 1;
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/global.css">
        <link rel="stylesheet" type="text/css" href="/css/directory.css">
        <link rel="stylesheet" type="text/css" href="/css/facade.css">

        <style> 
        .green { background-color: green; }
        .white { background-color: white; }
        .gray { background-color: gray; }
        </style>
    </head>
    <body>
        <h1>Looping statements: for</h1>

        <h2>Part 1</h2>

        <h2>Numbers from 0 to 100:</h2>
        <p><?= $numbers ?></p>

        <h2>Numbers divisible by 3 and between 40 and 80:</h2>
        <p><?= $divideByThree ?></p>

        <h1>Part 2</h1>

        <h2>Create a table containing the multiplication tables from 1 to 10 next to each other.</h2>


        <table border="1"> <!-- creates border for table --> 
        <?php 
        for ($r = 1; $r <= 10; $r++) {
            echo "<tr>"; // starts new table row
            for ($c = 1; $c <= 10; $c++) {
                $bg = ($r * $c) % 2 == 0 ? "green" : "white"; // green if even, white if odd
                echo "<td class='$bg'>" . $r * $c . "</td>"; // display the multiplication result
            }
            echo "</tr>"; // close the row
        }
        ?>
        </table>

    </body>
</html>
