<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
</head>

<body>
    <center>
        <h1>Barishal University Employee Information</h1>
        <form action="submit_data.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required><br><br>

            <label for="salary">Salary:</label>
            <input type="number" step="0.01" id="salary" name="salary" required><br><br>

            <label for="department">Department:</label>
            <select id="department" name="department" required>
                <option value="finance">Finance</option>
                <option value="IT">IT</option>
                <option value="development">Development</option>
            </select><br><br>

            <label>Responsibility:</label><br>
            <input type="checkbox" name="responsibility[]" value="manager"> Manager<br>
            <input type="checkbox" name="responsibility[]" value="developer"> Developer<br>
            <input type="checkbox" name="responsibility[]" value="team lead"> Team Lead<br><br>

            <input type="submit" value="Submit">
        </form>
    </center>

</body>

</html>
<?php
// collect form data
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $salary=$_POST['salary'];
    $department=$_POST['department'];
    if(isset($_POST['responsibility']))
        $responsibility=$_POST['responsibility'];
    else{
        $responsibility="No data found for responsibility";
    }
}
?>