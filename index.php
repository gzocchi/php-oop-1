<?php
require_once __DIR__ . "/partials/movie_db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>php-oop-1</title>
</head>

<body>
    
    <header>
        <h1>php-oop-1</h1>
    </header>

    <main class="container">

        <div class="movie">
            <div class="info">
                <h3><?= $first_movie->title; ?></h3>

                <h6><?= $first_movie->direction; ?></h6>
                <p><?= $first_movie->overview; ?></p>
            </div>
            <div class="image">
                <img src="<?= $first_movie->poster ?>" alt="<?php $first_movie->title; ?>">
                <small><?= $first_movie->getDuration(); ?></small>
            </div>

        </div>

        <div class="movie">
            <div class="info">
                <h3><?= $second_movie->title; ?></h3>
                <h6><?= $second_movie->direction; ?></h6>
                <p><?= $second_movie->overview; ?></p>
            </div>
            <div class="image">
                <img src="<?= $second_movie->poster ?>" alt="<?php $second_movie->title; ?>">
                <small><?= $second_movie->getDuration(); ?></small>
            </div>

        </div>

        <div class="movie">
            <div class="info">
                <h3><?= $third_movie->title; ?></h3>
                <h6><?= $third_movie->direction; ?></h6>
                <p><?= $third_movie->overview; ?></p>
            </div>
            <div class="image">
                <img src="<?= $third_movie->poster ?>" alt="<?php $third_movie->title; ?>">
                <small><?= $third_movie->getDuration(); ?></small>
            </div>
        </div>

    </main>

</body>

</html>