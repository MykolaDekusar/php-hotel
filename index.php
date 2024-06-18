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
    
    $parking = $_GET['scelta'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel PHP Filter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-secondary">
    <!-- TITLE -->
    <h1 class="text-center my-5 text-danger">Hotels</h1>
    <!-- END OF TITLE -->
     <!-- FORM -->
    <div class="container mb-3">
        <form action="index.php" method="GET" class="d-flex align-items-center">
            <select name="scelta" class="p-1">
                <option value="undefined" selected>Tutti</option>
                <option value="1">Con Parcheggio</option>
                <option value="0">Senza Parcheggio</option>
            </select>
            <button class="btn btn-primary mx-2 p-1 px-3">Invia</button>
        </form>
    </div>
    <!-- END OF FORM -->
     <!-- START OF TABLE -->
    <div class="container">
        <table class="table border border-light text-center table-dark">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col" >Parcheggio</th>
                <th scope="col" >Voto</th>
                <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            <!-- START OF TABLE BODY CREATED WITH PHP -->
            <tbody>
                <?php
                foreach($hotels as $data){
                    //CHEKING IF PARKING HAS A VALUE
                    if($parking != null && $parking != "undefined"){
                        foreach($data as $info => $key){
                            //CHEKING IF THE ARRAY HAS THE SAME VALUE AS THE PARKING VALUE AND SHOWING ONLY THE SAME VALUE ROWS
                            if($info == "parking" && $parking == $key){
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
                                                echo "<td class='text-success'>Disponibile </td>";
                                            }else{
                                                echo "<td class='text-danger'>Pieno</td>";
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
                    };
                    //IF PARKING IS NULL PRINT FULL TABLE
                    }else{
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
                                        echo "<td class='text-success'>Disponibile</td>";
                                    }else{
                                        echo "<td class='text-danger'>Pieno</td>";
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
                };
                ?>
            </tbody>
        </table>
    </div>
    <!-- BOOTSRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>