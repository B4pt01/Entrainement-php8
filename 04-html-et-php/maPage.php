<?php

$nomJoueur1 = "Julien";
$ageJoueur1 = 39;
$estUnHommeJoueur1 = false;

?>
    <h1> Nom Du joueur 1 : <?php echo $nomJoueur1; ?> </h1>
    <br />

    age Du joueur 1 : <?php echo $ageJoueur1; ?>
    <br />

<?php $ageJoueur1 = $ageJoueur1 +1; ?>
    <!-- Lorsque le echo affiche juste une donnée vous pouvez l'écrire comme cela -->
    age Du joueur 1 : <?= $ageJoueur1 ?>
    <br />

<?php
if($estUnHommeJoueur1 === true){
    ?>
    C'est un homme
<?php } else { //$estUnHomme === false ?>
    C'est une femme
<?php }?>