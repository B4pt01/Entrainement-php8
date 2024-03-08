<?php
include("partials/header.php");
include("partials/menu.php");
?>
<?php
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        $resultat = $i * $j;
        echo "$i x $j = $resultat<br>";
    }
    echo "<br>";
}
?>
<?php
include("partials/footer.php");
?>