<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php 
$date = new DateTime('@1000200000');
echo "Le 1000200000 correspond au " . $date->format('d/m/Y à H\hi\m\s');
        ?>
    </body>
</html>