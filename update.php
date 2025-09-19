<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
        <!-- <label for="fullname">Full Name</label><br>
        <input type="text" name="fullname"><br> -->
        <label for="employee_id">Employee ID</label><br>
        <input type="text" name="employee_id" required><br>
         <!-- <label for="email">Email</label><br>
        <input type="email" name="email"><BR> -->
        <label>Level of Education</label><br>
        <option value="">Select...</option>
        <select name="education_level">
            <option value="Diploma">Diploma</option>
            <option value="High School">High School</option>
            <option value="Master's Degree">Master's Degree</option>
            <option value="Bachelor's Degree">Bachelor's Degree</option>
            <option value="Other">Other</option>
            <option value="Doctorate">Doctorate</option>
        </select><br>
        <label for="department">Department</label><br>
        <input type="text" name="department"><br>
        <label for="position">Position/Job Title</label><br>
        <input type="text" name="position"><br>
        
        <label>Contact Number</label><br>
        <input type="tel" name="contact"><br>
        <input type="submit" name="Edit" value="Edit">
        
      </form>
</body>
</html>
<?php
include("db_connect.php");
if (isset($_POST['Edit'])) {
    $employee_id = mysqli_real_escape_string($conn, $_POST['employee_id']);
    //$fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    //$email = mysqli_real_escape_string($conn, $_POST['email']);
    $education_level = mysqli_real_escape_string($conn, $_POST['education_level']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);

    $sql = "UPDATE details SET  `Education_Level`='$education_level', `Department`='$department', `Position`='$position', `Contact`='$contact' WHERE `Employee_Id`='$employee_id'";
    if (mysqli_query($conn, $sql)) {
     echo "Record updated successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}