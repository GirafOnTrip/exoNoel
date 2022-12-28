<?php

class CompteBancaire{

    public function __construct(float $solde)
    {
        $this->solde = $solde;
    }

    public function deposer($somme){

        $this->solde = $this->solde + $somme;
        echo "Vous avez déposé ".$somme." €. Nouveau solde : ".$this->solde." € <br>";
    }

    public function retirer($somme){

        if($somme > $this->solde){
            echo "Impossible de retirer ".$somme." €. Solde actuel de votre compte insuffisant : ".$this->solde." € <br>";
        } 
        elseif($somme == 0){
            
            echo "Attention, veuillez saisir un montant autre que 0.<br>";
        }
        elseif($somme < 0){

            echo "Erreur, veuillez saisir un montant positif.<br>";
        }
        else {

            $this->solde = $this->solde - $somme;
            echo "Vous avez retiré ".$somme." €. Nouveau solde : ".$this->solde." € <br>";
        }
    }
}

// TEST

$newCompte = new CompteBancaire(3000);

$newCompte ->deposer(400);
$newCompte ->retirer(3000);
$newCompte ->retirer(400);
$newCompte ->retirer(400);
$newCompte ->retirer(-10);
$newCompte -> retirer(0);
$newCompte -> deposer(90);
$newCompte -> retirer(91);


?>