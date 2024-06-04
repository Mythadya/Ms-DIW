<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php 
        // Récupère l'heure actuelle au format G\hi (24h sur 2 chiffres et minutes sur 2 chiffres)
        $heure_courante = date('G\hi');
        // Affiche la chaîne de caractères "Il est " suivie de l'heure actuelle
        echo "Il est $heure_courante.";
        
        ?>
    </body>
</html>