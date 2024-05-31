<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php 
        $date = new DateTime();
        $date->modify('+1 month');
        echo "La date après avoir ajouté 1 mois est : " . $date->format('d/m/Y');
        ?>
    </body>
</html>