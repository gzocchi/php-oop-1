<?php
require_once __DIR__ . "/partials/movie_db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>php-oop-1</title>
</head>

<body>
    <header>
        <h1>php-oop-1</h1>
    </header>

    <main>

        <div class="movie">
            <div class="info">
                <h3><?= $first_movie->title; ?></h3>
                <small><?= $first_movie->getDuration(); ?></small>
                <h6><?= $first_movie->direction; ?></h6>
                <p><?= $first_movie->overview; ?></p>
            </div>
            <img src="<?= $first_movie->poster ?>" alt="<?php $first_movie->title; ?>">
        </div>

        <div class="movie">
            <div class="info">
                <h3><?= $second_movie->title; ?></h3>
                <small><?= $second_movie->getDuration(); ?></small>
                <h6><?= $second_movie->direction; ?></h6>
                <p><?= $second_movie->overview; ?></p>
            </div>
            <img src="<?= $second_movie->poster ?>" alt="<?php $second_movie->title; ?>">
        </div>

    </main>

</body>

</html>