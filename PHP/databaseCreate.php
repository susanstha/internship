<?php
    include 'dataconn.php';
    $sql = "CREATE TABLE Department(
        dept_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        dept_name VARCHAR(30) NOT NULL,
        dept_description TEXT NOT NULL
    )";
    if ($conn->query($sql) === TRUE) {
        echo "Table Department created successfully";
    } 
    else {
        echo "Error creating table: " . $conn->error;
    }

    $conn->close();
?>