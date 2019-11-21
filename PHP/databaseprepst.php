<?php
    include 'dataconn.php';
    $stmt = $conn->prepare("INSERT INTO Department(dept_name, dept_description) VALUES (?,?)");
    $stmt->bind_param("ss", $dept_name, $dept_description);

    $dept_name = "Oncology";
    $dept_description = "Oncology is a branch of medicine that deals with the prevention, diagnosis, and treatment of cancer.";
    $stmt->execute();

    echo "New records created successfully";

    $stmt->close();

    $conn->close();
?>