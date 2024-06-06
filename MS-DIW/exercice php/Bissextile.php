<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php 
        // Définition d'une fonction qui vérifie si une année est bissextile
        function estBissextile($annee) {
            // La règle pour déterminer si une année est bissextile est la suivante :
            // - l'année doit être divisible par 4, sauf si elle est divisible par 100
            // - mais si elle est divisible par 400, alors elle est bissextile
          return ((($annee % 4 == 0) && ($annee % 100 != 0)) || ($annee % 400 == 0));
          }
           // Définition de l'année à tester
          $annee = 2024;
           // Appel de la fonction estBissextile avec l'année à tester
          if (estBissextile($annee)) {
            // Si l'année est bissextile, affiche le message "L'année est bissextile."
            echo "$annee est une année bissextile.";
          } else {
            // Sinon, affiche le message "L'année n'est pas bissextile."
            echo "$annee n'est pas une année bissextile.";
          }
        ?>
    </body>
</html>