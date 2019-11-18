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
        $nameErr = $emailErr = $passwordErr =  "";
        $name = $email = $password = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } 
            else {
                $name = test_input($_POST["name"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
                }
            }
            
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } 
            else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
                }
            }

            if (empty($_POST["password"])) {
                $passwordErr = "Password is required";
            }
            else {
                $password = $_POST["password"];
                // check if password is well-formed
                if (strlen($_POST["password"]) <= '8') {
                    $passwordErr = "Your Password Must Contain At Least 8 Characters!";
                }
                elseif(!preg_match("#[0-9]+#",$password)) {
                    $passwordErr = "Your Password Must Contain At Least 1 Number!";
                }
                elseif(!preg_match("#[A-Z]+#",$password)) {
                    $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
                }
                elseif(!preg_match("#[a-z]+#",$password)) {
                    $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
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
                <h2>PHP Form Validation Example</h2>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" class="form-control-file border" name="name" value="<?php echo $name;?>">
                        <span class="error">* <?php echo $nameErr;?></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control-file border" name="email" value="<?php echo $email;?>">
                        <span class="error">* <?php echo $emailErr;?></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control-file border" name="password" value="<?php echo $password;?>">
                        <span class="error">* <?php echo $passwordErr;?></span>
                    </div>
                    <button type="submit" value="Submit" name="submit" class="btn btn-primary btn-outline-light">Submit</button>        
                </form>
            </div>
        </div>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <?php
                    echo "<h2>Your Input:</h2>";
                    echo $name;
                    echo "<br>";
                    echo $email;
                    echo "<br>";
                    echo $password;
                ?>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>