<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php
        // Définition de la fonction calculerSommeTableau
        function calculerSommeTableau(array $tableau): int
        {
            // Initialisation de la variable somme à 0
            $somme = 0;
            // Boucle sur chaque élément du tableau
            foreach ($tableau as $valeur) {
                // Ajout de la valeur actuelle à la somme
                $somme += $valeur;
            }
            // Retour de la somme finale
            return $somme;
        }
        ?>
    </body>
</html>