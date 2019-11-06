<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Greater number finder</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2>Greater number finder</h2>
            <form action="">
                <div class="form-group">
                    <label for="firstnumber">First Number</label>
                    <input type="number" id="firstnumber" class="form-control-file border" name="firstnumber">
                </div>
                <div class="form-group">
                    <label for="secondnumber">Second Number</label>
                    <input type="number" id="secondnumber" class="form-control-file border" name="secondnumber">
                </div>
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <button onclick="check()" type="button" class="btn btn-danger btn-outline-light">Check</button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="answer">Result </label>
                    <input type="number" id="answer" class="form-control-file border" placeholder="Displays the greater number" name="result">
                </div>
            </form>
        </div>
   </div> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    function check(){
        var a,b,c;
        a=Number(document.getElementById("firstnumber").value);
        b=Number(document.getElementById("secondnumber").value);
        if (a < b) {
            c= b;
        } 
        else {
            c= a;
        }
        document.getElementById("answer").value= c;
    }
    </script>
</body>
</html>