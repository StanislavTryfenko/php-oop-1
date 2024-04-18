<?php
class Production
{
    public function __construct(public string $title, public string $language, public int $vote)
    {
    }

    public function show()
    {
        echo ' Titotlo: ' . $this->title . ' Lingua: ' . $this->language . ' Voto: ' . $this->vote . '<br>';
    }
}

//productions list
$avatar = new Production("Avatar", "English", 8);
$perfetti_sconosciuti = new Production("Perfetti Sconosciuti", "Italian", 10);
$vicini_di_casa = new Production("Vicini di casa", "Italian", 9);

//show productions
$avatar->show();
$perfetti_sconosciuti->show();
$vicini_di_casa->show();
