<?php
require_once __DIR__ . '/Production.php';
class TVSerie extends Production
{
    public function __construct(public string $title, public string $language, public int $vote, public Genre $genre, public int $seasons,)
    {
        parent::__construct($title, $language, $vote, $genre);
    }
}
