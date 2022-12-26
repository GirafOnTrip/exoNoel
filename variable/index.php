<!doctype html>
<html lang="fr">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Les variables en PHP</title>
</head>

<body>
     <!--

1) Créez une variable $nom et affectez-lui votre nom. Affichez la variable avec echo. OK

2) Créez une variable $age et affectez-lui votre âge. Affichez la variable avec echo. OK

3) Créez une variable $estEtudiant et affectez-lui true si vous êtes étudiant, false sinon. 
     Affichez la variable avec echo. OK

4) Créez une variable $taille et affectez-lui votre taille en centimètres. Affichez la variable avec echo. OK

5) Créez une variable $prix et affectez-lui le prix d'un article à 50 euros.
     Affichez le prix avec echo en utilisant la fonction number_format pour afficher le prix avec des virgules comme séparateur des milliers. OK

6) Créez une variable $phrase et affectez-lui une phrase de votre choix.
     Affichez la longueur de la phrase avec echo en utilisant la fonction strlen. OK

7) Créez une variable $texte et affectez-lui un texte de votre choix.
     Affichez la première lettre du texte avec echo en utilisant la fonction substr. OK

8) Créez une variable $nombre et affectez-lui un nombre de votre choix.
     Affichez le nombre au carré avec echo en utilisant l'opérateur **. OK

9) Créez une variable $nombre1 et affectez-lui un nombre de votre choix.
     Créez une variable $nombre2 et affectez-lui un autre nombre de votre choix.
     Affichez la somme des deux nombres avec echo en utilisant l'opérateur +. OK

10) Créez une variable $animal et affectez-lui le nom d'un animal de votre choix.
     Affichez la variable avec echo en utilisant la fonction strtoupper pour mettre le nom de l'animal en majuscules.
-->

<?php

$nom = "CABRET</br>";
echo $nom;

$age = "30";
echo $age.'</br>';

$estEtudiant = true;
echo $estEtudiant.'</br>';

$taille = 178;
echo $taille.'</br>';

$prix = 50;
echo number_format($prix,2,',',' ').'</br>';

$phrase = 'test de la fonction strlen';
echo strlen($phrase).'</br>';

$texte = "fonction substr";
echo substr($texte,0,1).'</br>';

$nombre = 8;
echo ($nombre**2).'</br>';

$nombre1 = 24;
$nombre2 = 6;
echo ($nombre1 + $nombre2).'</br>';

$animal = "chat";
echo strtoupper($animal);

?>

</body>

</html>