<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php 

// Ouvre le fichier "liens.txt" et stocke son contenu dans un tableau $file\_content
$file_content = file("../MS-DIW/PHP/liens.txt");

// Initialise une chaîne de caractères $html\_output avec une structure HTML de base
$html_output = "<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Liste de liens</title>
</head>
<body>
    <h1>Liste de liens</h1>
    <ul>";

// Parcourt chaque ligne du tableau $file\_content
    foreach ($file_content as $line) {
     // Supprime les espaces blancs en début et fin de chaîne
        $line = trim($line);
     // Ajoute une liste HTML avec un lien vers chaque ligne du fichier
        $html_output .= "<li><a href='$line'>$line</a></li>";
}

// Ajoute la fermeture des balises HTML manquantes
$html_output .= "</ul>
</body>
</html>";

// Affiche la chaîne de caractères $html\_output
echo $html_output;
        ?>
    </body>
</html>