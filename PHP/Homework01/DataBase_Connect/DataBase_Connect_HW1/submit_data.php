<?php
include "db_connect.php";

$name = $phone = $salary = $department = $responsibility = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = validate_data($_POST['name']);
    $phone = validate_data($_POST['phone']);
    $salary = validate_data($_POST['salary']);
    $department = $_POST['department'];
    $responsibility = isset($_POST['responsibility']) ? implode(', ', $_POST['responsibility']) : 'No responsibility selected';

    // Insert the data into the database
    $sql = "INSERT INTO user_new(id, name, phone, salary, department, responsibility) 
            VALUES (NULL, '$name', '$phone', '$salary', '$department', '$responsibility')";
    
    if ($conn->query($sql)) {
        echo "Data Inserted Successfully.";
    } else {
        echo "Data insertion failed: " . $conn->error;
    }
}

function validate_data($data) {
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}

$conn->close();
?>

<html>
<body>
    <h2>Data</h2>
    <p>Name: <?php echo $name; ?></p>
    <p>Phone: <?php echo $phone; ?></p>
    <p>Salary: <?php echo $salary; ?></p>
    <p>Department: <?php echo $department; ?></p>
    <p>Responsibility: <?php echo $responsibility; ?></p>
</body>
</html>
