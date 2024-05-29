<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php
        $date = new DateTime('2019-07-14');
        $num_semaine = $date->format('W');
        echo "Le numéro de semaine pour le 14/07/2019 est : $num_semaine";
        ?>
    </body>
</html>