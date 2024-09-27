<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    // $withParking = 'si';

    

    // $withParking = isset($_GET['contratto']) ? $_GET['contratto'] : 'no';

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>PHP Hotel</title>
    </head>
    <body>
        <div>
        
            <div class="container" >
                <div>
                    <form method="GET">
                        <div>
                            <label for="withParking">With Parking</label>
                        </div>
                        <input type="checkbox" name="withParking" id="withParking" value="true">
                        <div>
                            <label class="mt-3" for="numberVote">Scegli il voto da 1 a 5</label>
                        </div>
                        <div>
                            <input type="number"  name="numberVote" id="numberVote" min="1" max="5">                         
                        </div>
                        <div>
                            <button class="my-3" type="submit">
                                Ricerca
                            </button>
                        </div>
                    </form>

                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome Hotel</th>
                        <th scope="col">Descrizone Hotel</th>
                        <th scope="col">Parcheggio Hotel</th>
                        <th scope="col">Voto Hotel</th>
                        <th scope="col">Distanza Hotel dal centro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  for($i = 0; $i < count($hotels); $i++) { 
                                    $withHotelParking = $hotels[$i]['parking'];
                                    $withThreeOrMoreVote = $hotels[$i]['vote'];
                                    $withParking = isset($_GET['withParking']);
                                    $voteHotel = $_GET['numberVote'];

                                    if ($withParking == true || $voteHotel >= 3 ) {
                                        if($withHotelParking == true) {
                                           
                                            ?>
                        <tr>
                            <th  scope="row"> <?php  echo ($i + 1); ?> </th>
                            <td> <?php echo $hotels[$i]['name'] ?> </td>
                            <td> <?php echo $hotels[$i]['description'] ?> </td>
                            <td> <?php echo $hotels[$i]['parking'] ?> </td>
                            <td> <?php echo $hotels[$i]['vote'] ?> </td>
                            <td> <?php echo $hotels[$i]['distance_to_center'] ?> </td>
                        </tr>
                        <?php
                                  
                            }
                        }
                        else {
                        ?>
                        
                        <tr>
                            <th  scope="row"> <?php echo ($i + 1 )?> </th>
                            <td> <?php echo $hotels[$i]['name'] ?> </td>
                            <td> <?php echo $hotels[$i]['description'] ?> </td>
                            <td> <?php echo $hotels[$i]['parking'] ?> </td>
                            <td> <?php echo $hotels[$i]['vote'] ?> </td>
                            <td> <?php echo $hotels[$i]['distance_to_center'] ?> </td>
                        </tr> 
                        <?php   
                        }
                        

                        };
                        ?>
                    </tbody>
                </table>

            </div>
<!-- 
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
                

            </div> -->

        </div>

        <!-- bootstrap js  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>