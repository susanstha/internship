<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Login</title>
    <style>
            body {font-family: Arial, Helvetica, sans-serif;}

            form {border: 3px solid #f1f1f1;}

            .intro{
                margin-top: 10%;
            }
            
            input[type=text], input[type=password] {
              width: 100%;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 1px solid #ccc;
              box-sizing: border-box;
            }
            
            button {
              background-color: #4CAF50;
              color: white;
              padding: 14px 20px;
              margin: 8px 0;
              border: none;
              cursor: pointer;
              width: 100%;
            }
            
            button:hover {
              opacity: 0.8;
            }
            
            .cancelbtn {
              width: auto;
              padding: 10px 18px;
              background-color: #f44336;
            }
            .container {
              padding: 16px;
            }
            
            span.psw {
              float: right;
              padding-top: 16px;
            }
            </style>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 intro">
                    <h1 class="display-2">Logo</h1>
                    <small>Hospital Management System</small>
                    <br>
                    <p>Lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
                </div>
                <div class="col-sm-7">
                    <h3>Log into <b>HMS</b></h3>
                    <h5>Enter login detail below</h5>
                        <form action="#" class="was-validated" method="POST">
                            <div class="container">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Username" name="uname" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Enter Password" name="psw" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="wrapper">
                                    <button type="submit" name="login">Login</button>
                                </div>
                                <label>
                                    <input type="checkbox" checked="checked" name="remember"> Remember me
                                </label>
                            </div>
                            <div class="container" style="background-color:#f1f1f1">
                                <button type="button" class="cancelbtn">Cancel</button>
                                <span class="psw">Forgot <a href="#">password?</a></span>
                            </div>
                        </form>
                </div>
            </div>

        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>