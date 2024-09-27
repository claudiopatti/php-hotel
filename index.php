<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => 'si',
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => 'si',
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => 'no',
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => 'no',
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => 'si',
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Hotel</title>
    </head>
    <body>
        <div>
            <?php foreach($hotels as $hotel) {

            ?>

            <div>
                <ul>
                    <p>
                        Nome Hotel: <?php echo $hotel['name'] ?>
                    </p>
                    <li>
                        Descrizone Hotel: <?php echo $hotel['description'] ?>
                    </li>
                    <li>
                        Parcheggio Hotel: <?php echo $hotel['parking'] ?>
                    </li>
                    <li>
                        Voto Hotel: <?php echo $hotel['vote'] ?>
                    </li>
                    <li>
                        Distanza Hotel dal centro: <?php echo $hotel['distance_to_center'] ?>
                    </li>
                </ul>
                

            </div>

            <?php 
            }
            ?>
        </div>
    </body>
</html>