<?php
// Define the associative array
$students = [
    [
        'name' => 'Alice', 'program' => 'BIP', 'age' => 21
    ],
    [
        'name' => 'Bob', 'program' => 'BIS', 'age' => 20
    ],
    [
        'name' => 'Raju', 'program' => 'BIT', 'age' => 22
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lab 5a Q2</title>
    <style>
        table {
            border-collapse: collapse; 
            width: 50%;
        }
        th, td {
            border: 3px double black; 
            padding: 8px;
            text-align: center;
        }
        table {
            border: 5px double black; 
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Program</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Use foreach loop to display the data
            foreach ($students as $student) {
                echo "<tr>";
                echo "<td>{$student['name']}</td>";
                echo "<td>{$student['program']}</td>";
                echo "<td>{$student['age']}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>



