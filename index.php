<?php
require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/db.php';

// Create an array of films
$films = [];

// Create films
foreach ($db as $film) {
    $films[] = new Production($film['title'], $film['language'], $film['vote']);
}

// Show films list
foreach ($films as $film) {
    $film->show();
}
