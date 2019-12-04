<?php
    include 'dbOopConn.php';

    class DbSelect extends DbConn{

        public function select(){
            $sql = "SELECT * FROM mydb";
            $result = $this->connection()->query($sql);
            $numRows = $result->num_rows;
            
        if ($numRows > 0) {
            echo "<table><tr><th>ID</th><th>Student Name</th><th>Address</th><th>Contact</tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["student_id"]."</td><td>".$row["student_name"]."</td><td>".$row["student_address"]."</td><td>".$row["student_contact"]."</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
            
        }
    }
    $dbs = new DbSelect();
    $dbs->select();
?>