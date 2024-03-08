
<?php 
    include("partials/header.php");
    include("partials/menu.php");
?>
<h1>Bienvenue sur le site d'exercices en PHP</h1>
<h2>Liste des exercices</h2>
<ol>
    <li>Afficher une table de multiplication définie</li>
    <li>Afficher une table de multiplication choisie</li>
    <li>Programme permettant de calculer le périmètre et l'aire d'un cercle</li>
    <li>Programme du juste prix, le but est de deviner un chiffre aléatoire</li>
    <li>Utiliser les sessions, afin d'ajouter un bouton réinitialiser à l'exercice précédent</li>
    <li>Double formulaire, un formulaire permettant de choisir le nombre notes que l'on souhaite ajouter.
        Un second formulaire permettant de saisir le nombre de notes souhaitées et un bouton permettant
        de faire le calcul de la moyenne de ces notes.
    </li>
    <li>Créer une liste déroulante permettant de choisir un personnage (masculin ou féminin) (guerrier ou mage)
        et afficher une image correspondante au choix effectuée.
    </li>
    <li>
        <h4>Etape 1 </h4>
        Réaliser un tableau contenant les valeurs : 2,6,12,5,26,34,40,60
        <h4>Etape 2 </h4>
        Réaliser une fonction qui vérifie si un tableau ne contient que des valeurs paires ou non
        <h4>Etape 3 </h4>
        Afficher un message pour l'indiquer à l'utilisateur
    </li>
    <li>Listes déroulantes et tableaux, créer un programme permettant de choisir un personnage
    à travers une liste déroulante et afficher les caractéristiques du personnage choisit</li>
    <li>Tableaux associatifs, en reprenant l'exercice précédent vous devrez cette fois utiliser
    un tableau associatif afin d'avoir des données plus complètes à afficher</li>
    <li>
        Créer un script PHP qui génère des profils d'utilisateurs aléatoires. Chaque profil doit inclure
        un nom, un prénom, une date de naissance, et une adresse email. Vous utiliserez des fonctions,
        des tableaux, et travaillerez avec des chaînes de caractères.<br/>
        1. Générer des Noms et Prénoms : Utilisez deux tableaux, l'un pour les noms et l'autre pour les prénoms.
        Sélectionnez aléatoirement un nom et un prénom pour chaque profil.<br/>
        2. Calculer une Date de Naissance : Générez une date de naissance aléatoire pour chaque utilisateur,
        les âges possibles allant de 18 à 65 ans.<br/>
        3. Créer une Adresse Email : L'adresse email doit être formée en utilisant les premières lettres du prénom
        suivi du nom, et se terminer par "@example.com". Assurez-vous de gérer les caractères spéciaux ou les espaces.<br/>
        4. Afficher les Profils : Générez 5 profils d'utilisateurs et affichez-les dans un format lisible.
    </li>
    <li>
        Écrire un script PHP qui simule un système simplifié de gestion de commandes pour un magasin en ligne.
        Le script devra traiter différents types de commandes (par exemple, "standard", "express", "international")
        et appliquer des frais de port différents en fonction du type de commande et du montant total de la commande.<br/>
        1. Types de Commande : Définissez trois types de commandes - standard, express, et international.<br/>
        2. Calcul des Frais de Port : <br/>Les frais de port doivent être calculés comme suit :<br/>
        Standard : Gratuit si la commande dépasse 50 €, sinon 5 €.<br/>
        Express : 10 € pour les commandes jusqu'à 100 €, et 5 € pour les commandes au-delà.<br/>
        International : 15 € pour toutes les commandes, avec un supplément de 10 € pour les commandes inférieures à 50 €.<br/>
        3. Utilisation de Match ou Switch : Utilisez la structure match ou switch pour traiter les différents types de commandes.<br/>
        4. Affichage des Résultats : Pour chaque commande, affichez le type, le montant total avant frais de port, et les frais de port.
    </li>
</ol>
<?php 
    include("partials/footer.php");
?>