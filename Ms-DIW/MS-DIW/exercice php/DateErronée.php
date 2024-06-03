<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php 
$date = DateTime::createFromFormat('d/m/Y', '32/17/2019');
if ($date && $date->format('d/m/Y') === '32/17/2019') {
    echo "La date est valide.";
} else {
    echo "La date est invalide.";
}


        ?>
    </body>
</html>