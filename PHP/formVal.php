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
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["name"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
                }
            }
            
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
                }
            }
                
            if (empty($_POST["website"])) {
                $website = "";
            } else {
                $website = test_input($_POST["website"]);
                // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                $websiteErr = "Invalid URL";
                }
            }

            if (empty($_POST["comment"])) {
                $comment = "";
            } else {
                $comment = test_input($_POST["comment"]);
            }

            if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
            } else {
                $gender = test_input($_POST["gender"]);
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
                        <label for="website">Website</label>
                        <input type="text" id="website" class="form-control-file border" name="name" value="<?php echo $website;?>">
                        <span class="error">* <?php echo $websiteErr;?></span>
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <textarea class="form-control" placeholder="Enter qualification and specialization" id="comment" rows="3" rows="10"><?php echo $comment;?></textarea>
                    </div>
                    <fieldset class="form-group">
                        <legend class="col-form-label">Gender</legend>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="female" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="male" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="gender" id="other" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">
                            <label class="form-check-label" for="other">Others</label>
                        </div>
                        <span class="error">* <?php echo $genderErr;?></span>
                    </fieldset>
                    <button type="submit" value="Submit" class="btn btn-primary btn-outline-light">Submit</button>        
                </form>
            </div>
        </div>  

        <?php
        // echo "<h2>Your Input:</h2>";
        // echo $name;
        // echo "<br>";
        // echo $email;
        // echo "<br>";
        // echo $website;
        // echo "<br>";
        // echo $comment;
        // echo "<br>";
        // echo $gender;
        ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>