<?php
include_once __DIR__ . '/models/movie.php';
include_once __DIR__ . '/models/person.php';

$director = new Person(1, 'Peter', 'Jackson');

$actor1 = new Person(1, 'Ryan', 'Renols');
$actor2 = new Person(2, 'Robert', 'daweyn');

$actors = [$actor1, $actor2];

$movie1 = new Movie(1, 'Deadpool', 'Violence', $director);

$movie1->addActor($actor1, 'deadpool');


$movie2 = new Movie(2, 'IronMan', 'sci-fi', $director);

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