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
                <option value="undefined" <?php if($parking == 'undefined') echo'selected'; else echo '';?> >Tutti</option>
                <option value="1" <?php if($parking === '1') echo'selected';else echo '';?>>Con Parcheggio</option>
                <option value="0" <?php if($parking === '0') echo'selected';else echo ''; ?>>Senza Parcheggio</option>
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
                <?php foreach($hotels as $data): ?>
                    <!-- CHEKING IF PARKING HAS A VALUE -->
                    <?php if($parking != null && $parking != "undefined"): ?>
                            <!-- CHEKING IF THE ARRAY HAS THE SAME VALUE AS THE PARKING VALUE AND SHOWING ONLY THE SAME VALUE ROWS -->
                            <?php if($data["parking"] == $parking): ?>
                                <tr >
                                    <td class="text-light"><b><?php echo $data['name'] ?></b></td>
                                    <td class="text-light"><b><?php echo $data['description'] ?></b></td>
                                    <td class="text-light"><b><?php echo $data["parking"] ? 'Si' : 'No' ?></b></td>
                                    <td class="text-light"><b><?php echo $data["vote"] ?></b></td>
                                    <td class="text-light"><b><?php echo $data["distance_to_center"] ?></b> Km</td>
                                </tr>
                            <?php endif; ?>
                           <!-- IF PARKING IS NULL PRINT FULL TABLE -->
                            <?php else: ?>
                                <tr >
                                    <td class="text-light"><b><?php echo $data['name'] ?></b></td>
                                    <td class="text-light"><b><?php echo $data['description'] ?></b></td>
                                    <td class="text-light"><b><?php echo $data["parking"] ? 'Si' : 'No' ?></b></td>
                                    <td class="text-light"><b><?php echo $data["vote"] ?></b></td>
                                    <td class="text-light"><b><?php echo $data["distance_to_center"] ?></b> Km</td>
                                </tr>
                            <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>