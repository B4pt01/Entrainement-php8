<?php
$nomJoueur1 = "Julien";
$ageJoueur1 = 39;
$estUnHommeJoueur1 = true;

$nomJoueur2 = "tata";
$ageJoueur2 = 25;
$estUnHommeJoueur2 = false;

$text = test(3);
echo $text;

afficherJoueur($nomJoueur1, $ageJoueur1, $estUnHommeJoueur1);
afficherJoueur($nomJoueur2, $ageJoueur2, $estUnHommeJoueur2);

function afficherJoueur ($nom, $age, $homme){
    echo "Nom Du joueur : " . $nom;
    echo "<br />";
    echo "age Du joueur : " . $age;
    echo "<br />";
    $age = $age +1 ;
    echo "age Du joueur : " . $age;
    echo "<br />";

    if($homme === true){
        echo "C'est un homme";
    } else { //$estUnHomme === false
        echo "C'est une femme";
    }
}

function test ($c){
    $a = 5;
    $b = 10;
    return $a + $b +$c;
}

?>