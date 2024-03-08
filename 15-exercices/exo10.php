<?php
include("partials/header.php");
include("partials/menu.php");
?>
<?php
$personnages = array(
    "guerrier" => array(
        "nom" => "Guerrier",
        "classe" => "Guerrier",
        "race" => "Humain",
        "niveau" => 10,
        "force" => 12,
        "agilite" => 8,
        "intelligence" => 5
    ),
    "mage" => array(
        "nom" => "Mage",
        "classe" => "Mage",
        "race" => "Elfe",
        "niveau" => 15,
        "force" => 5,
        "agilite" => 8,
        "intelligence" => 12
    ),
    "voleur" => array(
        "nom" => "Voleur",
        "classe" => "Voleur",
        "race" => "Nain",
        "niveau" => 8,
        "force" => 8,
        "agilite" => 12,
        "intelligence" => 8
    )
);
?>
<form method="post" action="">
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
if (isset($_POST["personnage"]) && $_POST["personnage"] != "") {
    $personnage = $_POST["personnage"];
    $caracteristiques = $personnages[$personnage];
    echo "<h2>" . $caracteristiques["nom"] . " (" . $caracteristiques["classe"] . " - " . $caracteristiques["race"] . " - Niveau " . $caracteristiques["niveau"] . ")</h2>";
    echo "<p>Force : " . $caracteristiques["force"] . "</p>";
    echo "<p>Agilité : " . $caracteristiques["agilite"] . "</p>";
    echo "<p>Intelligence : " . $caracteristiques["intelligence"] . "</p>";
}

?>
<?php
include("partials/footer.php");
?>