<?php
const SEPARATOR = "-";

$nomJoueur1 = "Julien";
$ageJoueur1 = 20;
$estUnHommeJoueur1 = true;

$nomJoueur2 = "tata";
$ageJoueur2 = 18;
$estUnHommeJoueur2 = false;

genererSeparation(SEPARATOR);
afficherJoueur($nomJoueur1, $ageJoueur1, $estUnHommeJoueur1);
genererSeparation(SEPARATOR);
afficherJoueur($nomJoueur2, $ageJoueur2, $estUnHommeJoueur2);
genererSeparation(SEPARATOR);

afficherJoueurLePlusAgee($ageJoueur1, $ageJoueur2);
genererSeparation(SEPARATOR);
$differenceAge = calculDifferenceAge($ageJoueur1, $ageJoueur2);
echo "La difference d'age est de : ". $differenceAge;
genererSeparation(SEPARATOR);
afficherMajeur($ageJoueur1);
genererSeparation(SEPARATOR);
afficherMajeur($ageJoueur2);
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
    for($i = 0 ; $i < 50; $i++){
        echo $separateur;
    }
    echo "<br/>";
}

function afficherMajeur($age){

    /*
     * Ici on se rend compte que lorsqu'on veut tester de nombreuses valeurs on imbrique beaucoup de if
     * On va donc utiliser le switch dans un cas comme celui-ci
    if($age > 18){
        echo "Il est majeur";
    }elseif ($age === 18){
        echo "Il est tout juste majeur";
    }elseif($age > 12){
        echo "Il est ado";
    }else{
        echo "C'est un enfant";
    }
    */

    switch($age){
        // ici on fusionne le cas 21 20 et 19
        case 21 :
        case 20 :
        case 19 : echo "Il est majeur";
            break;
        case 18 : echo "Il est tout juste majeur";
            break;
        case 17 : echo "Il est encore mineur";
            break;
        // ici on fusionne le cas 10 et 16
        case 16:
        case 10 : echo "Il est mineur";
            break;
        default : echo "Valeur non prévue";
            break;
    }
}

?>