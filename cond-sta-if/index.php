<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
 $number = 6; // Create a variable $number with a value between 1 and 7

echo ($number == 1) ? "monday" :
    (($number == 2) ? "tuesday" :
    (($number == 3) ? "wednesday" :
    (($number == 4) ? "thursday" :
    (($number == 5) ? "friday" :
    (($number == 6) ? "saturday" :
    (($number == 7) ? "sunday" : "Invalid number" ))))));

?>


</body>
</html>