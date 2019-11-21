<?php
    include 'dataconn.php';
    $sql = "SELECT * FROM Department";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Department Name</th><th>Description</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["dept_id"]."</td><td>".$row["dept_name"]."</td><td>".$row["dept_description"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
?>