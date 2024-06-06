<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php
          // Définir un tableau associatif avec les capitales et les pays
         $capitales = array(
            "Bucarest" => "Roumanie",
            "Bruxelles" => "Belgique",
            "Oslo" => "Norvège",
            "Ottawa" => "Canada",
            "Paris" => "France",
            "Port-au-Prince" => "Haïti",
            "Port-d'Espagne" => "Trinité-et-Tobago",
            "Prague" => "République tchèque",
            "Rabat" => "Maroc",
            "Riga" => "Lettonie",
            "Rome" => "Italie",
            "San José" => "Costa Rica",
            "Santiago" => "Chili",
            "Sofia" => "Bulgarie",
            "Alger" => "Algérie",
            "Amsterdam" => "Pays-Bas",
            "Andorre-la-Vieille" => "Andorre",
            "Asuncion" => "Paraguay",
            "Athènes" => "Grèce",
            "Bagdad" => "Irak",
            "Bamako" => "Mali",
            "Berlin" => "Allemagne",
            "Bogota" => "Colombie",
            "Brasilia" => "Brésil",
            "Bratislava" => "Slovaquie",
            "Varsovie" => "Pologne",
            "Budapest" => "Hongrie",
            "Le Caire" => "Egypte",
            "Canberra" => "Australie",
            "Caracas" => "Venezuela",
            "Jakarta" => "Indonésie",
            "Kiev" => "Ukraine",
            "Kigali" => "Rwanda",
            "Kingston" => "Jamaïque",
            "Lima" => "Pérou",
            "Londres" => "Royaume-Uni",
            "Madrid" => "Espagne",
            "Malé" => "Maldives",
            "Mexico" => "Mexique",
            "Minsk" => "Biélorussie",
            "Moscou" => "Russie",
            "Nairobi" => "Kenya",
            "New Delhi" => "Inde",
            "Stockholm" => "Suède",
            "Téhéran" => "Iran",
            "Tokyo" => "Japon",
            "Tunis" => "Tunisie",
            "Copenhague" => "Danemark",
            "Dakar" => "Sénégal",
            "Damas" => "Syrie",
            "Dublin" => "Irlande",
            "Erevan" => "Arménie",
            "La Havane" => "Cuba",
            "Helsinki" => "Finlande",
            "Islamabad" => "Pakistan",
            "Vienne" => "Autriche",
            "Vilnius" => "Lituanie",
            "Zagreb" => "Croatie"
          );

          // Trier le tableau par clés (capitales) en utilisant la fonction uasort()
          // avec une fonction de comparaison anonyme qui utilise strcasecmp pour ignorer la casse
          uasort($capitales, function($a, $b) {
            return strcasecmp($a, $b);
          });
           // Afficher chaque élément du tableau trié
          foreach ($capitales as $capital => $country) {
            echo "$capital - $country\n";
          }
          // Inverser le tableau pour avoir les pays comme clés et les capitales comme valeurs
          $capitales_flipped = array_flip($capitales);
           // Trier le tableau inversé par clés (pays) en utilisant la fonction ksort()
          ksort($capitales_flipped);
          // Afficher chaque élément du tableau inversé trié
          foreach ($capitales_flipped as $country => $capital) {
            echo "$country - $capital\n";
          }
          // Compter le nombre de pays dans le tableau
          $count = count($capitales);
          echo "Number of countries: $count\n";
          // Filtre le tableau pour ne garder que les capitales qui commencent par 'B'
          $capitales_filtered = array_filter($capitales, function($capital) {
            return strpos(strtolower($capital), 'b') === 0;
          });
           // Afficher le tableau filtré
          print_r($capitales_filtered);
        ?>
    </body>
</html>