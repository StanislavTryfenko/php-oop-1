<?php
require_once __DIR__ . '/Data/db.php';
require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Genre.php';

// Create an array of productions
$productions = [];

// Create productions
foreach ($db as $production) {
    $productions[] = new Production($production['title'], $production['language'], $production['vote'], new Genre($production['name'], $production['description']));
}
// Check productions
//var_dump($productions);

// Show productions list (comment to diplay on html)
foreach ($productions as $production) {
    $production->show();
}