<?php

class Personne {

    public function __construct(string $nom, int $age)
    {
        $this->nom = $nom;
        $this->age = $age;
    }

    public function sePresenter(){

        echo "Bonjour, je m'appelle ".$this->nom." et j'ai ".$this->age." ans."; 
    }

}

// TEST

$perso1 = new Personne("Jacques",35);
$perso1 -> sePresenter();

?>