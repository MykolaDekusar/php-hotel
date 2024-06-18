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
    //CICLO NELL'ARRAY DEGLI HOTEL
    // foreach($hotels as $data){
    //     foreach($data as $info => $key){
    //         // if($key == 'parking' && $info != 0){
    //         //     echo 'C\'è parcheggio';
    //         // }
    //         echo "$info $key";
    //         echo "<br>";
    //     };
    //     echo "<hr>";
    // };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel PHP Filter</title>
</head>
<body>
    <h1>Ecco gli Hotel</h1>
    <?php 
    foreach($hotels as $data){
        foreach($data as $info => $key){
            // if($key == 'parking' && $info != 0){
            //     echo 'C\'è parcheggio';
            // }
            if($info == 'name'){
                echo "<h2> $key </h2>";
            };
            if($info == 'description'){
                echo "<p> $key </p>";
            };
            if($info == 'parking'){
                if($key != 0){
                    echo "<p>Parcheggio: Disponibile </p>";
                }else{
                    echo "<p>Parcheggio: <b>NON</b> Disponibile </p>";
                }
            }
            if($info == "vote"){
                echo "<p>Voto: <em>$key</em></p>";
            }
            if($info == "distance_to_center"){
                $value = ceil($key);
                echo "<p>Distanza dal centro: $value </p>";
            }
        };
        echo "<hr>";
    };
    ?>
</body>
</html>