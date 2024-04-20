<?php
require_once __DIR__ . '/Data/db.php';
require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Genre.php';
require_once __DIR__ . '/Models/TVSerie.php';
require_once __DIR__ . '/Models/Movie.php';

// Create an array of productions
$productions = [];
$productions_movies = [];
$productions_tvseries = [];

// Create productions
foreach ($db as $production) {
    $productions[] = new Production($production['title'], $production['language'], $production['vote'], new Genre($production['name'], $production['description']));

    // splitting & create movies
    if ($production['type'] == 'Movie') {
        $productions_movies[] = new Movie($production['title'], $production['language'], $production['vote'], new Genre($production['name'], $production['description']), $production['profits'], $production['duration']);
    }

    // splitting & create tv series
    if ($production['type'] == 'TVSerie') {
        $productions_tvseries[] = new TVSerie($production['title'], $production['language'], $production['vote'], new Genre($production['name'], $production['description']), $production['seasons']);
    }
}
// Check productions
//var_dump($productions);

// Show productions list (comment to diplay on html)
/* foreach ($productions as $production) {
    $production->show();
} */
