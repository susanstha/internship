<?php
    include 'dataconn.php';
        $stmt = $conn->prepare("UPDATE Student SET student_name = ?, student_address = ?, student_contact = ? WHERE student_id = ?");
        $stmt->bind_param("sssi", $sname, $address,$cnumber,$id);
        $sname = $_POST["sname"];
        $address = $_POST["address"];
        $cnumber = $_POST["cnumber"];
        $id = $_POST['id'];

        $stmt->execute();
    
        echo "New records updated successfully";
        $stmt->close();
        header("Location: dbformdb.php");

    $conn->close();
?>