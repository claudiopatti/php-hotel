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

    // $voteHotel = '';
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
                        <input type="checkbox" name="withParking" id="withParking">
                        <div>
                            <label class="mt-3" for="numberVote">Scegli il voto da 1 a 5</label>
                        </div>
                        <div>
                            <input type="number"  name="numberVote" id="numberVote" min="1" max="5" value="<?php echo isset($_GET['min_vote']) ? $_GET['min_vote'] : ''; ?>">                         
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
                        <?php  
                        $numberVote = isset($_GET['numberVote']) ? (int)$_GET['numberVote'] : null;
                        $withParking = isset($_GET['withParking']);
                        foreach ($hotels as $ind => $hotel) {
                         
                            
                            $withThreeOrMoreVote = is_null($numberVote) || $hotel['vote'] >= $numberVote;
                            $withHotelParking = !$withParking || $hotel['parking'];

                            if ($withHotelParking && $withThreeOrMoreVote ) {
                                   
                ?>
                <tr>
                    <th  scope="row"> <?php  echo ($ind + 1); ?> </th>
                    <td> <?php echo $hotel['name'] ?> </td>
                    <td> <?php echo $hotel['description'] ?> </td>
                    <td> <?php echo $hotel['parking'] ? 'si': 'no' ?> </td>
                    <td> <?php echo $hotel['vote'] ?> </td>
                    <td> <?php echo $hotel['distance_to_center'] ?> </td>
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