<?php
include("partials/header.php");
include("partials/menu.php");
?>
<?php
$tableau = array(2, 6, 12, 5, 26, 34, 40, 60);

function tableau_paire($tableau)
{
    $paire = true;
    foreach ($tableau as $valeur) {
        if ($valeur % 2 != 0) {
            $paire = false;
            break;
        }
    }
    return $paire;
}

if (tableau_paire($tableau)) {
    echo "Le tableau ne contient que des valeurs paires.";
} else {
    echo "Le tableau contient au moins une valeur impaire.";
}


?>
<?php
include("partials/footer.php");
?>