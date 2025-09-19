<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            body {
                background: #0d2637ff;
                font-family: 'Segoe UI', Arial, sans-serif;
            }
            .delete-form {
                max-width: 350px;
                margin: 60px auto;
                background: #fff;
                border-radius: 12px;
                box-shadow: 0 4px 16px rgba(0,0,0,0.08);
                padding: 32px 28px;
            }
            .delete-form label {
                font-weight: 500;
                color: #2a4d69;
                margin-bottom: 8px;
                display: block;
            }
            .delete-form input[type="text"] {
                width: 100%;
                padding: 8px 10px;
                margin-bottom: 18px;
                border: 1px solid #b3c6d6;
                border-radius: 6px;
                font-size: 1em;
                background: #f7fbfc;
                transition: border-color 0.2s;
            }
            .delete-form input[type="text"]:focus {
                border-color: #0077cc;
                outline: none;
            }
            .delete-form input[type="submit"] {
                background: #d7263d;
                color: #fff;
                font-weight: bold;
                border: none;
                cursor: pointer;
                border-radius: 6px;
                padding: 10px 0;
                width: 100%;
                font-size: 1em;
                transition: background 0.2s;
            }
            .delete-form input[type="submit"]:hover {
                background: #a81c2a;
            }
        </style>
</head>
<body>
        <form class="delete-form" action="delete.php" method="post">
            <label for="employee_id">Enter Employee ID</label>
            <input type="text" name="employee_id" required>
            <input type="submit" name="delete" value="Delete">
        </form>
</body>
</html>
<?php
include("db_connect.php");
if (isset($_POST['delete'])) {
    $employee_id = mysqli_real_escape_string($conn, $_POST['employee_id']);

    $sql = "DELETE FROM details WHERE Employee_Id='$employee_id'";
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}