<?php
const SEPARATOR = "-";

$joueur1 = ["Julien", 20, true];
$joueur2 = ["tata", 18, false];

genererSeparation(SEPARATOR);
afficherJoueurV2($joueur1);
genererSeparation(SEPARATOR);
afficherJoueurV2($joueur2);
genererSeparation(SEPARATOR);

afficherJoueurLePlusAgee($joueur1[1], $joueur2[1]);
genererSeparation(SEPARATOR);
$differenceAge = calculDifferenceAge($joueur1[1], $joueur2[1]);
echo "La difference d'age est de : ". $differenceAge;
genererSeparation(SEPARATOR);
afficherMajeur($joueur1[1]);
genererSeparation(SEPARATOR);
afficherMajeur($joueur2[1]);
genererSeparation(SEPARATOR);

function afficherJoueur ($nom, $age, $homme){
    echo "Nom Du joueur : " . $nom;
    echo "<br />";
    echo "age Du joueur : " . $age;
    echo "<br />";

    if($homme){
        echo "C'est un homme";
    } else { //$estUnHomme === false
        echo "C'est une femme";
    }
}

function afficherJoueurLePlusAgee($ageJoueur1, $ageJoueur2){
    if($ageJoueur1 > $ageJoueur2){
        echo "Joueur 1 est le plus agé";
    } else {
        echo "joueur2 est le plus agé";
    }
}

function calculDifferenceAge($age1, $age2){
    $resultat = $age1 - $age2;
    if($resultat < 0 ){
        $resultat = -$resultat;
    }
    return $resultat;
}

function genererSeparation($separateur){
    echo "<br />";
    for($i = 50 ; $i > 0; $i -=2 ){
        echo $separateur;
    }
    echo "<br/>";
}

function afficherMajeur($age){
    switch($age){
        case 21 :
        case 20 :
        case 19 : echo "Il est majeur";
            break;
        case 18 : echo "Il est tout juste majeur";
            break;
        case 17 : echo "Il est encore mineur";
            break;
        case 16:
        case 10 : echo "Il est mineur";
            break;
        default : echo "????";
            break;
    }
}

function afficherJoueurV2($tab){
    foreach($tab as $indice => $value) {
        echo $indice . ' : '. $value. '<br />';
    }
}

?>