<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php
        // Crée un objet DateTime représentant la date et l'heure actuelles
        $date_aujourdhui = new DateTime();
        // Crée un objet DateTime représentant la date de fin de formation (06/06/2024)
        $date_fin_formation = new DateTime('2024-06-06');
        // Calcule la différence entre la date actuelle et la date de fin de formation
        $diff = $date_aujourdhui->diff($date_fin_formation);
        // Récupère le nombre de jours restants avant la fin de la formation
        $jours_restants = $diff->days;
         // Affiche le message avec le nombre de jours restants
        echo "Il reste $jours_restants jours avant la fin de la formation.";
        ?>
    </body>
</html>