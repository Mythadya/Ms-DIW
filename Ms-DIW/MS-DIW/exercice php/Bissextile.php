<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php 
        function estBissextile($annee) {
            return ((($annee % 4 == 0) && ($annee % 100 != 0)) || ($annee % 400 == 0));
          }
          
          $annee = 2024;
          if (estBissextile($annee)) {
            echo "$annee est une année bissextile.";
          } else {
            echo "$annee n'est pas une année bissextile.";
          }
        ?>
    </body>
</html>