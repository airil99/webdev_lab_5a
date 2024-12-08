<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php

    function multiplication($multiplier) {
        $results = [];
        for ($i = 1; $i <= 12; $i++) {
            $results[] = [
                'no' => $i,
                'multiplier' => $multiplier,
                'answer' => $i * $multiplier
            ];
        }
        return $results;
    }


    $multiplier = 2; 
    $multiplicationTable = multiplication($multiplier);
    ?>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Multiplier</th>
                <th>Answer</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($multiplicationTable as $row) {
                echo "<tr>";
                echo "<td>" . $row['no'] . "</td>";
                echo "<td>" . $row['multiplier'] . "</td>";
                echo "<td>" . $row['answer'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
