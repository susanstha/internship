<!DOCTYPE HTML>  
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> PHP Form Validation</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>

        <?php
            include 'dataconn.php';
            
            if (!empty($_GET['id'])){
                $id = $_GET['id'];
                $sql = "SELECT student_id FROM Student Where student_id = $id";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    $sql = "SELECT * FROM Student Where student_id = $id";
                    $result1 = $conn->query($sql);
                    $row = $result1->fetch_assoc();
                 }else{
                    echo "<h1>Your search result is not available in our database</h1>";
                 }
            }
        ?>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h2>PHP Form Submission</h2>
                <form method="POST" action="databaseUpdate.php">
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <div class="form-group">
                        <label for="sname">Student Name</label>
                        <input type="text" id="sname" class="form-control-file border" name="sname" placeholder="Enter your Name" 
                            value="<?php
                                        if (!empty($row)){
                                            echo $row['student_name'];
                                        }
                            ?>">
                    </div>
                    <div class="form-group">
                        <label for="cnumber">Contact Number</label>
                        <input type="tel" id="cnumber" class="form-control-file border" name="cnumber" placeholder="Enter your current contact number" 
                            value="<?php
                                    if (!empty($row)){
                                        echo $row['student_contact'];
                                    }
                                ?>">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" class="form-control-file border" placeholder="Enter your current address" name="address"
                            value="<?php
                                    if (!empty($row)){
                                        echo $row['student_address'];
                                    }
                                ?>">
                    </div>
                    <button type="submit" value="Update" name="submit" class="btn btn-primary btn-outline-light">Update</button>        
                </form>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="student.js"></script>

    </body>
</html>