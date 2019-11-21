<?php
    include 'dataconn.php';
    $sql = "INSERT INTO Department(dept_name, dept_description)
            VALUES ('Ophthalmology','Ophthalmology is a branch of medicine and surgery which deals with the diagnosis and treatment of eye disorders')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>