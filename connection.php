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

if(isset($_POST["submit"])){
    $fullname = mysqli_real_escape_string($conn, trim($_POST['fullname']));
    $employee_id = mysqli_real_escape_string($conn, trim($_POST['employee_id']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $education_level = mysqli_real_escape_string($conn, trim($_POST['education_level']));
    $department = mysqli_real_escape_string($conn, trim($_POST['department']));
    $position = mysqli_real_escape_string($conn, trim($_POST['position']));
    $dob = mysqli_real_escape_string($conn, trim($_POST['dob']));
    $gender = mysqli_real_escape_string($conn, trim($_POST['gender']));
    $contact = mysqli_real_escape_string($conn, trim($_POST['contact']));
    }
    $sql="INSERT INTO details (`Full name`, `Employee_id`, `Email`, `Education_Level`, `Department`, `Position`, `DOB`, `Gender`, `Contact`) VALUES ('$fullname', '$employee_id', '$email', '$education_level', '$department', '$position', '$dob', '$gender', '$contact')";

   if(mysqli_query($conn, $sql)){
    echo "<p>Record inserted successfully!</p>";
    
   } else {
       echo "<p>Error: " . mysqli_error($conn) . "</p>";
   }
    mysqli_close($conn);
    
    
   
?>


