<?php
require_once __DIR__ . "/../classes/movie.php";

$overview = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, sint ullam. Eos consectetur eveniet vero consequuntur mollitia exercitationem debitis. Blanditiis eveniet incidunt eius consectetur error hic sequi consequatur repudiandae ex!";

$first_movie = new Movie("Back to the Future", "Robert Zemeckis");
$first_movie->title = "Ritorno al Futuro";
$first_movie->setDuration(116);
$first_movie->release_year = 1985;
$first_movie->overview = $overview;
$first_movie->poster = "https://upload.wikimedia.org/wikipedia/en/d/d2/Back_to_the_Future.jpg";

$second_movie = new Movie("Back to the Future Part II", "Robert Zemeckis");
$second_movie->setDuration(108);
$second_movie->release_year = 1989;
$second_movie->overview = $overview;
$second_movie->poster = "https://upload.wikimedia.org/wikipedia/en/c/c2/Back_to_the_Future_Part_II.jpg";
