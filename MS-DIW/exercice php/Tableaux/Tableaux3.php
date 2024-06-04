<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php
        // Définir un tableau associatif avec les régions de France et leurs départements
        $departements = array(
            "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
            "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
            "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
            "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
        );
        // Boucler sur le tableau pour afficher chaque région et le nombre de départements qu'elle contient
        foreach ($departements as $region => $department_list) {
            // Afficher la région et le nombre de départements qu'elle contient
            echo $region . ': ' . count($department_list) . ' departments' . "\n";
        }
        ?>
    </body>
</html>