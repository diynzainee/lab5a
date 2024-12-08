<?php
// Define the multiplication function
function multiplication($multiplier) {
    $results = [];
    for ($i = 1; $i <= 12; $i++) {
        $results[] = [
            'No' => $i,
            'Multiplier' => $multiplier, 
            'Answer' => $i * $multiplier
        ];
    }
    return $results;
}

// Call the multiplication function
$multiplier = 2; // Set the multiplier to 2 as shown in the example
$tableData = multiplication($multiplier);
?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse; 
            width: 50%;
            margin: 20px auto; 
            text-align: center;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Multiplier</th>
                <th>Answer</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tableData as $row): ?>
                <tr>
                    <td><?= $row['No'] ?></td>
                    <td><?= $row['Multiplier'] ?></td>
                    <td><?= $row['Answer'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
