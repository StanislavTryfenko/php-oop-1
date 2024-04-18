<?php
require_once __DIR__ . '/db.php';
require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Genre.php';

// Create an array of films
$films = [];

// Create films
foreach ($db as $film) {
    $films[] = new Production($film['title'], $film['language'], $film['vote'], new Genre($film['name'], $film['description']));
}
// Check films
var_dump($films);

// Show films list
foreach ($films as $film) {
    $film->show();
}
