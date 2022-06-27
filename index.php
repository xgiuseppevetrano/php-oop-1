<?php
    require_once __DIR__ . '/classes/movies.php';

    $movies = [
        new Movie('The Man From Toronto', 'Patrick Hughes', 'Film d\'azione', 112, 2022, 5),
        new Movie('Love & Gelato', 'Brandon Camp', 'Film per adolescenti', 112, 2022, 4),
        new Movie('Mortal Kombat', 'Simon McQuoid', 'Film di arte marziali', 110, 2021, 3),
        new Movie('Hustle', 'Jeremiah Zagar', 'Dramma', 118, 2022, 2),
        new Movie('Spiderhead', 'Joseph Kosinski', 'Film di fantascienza', 107, 2022, 1)
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Php movie</title>
</head>
<body>
    <h1>Nuove uscite Netflix</h1>
    <?php foreach($movies as $movie) { ?>
        <div>
            <h3><?= $movie->title; ?></h3>
            <span>Regista: <?= $movie->director; ?></span> <br>
            <span>Genere: <?= $movie->genre; ?></span> <br>
            <span>Durata: <?= $movie->duration; ?></span> <br>
            <span>Anno: <?= $movie->year; ?></span> <br>
            <div>Valutazione: <?= $movie->getStars($movie->stars); ?></div>
            <hr>
        </div>
    <?php } ?>
</body>
</html>