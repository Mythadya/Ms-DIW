<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php
        function calculerSommeTableau(array $tableau): int
        {
            $somme = 0;
            foreach ($tableau as $valeur) {
                $somme += $valeur;
            }
            return $somme;
        }
        ?>
    </body>
</html>