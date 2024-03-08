<?php
include("partials/header.php");
include("partials/menu.php");
?>
<form action="#" method="post">
    <label for="Montantcmd">Montant de votre commande : </label>
    <input type="text" name="Montantcmd" id="Montantcmd">
    <select name="typecmd">
        <option value="standard">standard</option>
        <option value="express">express</option>
        <option value="internationnal">internationnal</option>
    </select>
    <button type="submit">valider</button>
</form>
<?php
if (isset($_POST['Montantcmd']) && isset($_POST['typecmd'])) {
    $Montantcmd = floatval($_POST['Montantcmd']);
    $fps = $Montantcmd > 50 ? 0 : 5;
    $fpe = $Montantcmd > 100 ? 5 : 10;
    $fpi = $Montantcmd < 50 ? 25 : 15;
    switch ($_POST['typecmd']) {
        case 'standard':
            echo "prix total : " . ($Montantcmd + $fps);
            break;
        case 'express':
            echo "prix total : " . ($Montantcmd + $fpe);
            break;
        case 'internationnal':
            echo "prix total : " . ($Montantcmd + $fpi);
            break;
        default:
            echo "commande introuvable";
            break;
    }
}
?>
<?php
include("partials/footer.php");
?>