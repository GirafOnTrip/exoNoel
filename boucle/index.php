<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les boucles en PHP</title>
</head>
<body>

<!--
    1) Créez une boucle for qui affiche les nombres de 1 à 10.
    2) Créez une boucle while qui affiche les nombres de 1 à 10.
    3) Créez une boucle do while qui affiche les nombres de 1 à 10.
    4) Créez une boucle for qui affiche les nombres de 1 à 10, mais seulement les nombres pairs.
    5) Créez une boucle for qui affiche les nombres de 1 à 10, mais seulement les nombres impairs.
    6) Créez une boucle for qui affiche les nombres de 1 à 10, mais qui saute le nombre 5.
    7) Créez une boucle for qui affiche les nombres de 1 à 10, mais qui s'arrête au nombre 5.
    8) Créez une boucle for qui affiche les nombres de 1 à 10, mais qui affiche le nombre 5 en rouge et les autres nombres en noir.
    9) Créez une boucle for qui affiche les nombres de 1 à 10, mais qui affiche uniquement le nombre 5.
    10) Créez une boucle for qui affiche les nombres de 1 à 10, mais qui affiche uniquement le nombre 7.
    11) Créez un tableau contenant les noms de 5 de vos amis.
         Utilisez une boucle foreach pour afficher chaque nom dans une liste HTML en utilisant la balise <li>.
    12) Créez un tableau contenant les noms de 5 de vos amis.
         Utilisez une boucle foreach pour afficher chaque nom dans une phrase différente, par exemple "Mon ami s'appelle nom_amis".
    13) Créez un tableau contenant 5 noms de fruits et utilisez une boucle foreach pour afficher chaque fruit.
    14) Créez un tableau associatif qui associe des noms de fruits à leurs couleurs respectives et utilisez une boucle foreach pour afficher chaque fruit et sa couleur.
    15) Créez un tableau contenant des nombres et utilisez une boucle foreach pour afficher la somme de tous les nombres.
    16) Créez un tableau contenant des noms de pays et utilisez une boucle foreach pour afficher chaque pays en majuscules.
    17) Créez un tableau contenant des noms de pays et utilisez une boucle foreach pour afficher chaque pays en minuscules.
    18) Créez un tableau contenant des noms de pays et utilisez une boucle foreach pour afficher chaque pays en capitalisant la première lettre du nom.
    19) Créez un tableau associatif qui associe des noms de personnes à leur âge respectif et utilisez une boucle foreach pour afficher chaque personne et son âge.
    20) Créez un tableau associatif qui associe des noms de personnes à leur âge respectif et utilisez une boucle foreach pour afficher uniquement les personnes âgées de plus de 30 ans.
    21) Créez un tableau contenant des noms de villes et utilisez une boucle foreach pour afficher chaque ville précédée de la phrase "J'aimerais visiter la ville de".
    22) Créez un tableau associatif qui associe des noms de villes à leurs pays respectifs et utilisez une boucle foreach pour afficher chaque ville et son pays.
-->


<?php 

// 1) Créez une boucle for qui affiche les nombres de 1 à 10.

echo "<b>Boucle for de 1 à 10 : </b>";

for($i = 1;$i<=10; $i ++){

    echo $i." ";
}

?> <br><br>

<?php

// 2) Créez une boucle while qui affiche les nombres de 1 à 10.

echo "<b>Boucle while de 1 à 10 : </b>";

$i = 1;

while($i <= 10){

    echo $i." ";
    $i++;

}

?> <br><br>

<?php

// 3) Créez une boucle do while qui affiche les nombres de 1 à 10.

echo "<b>Boucle do while de 1 à 10 : </b>";

$i = 1;

do{

    echo $i." ";
    $i++;

} while($i <= 10);

?> <br><br>

<?php

// 4) Créez une boucle for qui affiche les nombres de 1 à 10, mais seulement les nombres pairs.

echo "<b>Les chiffres pairs de 1 à 10 sont : </b>";

for($i = 1;$i<=10; $i ++){

    if($i%2 == 0){

        echo $i." ";
    }  
}

?> <br><br>

<?php

// 5) Créez une boucle for qui affiche les nombres de 1 à 10, mais seulement les nombres impairs.

echo "<b>Les chiffres impairs de 1 à 10 sont : </b>";

for($i = 1;$i<=10; $i ++){

    if($i%2 == 1){

        echo $i." ";
    }  
}

?> <br><br>

<?php

// 6) Créez une boucle for qui affiche les nombres de 1 à 10, mais qui saute le nombre 5.

echo "<b>Les chiffres de 1 à 10 sans le nombre 5 : </b>";

for($i = 1;$i<=10; $i ++){

    if($i == 5){

        echo "";

    }else{

        echo $i." ";
    }
}

?> <br><br>

<?php

// 7) Créez une boucle for qui affiche les nombres de 1 à 10, mais qui s'arrête au nombre 5.

echo "<b>Les chiffres de 1 à 10 mais qui s'arrete au nombre 5 : </b>";

for($i = 1;$i<=10; $i ++){

    if($i == 5){

        echo $i;
        break;

    }else{

        echo $i." ";
    }
}

?> <br><br>

<?php

// 8) Créez une boucle for qui affiche les nombres de 1 à 10, mais qui affiche le nombre 5 en rouge et les autres nombres en noir.

echo "<b>Les chiffres de 1 à 10 mais qui affiche le nombre 5 en rouge : </b>";

for($i = 1;$i<=10; $i ++){

    if($i == 5){

        echo "<span style='color : red'>$i</span> ";

    }else{

        echo $i." ";
    }
}

?> <br><br>

<?php

// 9) Créez une boucle for qui affiche les nombres de 1 à 10, mais qui affiche uniquement le nombre 5.

echo "<b>Les chiffres de 1 à 10 mais qui affiche uniquement le nombre 5 : </b>";

for($i = 1;$i<=10; $i ++){

    if($i == 5){

        echo $i;
    }
}

?> <br><br>

<?php

// 10) Créez une boucle for qui affiche les nombres de 1 à 10, mais qui affiche uniquement le nombre 7.

echo "<b>Les chiffres de 1 à 10 mais qui affiche uniquement le nombre 7 : </b>";

for($i = 1;$i<=10; $i ++){

    if($i == 7){

        echo $i;
    }
}

?> <br><br>

<?php

// 11) Créez un tableau contenant les noms de 5 de vos amis.
// Utilisez une boucle foreach pour afficher chaque nom dans une liste HTML en utilisant la balise <li>.

echo "<b>Affichez un tableau contenant les noms de 5 amis dans une liste HTML (li) : </b>";

$arrayFriends = ["Jacques","Jean","Jules","Justine","Jeanne"];

echo "<ul>";

foreach($arrayFriends as $friend){

    echo "<li>".$friend."</li>";
}

echo "</ul>";

?> <br>

<?php

// 12) Créez un tableau contenant les noms de 5 de vos amis.
// Utilisez une boucle foreach pour afficher chaque nom dans une phrase différente, par exemple "Mon ami s'appelle nom_amis".

echo "<b>Affichez un tableau contenant les noms de 5 amis avec une phrase différente : </b><br>";

$arrayFriends   = ["Jacques","Jean","Jules","Justine","Jeanne"];
$arraySentences = ["Mon ami est ","Mon ami s'appelle ","Mon ami se nomme ","Le nom de mon ami est ","Mon ami porte le nom de "];

$i = 0;

foreach($arrayFriends as $friend){

    echo "<br>".$arraySentences[$i].$friend;
    $i++;
}


?> <br><br>

<?php

// 13) Créez un tableau contenant 5 noms de fruits et utilisez une boucle foreach pour afficher chaque fruit.

echo "<b>Affichez un tableau contenant 5 fruits : </b><br>";

$arrayFruit   = ["Pomme","Peche","Banane","Fraise","Cerise"];

foreach($arrayFruit as $fruit){

    echo "<br>".$fruit;
}


?> <br><br>

<?php

// 14) Créez un tableau associatif qui associe des noms de fruits à leurs couleurs respectives et utilisez une boucle foreach pour afficher chaque fruit et sa couleur.

echo "<b>Affichez un tableau associatif qui associe des noms de fruits à leurs couleurs respectives : </b><br>";

$arrayFruits = ["Pomme" => "verte","Fraise" => "rouge","Banane" => "jaune"];

foreach($arrayFruits as $fruit => $color){

    echo "<br>La ".$fruit." est de couleur ".$color;
}


?> <br><br>

<?php

// 15) Créez un tableau contenant des nombres et utilisez une boucle foreach pour afficher la somme de tous les nombres.

echo "<b>Affichez la somme de tous les nombres d'un tableau : </b><br>";

$arrayNumber = [4,7,2,3];

foreach($arrayNumber as $number){

    $result += $number;
}

echo "<br>La somme de notre tableau est de : ".$result;

?> <br><br>

<?php

// 16) Créez un tableau contenant des noms de pays et utilisez une boucle foreach pour afficher chaque pays en majuscules.

echo "<b>Affichez les pays en majuscule : </b><br>";

$arrayCountry = ["France","Italie","Grece","Pays-bas"];

foreach($arrayCountry as $country){

    echo "<br>".strtoupper($country);
}


?> <br><br>

<?php

// 17) Créez un tableau contenant des noms de pays et utilisez une boucle foreach pour afficher chaque pays en minuscules.

echo "<b>Affichez les pays en minuscule : </b><br>";

$arrayCountry = ["France","Italie","Grece","Pays-bas"];

foreach($arrayCountry as $country){

    echo "<br>".strtolower($country);
}


?> <br><br>

<?php

// 18) Créez un tableau contenant des noms de pays et utilisez une boucle foreach pour afficher chaque pays en capitalisant la première lettre du nom.

echo "<b>Affichez les pays avec la premiere lettre en capitale : </b><br>";

$arrayCountry = ["france","italie","grece","pays-bas"];;

foreach($arrayCountry as $country){

    echo "<br>".ucfirst($country);
}


?> <br><br>

<?php

// 19) Créez un tableau associatif qui associe des noms de personnes à leur âge respectif et utilisez une boucle foreach pour afficher chaque personne et son âge.

echo "<b>Tableau associatif : Affichez chaque personne avec son âge : </b><br>";

$arrayPerson = ["Jean" => 80, "Jacques" => 60, "Simon" => 24];

foreach($arrayPerson as $name => $age){

    echo "<br>".$name." a ".$age." ans";
}


?> <br><br>

<?php

// 20) Créez un tableau associatif qui associe des noms de personnes à leur âge respectif et utilisez une boucle foreach pour afficher uniquement les personnes âgées de plus de 30 ans.

echo "<b>Tableau associatif : Affichez chaque personne avec son âge de plus de 30 ans : </b><br>";

$arrayPerson = ["Jean" => 80, "Jacques" => 60, "Simon" => 24];

foreach($arrayPerson as $name => $age){

    if($age > 30) {
    echo "<br>".$name." a ".$age." ans";
    }
}


?> <br><br>

<?php

// 21) Créez un tableau contenant des noms de villes et utilisez une boucle foreach pour afficher chaque ville précédée de la phrase "J'aimerais visiter la ville de".

echo "<b>Affichez chaque ville précédée de la phrase : J'aimerais visiter la ville de : </b><br>";

$arrayCity = ["Sidney","Tokyo","New York"];

foreach($arrayCity as $city){

    echo "<br> J'aimerais visiter la ville de ".$city;
 
}


?> <br><br>

<?php

// 22) Créez un tableau associatif qui associe des noms de villes à leurs pays respectifs et utilisez une boucle foreach pour afficher chaque ville et son pays.

echo "<b> Tableau associatif : Affichez chaque pays et sa ville : </b><br>";

$arrayCity = ["Australie" => "Sidney", "Japon" => "Tokyo", "Etats-unis" => "New York"];

foreach($arrayCity as $country => $city){

    echo "<br>".$country." => ".$city;
 
}

?> <br><br>


</body>
</html>