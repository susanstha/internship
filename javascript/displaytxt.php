<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2>The text typed will be displayed</h2>
            <form action="">
                <div class="form-group">
                    <label for="text"> Input text here</label>
                    <textarea class="form-control-file border" id="text" rows="3" rows="10"></textarea>
                </div>
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <button onclick="show()" type="button" class="btn btn-primary btn-outline-light">Run</button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="display">Display</label>
                    <input type="text" id="display" class="form-control-file border" name="result">
                </div>
            </form>
        </div>
   </div> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script> 
        function show() {       
            var n
            n  = document.getElementById("text").value;
            document.getElementById("display").value = n;
        }
    </script>
</body>
</html>
