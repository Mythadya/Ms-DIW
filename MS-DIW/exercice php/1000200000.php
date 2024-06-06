<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php 
        // Créer un nouvel objet DateTime avec le tampon de temps Unix 1000200000
        $date = new DateTime('@1000200000');
        
        // Mettre en forme la date pour l'afficher sous la forme "dd/mm/yyyy à HH:ii:ss"
        $formattedDate = $date->format('d/m/Y à H\hi\m\s');
        
        // Afficher la date formatée dans le navigateur
        echo "Le 1000200000 correspond au " . $formattedDate;
        ?>
    </body>
</html>