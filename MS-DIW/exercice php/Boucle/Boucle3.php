<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Table de Multiplication</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table id="multiplicationTable">
        <tr>
            <th></th>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
        </tr>
    </table>

    <?php
        function generateMultiplicationTable() {
            $table = "<tr>";
            // Crée la première ligne avec les nombres de 1 à 9
            for ($i = 1; $i <= 9; $i++) {
                $table .= "<td>" . $i . "</td>";
            }

            $table .= "</tr>";

            for ($i = 1; $i <= 9; $i++) {
                // Commence une nouvelle ligne pour chaque nombre de 1 à 9
                $table .= "<tr>";
                // Ajoute le nombre lui-même comme première cellule
                $table .= "<td>" . $i . "</td>";

                for ($j = 1; $j <= 9; $j++) {
                    // Ajoute les résultats de multiplication en tant que cellules suivantes
                    $table .= "<td>" . $i * $j . "</td>";
                }
                $table .= "</tr>";
            }

            echo $table;
        }

        generateMultiplicationTable();
    ?>
</body>
</html>