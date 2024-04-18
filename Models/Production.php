<?php
class Production
{
    public function __construct(public string $title, public string $language, public int $vote, Genre $genre)
    {
    }

    public function show()
    {
        echo ' Titotlo: ' . $this->title . ' Lingua: ' . $this->language . ' Voto: ' . $this->vote . '<br>';
    }
}
