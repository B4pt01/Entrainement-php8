<?php
include("partials/header.php");
include("partials/menu.php");
?>
<?php
$imgf = './public/img/playerf.png';
$imgh = './public/img/player.png';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Choix du personnage</title>
</head>

<body>
    <form action="#" method="post">
        <label for="personnage">Choisir un personnage : </label>
        <select name="personnage" id="personnage">
            <option value="">-- Choisir un personnage --</option>
            <option value="Femme">Femme</option>
            <option value="Homme">Homme</option>
        </select>
        <input type="submit" value="Afficher l'image">
    </form>
    <?php
    if (isset($_POST['personnage']) && $_POST['personnage'] != '') {
        $personnage = $_POST['personnage'];
        if ($_POST['personnage'] == "Homme") {
            echo '<img src="' . $imgh . '" alt="' . $personnage . '">';
        } elseif ($_POST['personnage'] == "Femme") {
            echo '<img src="' . $imgf . '" alt="' . $personnage . '">';
        } else {
            echo 'L\'image correspondante au personnage sélectionné n\'existe pas.';
        }
    }
    ?>
</body>

</html>

<?php
include("partials/footer.php");
?>