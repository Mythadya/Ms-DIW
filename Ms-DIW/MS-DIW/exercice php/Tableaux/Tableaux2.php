<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php
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

          uasort($capitales, function($a, $b) {
            return strcasecmp($a, $b);
          });
          
          foreach ($capitales as $capital => $country) {
            echo "$capital - $country\n";
          }

          $capitales_flipped = array_flip($capitales);
          ksort($capitales_flipped);
          foreach ($capitales_flipped as $country => $capital) {
            echo "$country - $capital\n";
          }

          $count = count($capitales);
          echo "Number of countries: $count\n";

          $capitales_filtered = array_filter($capitales, function($capital) {
            return strpos(strtolower($capital), 'b') === 0;
          });
          print_r($capitales_filtered);
        ?>
    </body>
</html>