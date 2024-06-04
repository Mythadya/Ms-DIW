<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php
        // Ceci crée un nouvel objet DateTime pour la date du 14 juillet 2019
        $date = new DateTime('2019-07-14');
        // Ceci obtient le numéro de semaine ISO-8601(Norme de l'Organisation internationale date et heure en numerique) de l'année pour la date
        $num_semaine = $date->format('W');
        // Ceci affiche le numéro de semaine pour la date
        echo "Le numéro de semaine pour le 14/07/2019 est : $num_semaine";
        ?>
    </body>
</html>