<?php
include __DIR__ . './Models/movies.php';
include __DIR__ . './Models/genre.php'; 
include __DIR__ . "/db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>PHP OOP!</title>
</head>
<body>

    <h1 class="text-center my-3">La tua lista dei film</h1>

    <div class="container">
        <div class="row row-cols-3">
            <?php foreach ($movies as $movie) {  
            ?>
            <div class="card shadow p-3">
                <h3 class="text-center pb-2"> <?php echo $movie->title; ?></h3>
                <ul class="list-unstyled">
                    <li class="py-2"> <strong>Descrizione : </strong> <?php echo $movie->description; ?></li>
                    <li class="py-2"> <strong>Genere:</strong> <?php echo $movie->genre->genre ?></li>
                    <li class="py-2"> <strong>Anno:</strong><?php echo $movie->year; ?> </li>
                </ul>   
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>



