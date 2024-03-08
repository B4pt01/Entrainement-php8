<?php
include("partials/header.php");
include("partials/menu.php");
?>
<?php
echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="get">';
echo '<label for="rayon">Choisir le rayon du cercle : </label>';
echo '<input type="text" name="rayon" id="rayon">';
echo '<input type="submit" value="Calculer l\'aire et le périmètre">';
echo '</form>';
if (isset($_GET['rayon'])) {
    $rayon = floatval($_GET['rayon']);
    $aire = pi() * pow($rayon, 2);
    $perimetre = 2 * pi() * $rayon;
    echo "Rayon : $rayon<br>";
    echo "Aire : $aire<br>";
    echo "Périmètre : $perimetre<br>";
}
?>

<?php
include("partials/footer.php");
?>