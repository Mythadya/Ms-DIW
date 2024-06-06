<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php
        // Crée un objet DateTime qui représente la date et l'heure actuelles
        $date = new DateTime();
        // Modifie l'objet DateTime en ajoutant 1 mois à la date actuelle
        // La méthode modify utilise une chaîne de caractères pour spécifier la modification à apporter
        // Dans ce cas, '+1 month' signifie "ajouter 1 mois"
        $date->modify('+1 month');
        // Affiche la date résultante au format 'd/m/Y' (jour/mois/année)
        // La méthode format retourne une chaîne de caractères représentant la date au format spécifié
        echo "La date après avoir ajouté 1 mois est : " . $date->format('d/m/Y');
        ?>
    </body>
</html>