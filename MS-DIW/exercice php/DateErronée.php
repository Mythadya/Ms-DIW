<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php 
        // Crée un objet DateTime à partir d'une chaîne de caractères au format 'd/m/Y' (jour/mois/année)
        // avec la valeur '32/17/2019' qui est une date invalide (il n'y a pas 32 jours dans un mois)
$date = DateTime::createFromFormat('d/m/Y', '32/17/2019');
// Vérifie si la date a été créée avec succès et si elle correspond à la chaîne de caractères d'origine
if ($date && $date->format('d/m/Y') === '32/17/2019') {
    // Si la date est valide, affiche le message "La date est valide."
    echo "La date est valide.";
} else {
    // Sinon, affiche le message "La date est invalide."
    echo "La date est invalide.";
}


        ?>
    </body>
</html>