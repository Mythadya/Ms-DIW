<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php
        // Définir un tableau associatif avec les mois de l'année en français et leur nombre de jours
$months = [
    "janvier" => 31,
    "février" => 28,
    "mars" => 31,
    "avril" => 30,
    "mai" => 31,
    "juin" => 30,
    "juillet" => 31,
    "août" => 31,
    "septembre" => 30,
    "octobre" => 31,
    "novembre" => 30,
    "décembre" => 31,
];
// Trier le tableau par nombre de jours en utilisant la fonction usort()
usort($months, function($a, $b) {
    return $a["days"] - $b["days"];
});
 // Afficher le tableau dans un tableau HTML
echo "<table border='1'>";
echo "<tr><th>Mois</th><th>Nombre de jours</th></tr>";
foreach ($months as $month => $days) {
    echo "<tr><td>" . $month . "</td><td>" . $days . "</td></tr>";
}
echo "</table>";
        ?>
    </body>
</html>