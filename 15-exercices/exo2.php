<?php
include("partials/header.php");
include("partials/menu.php");
?>
<?php
echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="get">';
echo '<label for="nombre">Choisir une table de multiplication : </label>';
echo '<input type="text" name="nombre" id="nombre">';
echo '<input type="submit" value="Afficher la table">';
echo '</form>';
if (isset($_GET['nombre'])) {
    $nombre = intval($_GET['nombre']);
    for ($i = 1; $i <= 10; $i++) {
        $resultat = $nombre * $i;
        echo "$nombre x $i = $resultat<br>";
    }
}
?>
<?php
include("partials/footer.php");
?>