<?php
$nomJoueur1 = "Julien";
$ageJoueur1 = 39;
$estUnHommeJoueur1 = true;

$nomJoueur2 = "tata";
$ageJoueur2 = 25;
$estUnHommeJoueur2 = false;

genererSeparation();
afficherJoueur($nomJoueur1, $ageJoueur1, $estUnHommeJoueur1);
genererSeparation();
afficherJoueur($nomJoueur2, $ageJoueur2, $estUnHommeJoueur2);
genererSeparation();

afficherJoueurLePlusAgee($ageJoueur1, $ageJoueur2);
genererSeparation();

function afficherJoueur ($nom, $age, $homme){
    echo "Nom Du joueur : " . $nom;
    echo "<br />";
    echo "age Du joueurb: " . $age;
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

    if($ageJoueur1 === "30"){
        echo "<br />";
        echo "C est égal";
    }

}

function genererSeparation(){
    echo "<br />";
    echo "-----------------------------";
    echo "<br/>";
}

?>