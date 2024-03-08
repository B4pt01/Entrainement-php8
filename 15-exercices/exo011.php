<?php
include("partials/header.php");
include("partials/menu.php");
?>
<?php
function genererNom()
{
    $noms = array("Dupont", "Martin", "Durand", "Petit", "Lefebvre", "Bertrand", "Robert", "Thomas", "Lemaire", "Girard");
    $index = rand(0, count($noms) - 1);
    return $noms[$index];
}

function genererPrenom()
{
    $prenoms = array("Jean", "Pierre", "Marie", "Paul", "Jacques", "François", "Sophie", "Emilie", "Laurent", "David");
    $index = rand(0, count($prenoms) - 1);
    return $prenoms[$index];
}

function genererDateNaissance()
{
    $anneeMin = 1957; // minimale (65 ans)
    $anneeMax = 2004; // maximale (18 ans)
    $anneeNaissance = rand($anneeMin, $anneeMax);
    $moisNaissance = rand(1, 12);
    $jourNaissance = rand(1, 28);
    return "$jourNaissance-$moisNaissance-$anneeNaissance";
}

function genererEmail($prenom, $nom)
{
    $prenom = strtolower(substr($prenom, 0, 1));
    $nom = strtolower(str_replace(" ", "", $nom));
    return "$prenom$nom@example.com";
}

for ($i = 1; $i <= 5; $i++) {
    $nom = genererNom();
    $prenom = genererPrenom();
    $dateNaissance = genererDateNaissance();
    $email = genererEmail($prenom, $nom);

    echo "<h3>Profil $i</h3>";
    echo "<p>Nom : $nom</p>";
    echo "<p>Prénom : $prenom</p>";
    echo "<p>Date de naissance : $dateNaissance</p>";
    echo "<p>Adresse email : $email</p>";
    echo "<hr>";
}

?>

<?php
include("partials/footer.php");
?>