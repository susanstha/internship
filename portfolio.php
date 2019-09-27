<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/portfolio.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>My Portfolio</title>
</head>
<body class="bg-dark">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
      <a class="navbar-brand" href="#">
            Portfolio
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active imp">
                <a class="nav-link" href="#">About</a>
            </li>
            &nbsp;
            &nbsp;
            <li class="nav-item">
                <a class="nav-link" href="#">Portfolio</a>
            </li>
            &nbsp;
            &nbsp;
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li> 
            &nbsp;
            &nbsp;
            <li class="nav-item">
                <a class="nav-link btn btn-primary" href="#">Get Started</a>
            </li>  
          </ul>
        </div>  
    </nav>
    <div class="container-fluid" style="margin-top:80px; padding-top: 10px">
      <div class="row">
        <div class="col-sm-6 text-white">
          <p>
            Hi, I am
            <br>
            <em class="display-2"> 
              Susan
              <br>
              Shrestha
            </em>
            <br>
            <p>A bachelor student currently learning  <font color="black">PHP/Laravel</font>  as a internship program in <em>SOCHWARE</em></p>
            <i>Find me on</i>
            <br>
            <div>
              <a class="find-me" href="#">
                <i class="fab fa-linkedin"></i>
              </a>
              <a class="find-me" href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a class="find-me" href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a class="find-me" href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </div>
            <div>
              <button id="sub" type="button" name="Top">Hire Me</button>
              <button id="sub1" type="button" name="Top">Portfolio</button> 
            </div> 
          </p>
        </div>
      
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-10">
                <div>
                  <img src="static/images/op2.jpg" class="img-fluid rounded-circle" width="300" height="300" alt="">
                </div>
            </div>
            <div class="col-sm-2">
                <ul id="pagination" class="list-group list-group-flush">
                    <li class="list-group-item"><a class="page-link" href="#">1</a></li>
                    <li class="list-group-item"><a class="page-link" href="#">2</a></li>
                    <li class="list-group-item"><a class="page-link" href="#">3</a></li>
                    <li class="list-group-item"><a class="page-link" href="#">4</a></li>
                </ul> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid bot bg-secondary" style="margin-top:70px; padding-top: 10px">
      <div class="row">
        <div class="col-sm-7">
          <h1>About Me</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <button id="sub1" type="button" name="Top">Download CV</button> 
        </div>
        <div class="col-sm-5">
          <div>
            <img src="static/images/op1.jpg" class="img-fluid rounded-circle" width="300" height="300" alt="">
          </div>
          </div>
        </div>
      </div>
      <div class="container-fluid bg-secondary" style="margin-top:70px; padding-top: 10px">
        <div class="row">
          <div class="col-sm-9">
              <h1>Portfolio</h1>
          </div>
          <div class="col-sm-3">
              <button type="button" class="btn btn-dark round"><i class="fas fa-less-than"></i></button>
              <button type="button" class="btn btn-dark round"><i class="fas fa-greater-than"></i></button>
            </div>
        </div>
        <div>
        <a class="active portanch" href="#">All</a>
        <a class="portanch" href="#">Logo</a>
        <a class="portanch" href="#">Websites</a>
        <a class="portanch" href="#">Mobile Apps</a>
        </div>
        <div class="container-fluid bg-secondary" style="margin-top:10px; padding-top: 10px">
          <div class="row">
              <div class="col-sm-4">
                  <a data-toggle="modal" href="#myModal">
                      <img class="img-gap rounded" src="static/images/op.jpg" alt="One Piece Character/s" width="300px" height="200px">
                  </a>
                  <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <img src="static/images/op.jpg" alt="One Piece Character/s" width="200px" height="200px">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div> 
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col-sm-4">
                  <a data-toggle="modal" href="#myModal">
                      <img class="img-gap rounded" src="static/images/op.jpg" alt="One Piece Character/s" width="300px" height="200px">
                  </a>
                  <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <img src="static/images/op.jpg" alt="One Piece Character/s" width="200px" height="200px">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div> 
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col-sm-4">
                  <a data-toggle="modal" href="#myModal">
                      <img class="img-gap rounded" src="static/images/op.jpg" alt="One Piece Character/s" width="300px" height="200px">
                  </a>
                  <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <img src="static/images/op.jpg" alt="One Piece Character/s" width="200px" height="200px">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div> 
                      </div>
                    </div>
                  </div>
              </div>
            </div>
        </div>
      </div>
      <div class="container-fluid bg-secondary" style="margin-top:70px; padding-top: 10px">
        <h1 style="text-align: center">My Capabilities</h1>
        <p style="text-align: center">Lorem ipsum dolor sit amet, 
          consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <div class="row">
          <div class="col-sm-4">
              <i class="fas fa-layer-group webb"></i>
              <h2 class="txt">Web Design</h2>
              <p class="txt">Lorem ipsum dolor sit amet</p>
          </div>
          <div class="col-sm-4">
              <i class="fas fa-layer-group webb"></i>
              <h2 class="txt">Web Design</h2>
              <p class="txt">Lorem ipsum dolor sit amet</p>
          </div>
          <div class="col-sm-4">
              <i class="fas fa-layer-group webb"></i>
              <h2 class="txt">Web Design</h2>
              <p class="txt">Lorem ipsum dolor sit amet</p>
          </div>
        </div>
      </div>
      <div class="container-fluid bg-secondary" style="margin-top:70px; padding-top: 10px">
          <h1 style="text-align: center">What my client says</h1>
          <p style="text-align: center">Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <div class="row">
            <div class="col-sm-6">
                <img class="img-gap rounded" src="static/images/op3.jpg" alt="One Piece Character/s" width="300px" height="200px">  
            </div>
            <div class="col-sm-6">
              <p></p>
            </div>

          </div>
        </div>
</body>
</html>