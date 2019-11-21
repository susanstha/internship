<?php
    include 'dataconn.php';
    $sql = "INSERT INTO Department(dept_name, dept_description)
            VALUES ('Gynaecology', 'Gynaecology is the medical practice dealing with the health of the female reproductive systems (vagina, uterus, and ovaries) and the breasts.');";
    $sql .= "INSERT INTO Department(dept_name, dept_description)
            VALUES ('Neurology', 'Neurology is a branch of medicine dealing with disorders of the nervous system.')";

    if ($conn->multi_query($sql) === TRUE) {
        echo "New record created successfully";
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>