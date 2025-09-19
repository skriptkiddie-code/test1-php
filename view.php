<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    
</body>
</html>
<?php
include("db_connect.php");
 //statement is prepared
   $stmt = $conn->prepare("SELECT * FROM details");

// this is the script that executes my variable stmt declared above
$stmt->execute();

// Get result set
$result = $stmt->get_result();

// Fetch and display all rows
while ($row = $result->fetch_assoc()) {
    echo "Full Name: " . $row['Full Name'] . "<br>";
    echo "Employee ID: " . $row['Employee_Id'] . "<br>";
    echo "Email: " . $row['Email'] . "<br>";
    echo "Education Level: " . $row['Education_Level'] . "<br>";
    echo "Department: " . $row['Department'] . "<br>";
    echo "Position: " . $row['Position'] . "<br>";
    echo "Date of Birth: " . $row['DOB'] . "<br>";
    echo "Gender: " . $row['Gender'] . "<br>";
    echo "Contact: " . $row['Contact'] . "<br><hr>";}

?>