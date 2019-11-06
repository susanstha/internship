<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form validation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2>Simple Form Validation</h2>
            <div id="uname"></div>
            <div id="upwd"></div>
            <form name="myform" action="#">
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" id="name" class="form-control-file border" name="name">
                </div>
                <div class="form-group">
                    <label for="pwd">Password</label>
                    <input type="password" id="pwd" class="form-control-file border" name="password">
                </div>
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <button type="button" onclick="validateform()" class="btn btn-primary btn-outline-light">Submit</button>
                    </div>
                </div>
            </form>
        </div>
   </div> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    function validateform(){  
        var name=document.myform.name.value;  
        var password=document.myform.password.value;  
        
        if (name==null || name==""){  
            alert("Username can't be blank");  
            return false;  
        }
        else if(password.length<6){  
            alert("Password must be at least 6 characters long.");  
            return false;  
        }
        else{
            document.getElementById("uname").innerHTML = name;
            document.getElementById("upwd").innerHTML = password;
        }  
    } 

</script>
</body>
</html>