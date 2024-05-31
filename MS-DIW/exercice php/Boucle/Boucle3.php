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

            for ($i = 1; $i <= 9; $i++) {
                $table .= "<td>" . $i . "</td>";
            }

            $table .= "</tr>";

            for ($i = 1; $i <= 9; $i++) {
                $table .= "<tr>";

                $table .= "<td>" . $i . "</td>";

                for ($j = 1; $j <= 9; $j++) {
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