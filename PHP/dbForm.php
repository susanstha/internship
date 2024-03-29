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
        <style>
                .error {color: #FF0000;}
        </style>
    </head>
    <body>

        <?php
                    $Err =  "";
                    $sname = $cnumber = $address = "";
            
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (empty($_POST["sname"])) {
                            $Err = "It is required";
                        } 
                        else {
                            $sname = test_input($_POST["sname"]);
                            // check if name only contains letters and whitespace
                            if (!preg_match("/^[a-zA-Z ]*$/",$sname)) {
                            $Err = "Only letters and white space allowed";
                            }
                        }
                        if (empty($_POST["address"])) {
                            $Err = "It is required";
                        } 
                        else {
                            $address = test_input($_POST["address"]);
                            // check if address only contains letters and whitespace
                            if (!preg_match("/^[a-zA-Z ]*$/",$address)) {
                            $Err = "Only letters and white space allowed";
                            }
                        }
                        if (empty($_POST["cnumber"])) {
                            $Err = "Name is required";
                        } 
                        else {
                            $cnumber = test_input($_POST["cnumber"]);
                            // check if number only contains numbers
                            if (!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/",$cnumber)) {
                            $Err = "Only letters and white space allowed";
                            }
                        }
                        
                    }
                    function test_input($data) {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }

        ?>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h2>PHP Form Submission</h2>
                <form method="POST" action="dbformdb.php">
                    <div class="form-group">
                        <label for="sname">Student Name</label>
                        <input type="text" id="sname" class="form-control-file border" name="sname" placeholder="Enter your Name">
                        <span class="error">* <?php echo $Err;?></span>
                    </div>
                    <div class="form-group">
                        <label for="cnumber">Contact Number</label>
                        <input type="tel" id="cnumber" class="form-control-file border" name="cnumber" placeholder="Enter your current contact number">
                        <span class="error">* <?php echo $Err;?></span>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" class="form-control-file border" placeholder="Enter your current address" name="address">
                        <span class="error">* <?php echo $Err;?></span>
                    </div>
                    <button type="submit" value="Submit" name="submit" class="btn btn-primary btn-outline-light">Submit</button>        
                </form>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>