<?php

$text = file_get_contents('text-file.txt');

$textCharacters = str_split($text); //splits text into characters

rsort($textCharacters); //sorts array from Z TO A

$textCharacters = array_reverse($textCharacters); //reverse the order

$characterCount = []; //starts empty array to count characters

foreach ($textCharacters as $characters) {
    if (isset($characterCount[$characters])) {
        $characterCount[$characters]++; //if character exists, count
    } else {
        $characterCount[$characters] = 1; //if not, initialize count as 1
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character Count</title>
</head>
<body>

    <h2>Total different characters: <?php echo count($characterCount); ?></h2>

    <ul>
        <?php
        // shows frequency of characters
        foreach ($characterCount as $character => $count) {
            echo "<li>Character '$character' appears $count times.</li>";
        }
        ?>
    </ul>
</body>
</html>
