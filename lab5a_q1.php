<!DOCTYPE html>
<html lang="en">
<head>
<title>Lab 5a Q1</title>
<style> table {
border-collapse: collapse; width: 50%;
margin: 20px auto;
}
table, th, td {
border: 1px solid black;
}
th, td {
padding: 10px; text-align: left;
}
th {
background-color: #f2f2f2;
}
</style>
</head>
<body>
<?php
$name = "Nur Diyana";
$matricNumber = "CI220117";
$course = "Bachelor of Computer Science (Software Engineering)";
$yearOfStudy = "Year 3";
$address = "304, Jalan Lestari 15, Taman Lestari IUS,32610, Seri Iskandar, Perak";
?>
<table>
<tr>
<th>Details</th>
<th>Information</th>
</tr>
<tr>
<td>Name</td>
 
<td><?php echo "$name"; ?></td>
</tr>
<tr>
<td>Matric Number</td>
<td><?php echo "$matricNumber"; ?></td>
</tr>
<tr>
<td>Course</td>
<td><?php echo "$course"; ?></td>
</tr>
<tr>
<td>Years</td>
<td><?php echo "$yearOfStudy"; ?></td>
</tr>
<tr>
<td>Address</td>
<td><?php echo "$address"; ?></td>
</tr>
</table>

</body>
</html> 