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
          <ul class="navbar-nav ml-auto test">
            <li class="nav-item active imp">
                <a class="nav-link" href="#aboutme">About</a>
            </li>
            &nbsp;
            &nbsp;
            <li class="nav-item">
                <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
            &nbsp;
            &nbsp;
            <li class="nav-item">
                <a class="nav-link" href="#hireme">Contact</a>
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
              <a href="#hireme">
                <button id="sub" type="button" name="Top">Hire Me</button>
              </a>
              <a href="#portfolio">
                <button id="sub1" type="button" name="Top">Portfolio</button> 
              </a>
            </div> 
          </p>
        </div>
      
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-10">
                <div>
                  <img src="static/images/op2.jpg" class="img-fluid rounded-circle responsive" width="300" height="300" alt="">
                </div>
            </div>
            <div class="col-sm-2">
                <ul id="pagination" class="list-group list-group-flush">
                    <li class="list-group-item"><a class="page-link" href="#aboutme">1</a></li>
                    <li class="list-group-item"><a class="page-link" href="#portfolio">2</a></li>
                    <li class="list-group-item"><a class="page-link" href="#capabilities">3</a></li>
                    <li class="list-group-item"><a class="page-link" href="#clientopinion">4</a></li>
                </ul> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-secondary" style="margin-top:70px; padding-top: 10px">
      <a name="aboutme"></a>
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
            <img src="static/images/op1.jpg" class="img-fluid rounded-circle responsive" width="300" height="300" alt="">
          </div>
          </div>
        </div>
    </div>
    <div class="container-fluid bg-secondary" style="margin-top:70px; padding-top: 10px">
      <a name="portfolio"></a>
      <div class="row">
        <div class="col-sm-9">
            <h1>Portfolio</h1>
        </div>
        <div class="col-sm-3">
            <button type="button" class="btn btn-dark round"><i class="fas fa-greater-than"></i></button>
            <button type="button" class="btn btn-dark round"><i class="fas fa-less-than"></i></button>
          </div>
      </div>
      <div class="navv">
      <a class="active portanch" href="#">All</a>
      <a class="portanch" href="#">Logo</a>
      <a class="portanch" href="#">Websites</a>
      <a class="portanch" href="#">Mobile Apps</a>
      </div>
      <div class="container-fluid bg-secondary" style="margin-top:10px; padding-top: 10px">
        <div class="row">
            <div class="col-sm-4">
                <a data-toggle="modal" href="#myModal">
                    <img class="img-gap rounded responsive" src="static/images/op.jpg" alt="One Piece Character/s" width="300px" height="400px">
                </a>
                <div class="modal fade" id="myModal">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content bg-dark">
                      <div class="modal-header">
                        <img src="static/images/op.jpg" alt="One Piece Character/s" width="200px" height="200px">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body foot">
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
                    <img class="img-gap rounded responsive" src="static/images/op.jpg" alt="One Piece Character/s" width="300px" height="400px">
                </a>
                <div class="modal fade" id="myModal">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content bg-dark">
                      <div class="modal-header">
                        <img src="static/images/op.jpg" alt="One Piece Character/s" width="200px" height="200px">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body foot">
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
                    <img class="img-gap rounded responsive" src="static/images/op.jpg" alt="One Piece Character/s" width="300px" height="400px">
                </a>
                <div class="modal fade" id="myModal">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content bg-dark">
                      <div class="modal-header">
                        <img src="static/images/op.jpg" alt="One Piece Character/s" width="200px" height="200px">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body foot">
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
      <a name="capabilities"></a>
      <h1 style="text-align: center">My Capabilities</h1>
      <p style="text-align: center">Lorem ipsum dolor sit amet, 
        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>
      <div class="row">
        <div class="col-sm-4">
            <i class="fas fa-layer-group webb"></i>
            <h2 class="txt">Web Design</h2>
            <p class="txt">Lorem ipsum dolor sit amet</p>
            <br>
            <i class="fas fa-layer-group webb"></i>
            <h2 class="txt">Web Design</h2>
            <p class="txt">Lorem ipsum dolor sit amet</p>
        </div>
        <div class="col-sm-4">
            <i class="fas fa-layer-group webb"></i>
            <h2 class="txt">Web Design</h2>
            <p class="txt">Lorem ipsum dolor sit amet</p>
            <br>
            <i class="fas fa-layer-group webb"></i>
            <h2 class="txt">Web Design</h2>
            <p class="txt">Lorem ipsum dolor sit amet</p>
        </div>
        <div class="col-sm-4">
            <i class="fas fa-layer-group webb"></i>
            <h2 class="txt">Web Design</h2>
            <p class="txt">Lorem ipsum dolor sit amet</p>
            <br>
            <i class="fas fa-layer-group webb"></i>
            <h2 class="txt">Web Design</h2>
            <p class="txt">Lorem ipsum dolor sit amet</p>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-secondary" style="margin-top:70px; padding-top: 10px">
      <a name="clientopinion"></a>
      <h1 style="text-align: center">What my client says</h1>
      <p style="text-align: center">Lorem ipsum dolor sit amet, 
        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>
      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-sm-6">
                  <img class="img-gap rounded responsive" src="static/images/op3.jpg" alt="One Piece Character/s" width="400px" height="400px">
              </div>
              <div class="col-sm-6">
                <blockquote class="blockquote">
                  <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                  </p>
                  <footer class="blockquote-footer"><font color="white">- Lightening God Enel <br> &nbsp; &nbsp; Anti-Protagonist </font></footer>
                </blockquote>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-sm-6">
                  <img class="img-gap rounded responsive" src="static/images/op3.jpg" alt="One Piece Character/s" width="400px" height="400px">
              </div>
              <div class="col-sm-6">
                <blockquote class="blockquote">
                  <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                  </p>
                  <footer class="blockquote-footer"><font color="white">- Lightening God Enel <br> &nbsp; &nbsp; Anti-Protagonist </font></footer>
                </blockquote>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-sm-6">
                  <img class="img-gap rounded responsive" src="static/images/op3.jpg" alt="One Piece Character/s" width="400px" height="400px">
              </div>
              <div class="col-sm-6">
                <blockquote class="blockquote">
                  <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                  </p>
                  <footer class="blockquote-footer"><font color="white">- Lightening God Enel <br> &nbsp; &nbsp; Anti-Protagonist </font></footer>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
    </div>
  </div>
  <div class="container-fluid bg-secondary" style="margin-top:70px; padding-top: 10px">
    <div style="margin-top: 30px">
      <a name="hireme"></a>
      <h1 style="text-align: center">Lets Make Something <br> Great Together</h1>
      <p style="text-align: center">Lorem ipsum dolor sit amet, 
        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>
      <div class="container">
        <form action="#" class="was-validated">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="Name" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group">
                <input type="tel" class="form-control" placeholder="Phone number" name="Number" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="Email" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group">
                <input type="number" class="form-control" placeholder="Amount" name="Amount" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea type="text" class="form-control" placeholder="Message" name="Message" required cols="10" rows="5"></textarea>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="wrapper">
            <button id="sub" type="button" name="Top">Hire Me</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-dark text-center" style="margin-bottom:0; margin-top:70px; padding-top: 10px">
    <div class="foot" style="margin-top: 30px">
      <h1>Portfolio</h1>
      <br>
      <h3>About | Portfolio | Contact</h3>
      <h4>NP/ +977-123 456 7890/ susan@gmail.com</h4>
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
      <hr>
      <h4>Copy right: &copy; susanstha | All rights reserved</h4>
    </div>
  </div>
</body>
</html>