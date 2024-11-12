<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="img_div">
        <img src="./img/logo_poleS.png" alt="Logo poleS">
    </div>

    <h1>Les constantes en PHP</h1>

    <div class="topnav">
        <a href="01_bases.php">01.Les bases</a>
        <a href="02_variables.php">02.Les variables</a>
        <a href="03_constantes.php">03.Les constantes</a>
        <a href="04_arithmetiques.php">04.Arithméthiques</a>
        <a href="05_conditions.php">05.Conditions</a>
        <a href="06_tableaux.php">06.Tableaux</a>
        <a href="07_boucles.php">07.Boucles</a>
        <a href="08_dates.php">08.Dates</a>
        <a href="09_fonctions.php">09.Fonctions</a>
        <a href="10_inclusion.php">10.Inclusion</a>
    </div>
    
    <?php
        echo "On utilise la méthode define() pour créer une constante. Elle prend 2 arguments";
        echo "<br>";

        define("TODAY", "Lundi");

        echo "<br>";

        echo TODAY; // affichage du contenu de la constante

        echo "<br>";

        // Pour concaténer une variable à du texte
        echo "Voici le contenu de ma constante: " . TODAY;

        echo "<h2>Les constantes magiques</h2>";

        echo __DIR__ . "<br>"; // affiche le chemin complet du dossier du fichier

        echo __FILE__ . "<br>"; // affiche le chemin complet du fichier (dossier + nom du fichier)

    ?>
</body>
</html>