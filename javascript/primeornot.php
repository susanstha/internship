<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prime or not</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2>Prime or Nah</h2>
            <form action="">
                <div class="form-group">
                    <label for="number"> Enter a number</label>
                    <input type="text" id="number" class="form-control-file border" name="number">
                </div>
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <button onclick="test_prime()" type="button" class="btn btn-primary btn-outline-light">Check</button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="answer">Result </label>
                    <input type="text" id="answer" class="form-control-file border" name="result">
                </div>
            </form>
        </div>
   </div> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript"> 
        function test_prime() {       
            var n, i, flag = true; 
            n  =Number(document.getElementById("number").value);
            if (n===1){
                flag = false;
            }
            else if(n === 2){
                flag = true;
            }
            else{
                for(i = 2; i <= n - 1; i++) 
                    if (n % i == 0) { 
                        flag = false; 
                        break; 
                        }
            }         
            if (flag == true){
                document.getElementById("answer").value= (n + " is prime");
            }      
            else{
                document.getElementById("answer").value= (n + " is not prime");
            } 
            } 
    </script> 
</body>
</html>
