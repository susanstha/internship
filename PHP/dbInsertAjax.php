<!DOCTYPE HTML>  
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> PHP Form AJAX</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h2>PHP Form Submission</h2>
                <form id="studentform" method="POST" action="dbInsertAjax.php">
                    <div class="form-group">
                        <label for="sname">Student Name</label>
                        <input type="text" id="sname" class="form-control-file border" name="sname" placeholder="Enter your Name">
                    </div>
                    <div class="form-group">
                        <label for="cnumber">Contact Number</label>
                        <input type="tel" id="cnumber" class="form-control-file border" name="cnumber" placeholder="Enter your current contact number">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" class="form-control-file border" placeholder="Enter your current address" name="address">
                    </div>
                    <button type="submit" value="Submit" name="submit" class="btn btn-primary btn-outline-light">Submit</button>        
                </form>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#studentform').submit(function(e) {
                    e.preventDefault();
                    var sname = $('#sname').val();
                    var cnumber = $('#cnumber').val();
                    var address = $('#address').val();
                    $.ajax({
                        type: "POST",
                        url: 'dbInsertAjaxsave.php',
                        data: {sname:sname,cnumber:cnumber,address:address},
                        success: function(data) {
                            alert("Data stored successfully");
                            location.replace("dbInsertAjaxsave.php");

                        }
                    });
                });
            });
        </script>
    </body>
</html>