<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php
        $departements = array(
            "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
            "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
            "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
            "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
        );
        
        foreach ($departements as $region => $department_list) {
            echo $region . ': ' . count($department_list) . ' departments' . "\n";
        }
        ?>
    </body>
</html>