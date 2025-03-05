<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/global.css">
        <link rel="stylesheet" type="text/css" href="/css/directory.css">
        <link rel="stylesheet" type="text/css" href="/css/facade.css">
    </head>
    <body >

        <h1>Arrays: creation</h1>

            <ul>
                <li>Create an array in which you store 10 animals (do this in 2 different ways)</li>

                <?php
                //first method
                $animalsNumerical 		= 	array( 'Dog', 'Cat', 'Cow', 'Horse', 'Lion', 'Eagle', 'Owl', 'Parrot', 'Penguin', 'Hawk');
                
                //second method
                $animals[] = 'Dog';
                $animals[] = 'Cat';
                $animals[] = 'Cow';
                $animals[] = 'Horse';
                $animals[] = 'Lion';
                $animals[] = 'Eagle';
                $animals[] = 'Owl';
                $animals[] = 'Parrot';
                $animals[] = 'Penguin';
                $animals[] = 'Hawk';

                var_dump($animals);
                ?>


                <li>Create a new array containing 5 vehicles, making sure you can determine which category of vehicle it is (2-dimensional array), such as 'land vehicles', 'water vehicles', 'air vehicles'.

                <?php
                $vehicles = array(
                    'landVehicles' => array('Vespa', 'Bicycle'),
                    'waterVehicles' => array('Surdboard', 'Raft', 'Schooner', 'Three-master'),
                    'airVehicles' => array('Hot air ballon', 'Helicopter', 'B52')
            
                );
                
                var_dump($vehicles);
                ?>


            

    </body>
</html>