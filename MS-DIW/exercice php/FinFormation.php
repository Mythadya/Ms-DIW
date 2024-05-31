<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php
        $date_aujourdhui = new DateTime();
        $date_fin_formation = new DateTime('2024-06-06');
        $diff = $date_aujourdhui->diff($date_fin_formation);
        $jours_restants = $diff->days;
        echo "Il reste $jours_restants jours avant la fin de la formation.";
        ?>
    </body>
</html>