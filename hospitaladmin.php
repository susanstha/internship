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
    <title>Admin</title>
    <style>
        #wrapper {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

#wrapper #content-wrapper {
  overflow-x: hidden;
  width: 100%;
  padding-top: 1rem;
  padding-bottom: 80px;
}
        .sidebar {
  width: 90px !important;
  background-color: #212529;
  min-height: calc(100vh - 56px);
}

.sidebar .nav-item:last-child {
  margin-bottom: 1rem;
}

.sidebar .nav-item .nav-link {
  text-align: center;
  padding: 0.75rem 1rem;
  width: 90px;
}

.sidebar .nav-item .nav-link span {
  font-size: 0.65rem;
  display: block;
}

.sidebar .nav-item .dropdown-menu {
  position: absolute !important;
  -webkit-transform: none !important;
  transform: none !important;
  left: calc(90px + 0.5rem) !important;
  margin: 0;
}

.sidebar .nav-item .dropdown-menu.dropup {
  bottom: 0;
  top: auto !important;
}

.sidebar .nav-item.dropdown .dropdown-toggle::after {
  display: none !important;
}

.sidebar .nav-item .nav-link {
  color: rgba(255, 255, 255, 0.5);
}

.sidebar .nav-item .nav-link:active, .sidebar .nav-item .nav-link:focus, .sidebar .nav-item .nav-link:hover {
  color: rgba(255, 255, 255, 0.75);
}

.sidebar.toggled {
  width: 0 !important;
  overflow: hidden;
}
@media (min-width: 768px) {
  .sidebar {
    width: 225px !important;
  }
  .sidebar .nav-item .nav-link {
    display: block;
    width: 100%;
    text-align: left;
    padding: 1rem;
    width: 225px;
  }
  .sidebar .nav-item .nav-link span {
    font-size: 1rem;
    display: inline;
  }
  .sidebar .nav-item .dropdown-menu {
    position: static !important;
    margin: 0 1rem;
    top: 0;
  }

  .sidebar.toggled {
    overflow: visible;
    width: 90px !important;
  }
  .sidebar.toggled .nav-item:last-child {
    margin-bottom: 1rem;
  }
  .sidebar.toggled .nav-item .nav-link {
    text-align: center;
    padding: 0.75rem 1rem;
    width: 90px;
  }
  .sidebar.toggled .nav-item .nav-link span {
    font-size: 0.65rem;
    display: block;
  }
  .sidebar.toggled .nav-item .dropdown-menu {
    position: absolute !important;
    -webkit-transform: none !important;
    transform: none !important;
    left: calc(90px + 0.5rem) !important;
    margin: 0;
  }
  .sidebar.toggled .nav-item .dropdown-menu.dropup {
    bottom: 0;
    top: auto !important;
  }
  .sidebar.toggled .nav-item.dropdown .dropdown-toggle::after {
    display: none;
  }
}

/* .dropdown-toggle {
  white-space: nowrap;
  position: relative;
}

.dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent;
}

.dropdown-toggle:empty::after {
  margin-left: 0;
} */
.dropdown.is-expanded .dropdown-indicator{
    transform: rotate(90deg);
}
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0.125rem 0 0;
  font-size: 1rem;
  color: #212529;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem;
}


footer.sticky-footer {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  position: absolute;
  right: 0;
  bottom: 0;
  width: calc(100% - 90px);
  height: 80px;
  background-color: #e9ecef;
}

footer.sticky-footer .copyright {
  line-height: 1;
  font-size: 0.8rem;
}
@media (min-width: 768px) {
  footer.sticky-footer {
    width: calc(100% - 225px);
  }
}

body.sidebar-toggled footer.sticky-footer {
  width: 100%;
}

@media (min-width: 768px) {
  body.sidebar-toggled footer.sticky-footer {
    width: calc(100% - 90px);
  }
}

    </style>
</head>
<body id="page-top">
    <div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark static-top">
            <a class="navbar-brand" href="#">
                    Logo
            </a>
            <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
                <i class="fas fa-bars"></i>
              </button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto test">
                    <li class="nav-item active imp">
                        <a class="nav-link" href="#aboutme">Home</a>
                    </li>
                    &nbsp;
                    &nbsp;
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">About Us</a>
                    </li>
                    &nbsp;
                    &nbsp;
                    <li class="nav-item">
                        <a class="nav-link" href="#hireme">Contact</a>
                    </li> 
                    &nbsp;
                    &nbsp;
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary" href="#">Logout</a>
                    </li>  
                </ul>
            </div>  
        </nav>
    </div>
    <div id="wrapper">
    <div>
            <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
            <!-- <i class="fa fa-caret-down"></i> -->
            <i class="dropdown-indicator fa fa-angle-right"></i>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="#">Login</a>
            <a class="dropdown-item" href="#">Register</a>
            <a class="dropdown-item" href="#">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="#">404 Page</a>
            <a class="dropdown-item" href="#">Blank Page</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
        </li>
      </ul>
    </div>
    

    
      <!-- Sticky Footer -->
    <footer class="sticky-footer">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
            </div>
        </div>
    </footer>
    </div>
</div>
    
       
    

    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>    
    <script>
        (function($) {
  "use strict"; // Start of use strict

  // Toggle the side navigation
  $("#sidebarToggle").on('click', function(e) {
    e.preventDefault();
    $("body").toggleClass("sidebar-toggled");
    $(".sidebar").toggleClass("toggled");
  });

  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
    if ($(window).width() > 768) {
      var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
      this.scrollTop += (delta < 0 ? 1 : -1) * 30;
      e.preventDefault();
    }
  });

  // Scroll to top button appear
  $(document).on('scroll', function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

  // Smooth scrolling using jQuery easing
  $(document).on('click', 'a.scroll-to-top', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    event.preventDefault();
  });

})(jQuery); // End of use strict



    </script>
</body>
</html>