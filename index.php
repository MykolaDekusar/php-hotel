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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center my-5 text-danger">Hotels</h1>
    <div class="container">
        <table class="table border border-dark">
        <thead>
            <tr>
            <th scope="col">Nome</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Parcheggio</th>
            <th scope="col" class='text-center'>Voto</th>
            <th scope="col" class='text-center'>Distanza dal centro</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($hotels as $data){
                echo "<tr>";
                foreach($data as $info => $key){
                    if($info == 'name'){
                        echo "<td><b>$key</b></td>";
                    };
                    if($info == 'description'){
                        echo "<td>$key</td>";
                    };
                    if($info == 'parking'){
                        if($key != 0){
                            echo "<td>Disponibile </td>";
                        }else{
                            echo "<td><b>Pieno</td>";
                        }
                    }
                    if($info == "vote"){
                        echo "<td class='text-center'><em>$key</em></td>";
                    }
                    if($info == "distance_to_center"){
                        $value = ceil($key);
                        echo "<td class='text-center'>$value m</td>";
                    }
                };
                echo "</tr>";
            };
            ?>
        </tbody>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>