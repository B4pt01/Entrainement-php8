<?php
session_start();
include("partials/header.php");
include("partials/menu.php");
?>
<?php

echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="get">';
echo '<label for="nombre">Choisir un nombre entre 1 et 20 : </label>';
echo '<input type="text" name="nombre" id="nombre">';
echo '<input type="submit" value="Deviner le nombre">';
echo '</form>';

if (isset($_GET['nombre'])) {
    $nombre_choisi = intval($_GET['nombre']);
    if (!isset($_SESSION['nombre_mystere'])) {
        $_SESSION['nombre_mystere'] = rand(1, 20);
    }
    if ($nombre_choisi == $_SESSION['nombre_mystere']) {
        echo "Bravo, vous avez trouvé le bon nombre : {$_SESSION['nombre_mystere']} !";
        unset($_SESSION['nombre_mystere']);
    } else {
        echo "Désolé, ce n'est pas le bon nombre. Essayez encore !";
    }
}
?>


<?php
include("partials/footer.php");
?>