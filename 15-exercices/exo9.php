<?php
include("partials/header.php");
include("partials/menu.php");
?>
<?php
$personnages = array(
    "guerrier" => array(
        "nom" => "Guerrier",
        "force" => 12,
        "agilite" => 8,
        "intelligence" => 5
    ),
    "mage" => array(
        "nom" => "Mage",
        "force" => 5,
        "agilite" => 8,
        "intelligence" => 12
    ),
    "voleur" => array(
        "nom" => "Voleur",
        "force" => 8,
        "agilite" => 12,
        "intelligence" => 8
    )
);
?>
<form method="post" action="#">
    <label for="personnage">Choisir un personnage : </label>
    <select name="personnage" id="personnage">
        <option value="">-- Choisir un personnage --</option>
        <?php foreach ($personnages as $cle => $valeur) : ?>
            <option value="<?= $cle ?>"><?= $valeur["nom"] ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Afficher les caractéristiques">
</form>
<?php
if (isset($_POST["personnage"])) {
    $personnage = $_POST["personnage"];
    $caracteristiques = $personnages[$personnage];
    echo "<h2>" . $caracteristiques["nom"] . "</h2>";
    echo "<p>Force : " . $caracteristiques["force"] . "</p>";
    echo "<p>Agilité : " . $caracteristiques["agilite"] . "</p>";
    echo "<p>Intelligence : " . $caracteristiques["intelligence"] . "</p>";
}

?>
<?php
include("partials/footer.php");
?>