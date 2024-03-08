<?php
session_start();
include("partials/header.php");
include("partials/menu.php");
?>

<form action="#" method="post">
    <label for="nb_notes">Choisir le nombre de notes à ajouter : </label>
    <input type="text" name="nb_notes" id="nb_notes">
    <input type="submit" value="Ajouter des notes">
</form>
<?php
if (isset($_POST['nb_notes'])) {
    $nb_notes = intval($_POST['nb_notes']);
    $_SESSION['nbnotes'] = $nb_notes;
    echo '<form action="#" method="post">';
    for ($i = 1; $i <= $nb_notes; $i++) {
        echo '<label for="note' . $i . '">Note ' . $i . ' : </label>';
        echo '<input type="text" name="note' . $i . '" id="note' . $i . '"><br>';
    }
    echo '<input type="submit" value="Calculer la moyenne">';
    echo '</form>';
}
if (isset($_POST['note1'])) {
    $total = 0;
    for ($i = 1; $i <= $_SESSION['nbnotes']; $i++) {
        $note = floatval($_POST['note' . $i]);
        $total += $note;
    }
    $moyenne = $total / $_SESSION['nbnotes'];
    if (isset($moyenne)) {
        echo "La moyenne des notes est de : $moyenne";
    }
}
?>

<?php
include("partials/footer.php");
?>