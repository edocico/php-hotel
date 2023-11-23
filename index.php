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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>PHP Hotel</title>
</head>
<body>

    <div class="title">
        <h1>Lista degli Hotel</h1>
        
    </div>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrizione</th>
                    <th>Parcheggio</th>
                    <th>Voto</th>
                    <th>Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $hotel) { ?>
                    <tr>
                        <td class="text-left"><?php echo $hotel['name']?></td>
                        <td class="text-left"><?php echo $hotel['description']?></td>
                        <td class="text-center"><?php 
                        if ($hotel['parking'] === true) {
                            echo "SI";
                        } else {
                            echo "NO";
                        } ?>
                        </td>
                        <td class="text-center"><?php echo $hotel['vote']?></td>
                        <td class="text-center"><?php echo $hotel['distance_to_center']?> Km</td>
                    </tr>
                <?php } ?>
            </tbody> 
        </table>
    </div>

</body>
</html>