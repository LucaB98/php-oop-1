<?php
include_once __DIR__ . '/models/movie.php';
include_once __DIR__ . '/models/actor.php';
include_once __DIR__ . '/models/director.php';

$director = new Director(1, 'Peter', 'Jackson');

$actor1 = new Actor(1, 'Ryan', 'Renols');
$actor2 = new Actor(2, 'Robert', 'daweyn');

$actors = [$actor1, $actor2];

$movie1 = new Movie(1, 'Deadpool', 'Violence', $director, $actors);
$movie2 = new Movie(2, 'IronMan', 'sci-fi', $director, $actors);

$movies = [$movie1, $movie2];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>
<body>
    <ul>
        <?php foreach($movies as $movie):?>
            <li>
                <h2><?= $movie->title ?></h2>
                <p><?= $movie->genre ?></p>
                <address><?= $movie->director->getFullName() ?></address>
                <p>CAST: <?= $movie->getCastNames() ?></p>
            </li>
        <?php endforeach?>
    </ul>
</body>
</html>