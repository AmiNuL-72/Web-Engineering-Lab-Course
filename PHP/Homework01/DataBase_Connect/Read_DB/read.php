<?php
    include "db_connect.php";

    $sql = "SELECT * FROM user_new";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Salary</th>
                    <th>Department</th>
                    <th>Responsibility</th>
                </tr>";
                while ($info = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $info['id'] . "</td>
                            <td>" . $info['name'] . "</td>
                            <td>" . $info['phone'] . "</td>
                            <td>" . $info['salary'] . "</td>
                            <td>" . $info['department'] . "</td>
                            <td>" . $info['responsibility'] . "</td>
                        </tr>";
                }
        echo "</table>";
    } else {
        echo "No records found!";
    }

    $conn->close();
?>
