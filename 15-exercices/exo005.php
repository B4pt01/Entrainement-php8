<?php
session_start();
include("partials/header.php");
include("partials/menu.php");
?>

<form action="#" method="post">
    <label for="nombre">Choisir un nombre entre 1 et 2 : </label>
    <input type="text" name="nombre" id="nombre">
    <input type="submit" value="Deviner le nombre">
</form>
<form action="#" method="post">
    <input type="hidden" name="reset" value="yes">
    <input type="submit" value="réinitialiser">
</form>

<?php
if (isset($_POST['nombre'])) {
    $nombre_choisi = intval($_POST['nombre']);
    if (!isset($_SESSION['nombre_mystere'])) {
        $_SESSION['nombre_mystere'] = rand(1, 2);
        echo $_SESSION['nombre_mystere'];
    }
    if ($nombre_choisi == $_SESSION['nombre_mystere']) {
        echo "Bravo, vous avez trouvé le bon nombre : {$_SESSION['nombre_mystere']} !";
        unset($_SESSION['nombre_mystere']);
    } else {
        echo "Désolé, ce n'est pas le bon nombre. Essayez encore !";
    }
}
if (isset($_POST['reset']) && $_POST['reset'] == "yes") {
    $_SESSION['nombre_mystere'] = rand(1, 2);
}
?>

<?php
include("partials/footer.php");
?>