
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
            <style>
                h1 {
                    text-align: center;
                    color: #0077cc;
                    font-size: 2.5em;
                    margin-top: 30px;
                }
                .company-name {
                    text-align: center;
                    color: #3d8ba1ff;
                    font-size: 2em;
                    font-weight: bold;
                    letter-spacing: 2px;
                    margin-top: 10px;
                    margin-bottom: 10px;
                }
            a {
                color: #0077cc;
                text-decoration: none;
                font-weight: bold;
                padding: 6px 14px;
                border-radius: 4px;
                background: #eaf6fb;
                transition: background 0.2s, color 0.2s;
            }
            a:hover {
                background: #0077cc;
                color: #fff;
            }
        </style>
</head>
<body>
    <div class="company-name">RUKSIDES GROUP OF COMPANIES</div>
    <h1>Employee_form</h1>
    <a href="employ.php">Add New Employee</a>
<a href="view.php">View Employees</a>
<a href="update.php?id=123">Edit Employee</a>
<a href="delete.php?id=123">Delete Employee</a>
    <form action="connection.php" method="post">
        <br><label for="fullname">Full Name</label><br>
        <input type="text" name="fullname" required><br>
        <label for="employ_id">Employee ID</label><br>
        <input type="text" name="employee_id" required><br>
         <label for="email">Email</label><br>
        <input type="email" name="email"><BR>
        <label>Level of Education</label><br>
        <option value="">Select...</option>
        <select name="education_level" required>
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
        <label for="dob">Date of Birth</label><br>
        <input type="date" name="dob"><br>
        <label>Gender</label><br>
        <select name="gender">
         <option value="Male">Male</option>
        <option value="Female">Female</option>
         <option value="Other">Other</option>
        </select><br>
        <label>Contact Number</label><br>
        <input type="tel" name="contact"><br>
        <input type="submit" name="submit" value="submit">
        
      </form>
</body>
</html>
