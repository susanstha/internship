<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/hospitaladmin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Admin</title>
</head>
<body>
          <!-- navbar -->
  <div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark static-top">
      <a class="navbar-brand logo" href="#">
              HMS
      </a>
      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
          <form class="form-inline" action="#">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-success" type="submit">Search</button>
          </form>
          &nbsp;
          &nbsp;
          <li class="nav-item dropdown">
            <a class="nav-link btn btn-primary dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
               Mr. Admin
            </a>
            <div class="dropdown-menu bg-dark">
              <a class="dropdown-item" href="#">Dashboard</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Logout</a>
            </div>
            </li> 
        </ul>
      </div>  
    </nav>
  </div>
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="hospitaladmin.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hospitaldept.php">
          <i class="fas fa-sitemap"></i>
          <span>Departments</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="docDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-md"></i>
          <span>Doctors</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="docDropdown">
          <a class="dropdown-item" href="hospitaldoclist.php">List of Doctors</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="hospitaldoctrt.php">Treatment History</a>
        </div>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="scheduleDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-calendar-check"></i>
            <span>Schedules</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="scheduleDropdown">
            <a class="dropdown-item" href="hospitalsch.php">All schedules of the day</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="hospitalschholiday.php">Holidays</a>
          </div>
        </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="patientsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-injured"></i>
          <span>Patients</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="patientsDropdown">
          <a class="dropdown-item" href="hospitalpatientlist.php">List of Patients</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="hospitalpatientcase.php">Patient Cases</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Add Patients</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="appointmentsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-stethoscope"></i>
          <span>Appointments</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="appointmentsDropdown">
          <a class="dropdown-item" href="hospitalappoint.php">All Appointments</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Today's Appointments</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Upcoming Appointments</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Add Appointments</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hospitalprescription.php">
          <i class="fas fa-prescription"></i>
          <span>Prescriptions</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="labtestDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-notes-medical"></i>
          <span>Lab Test</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="labtestDropdown">
          <a class="dropdown-item" href="hospitallabtest.php">Lab Reports</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Add Lab Reports</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="medicineDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-briefcase-medical"></i>
          <span>Medicine</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="medicineDropdown">
          <a class="dropdown-item" href="hospitalmedicine.php">Medicine List</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Add Medicine</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="donorDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-friends"></i>
          <span>Donor</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="donorDropdown">
          <a class="dropdown-item" href="hospitaldonor.php">List of Donors</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="hospitalbloodbank.php">Blood Bank</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Add Donors</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="bedDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bed"></i>
          <span>Beds</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="bedDropdown">
          <a class="dropdown-item" href="hospitalbedlist.php">List of Bed</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="hospitalbedallotment.php">Bed Allotment</a>
        </div>
        </li>
    </ul>
    <div id="content-wrapper">
      <!-- cards -->
      <div class="row">
        <div class="col-xl-3 col-sm-6">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-user-md"></i>
              </div>
              <div class="mr-5"><h2>Doctors</h2></div>
            </div>
            <a class="card-footer bg-dark text-white clearfix small z-1 stretched-link" href="hospitaldoclist.php">
              <span class="float-left"><h4>8</h4></span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-user-injured"></i>
              </div>
              <div class="mr-5"><h2>Patients</h2></div>
            </div>
            <a class="card-footer bg-dark text-white clearfix small z-1 stretched-link" href="hospitalpatientlist.php">
              <span class="float-left"><h4>24</h4></span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-stethoscope"></i>
              </div>
              <div class="mr-5"><h2>Appointment</h2></div>
            </div>
            <a class="card-footer bg-dark text-white clearfix small z-1 stretched-link" href="hospitalappoint.php">
              <span class="float-left"><h4>6</h4></span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-sitemap"></i>
              </div>
              <div class="mr-5"><h2>Departments</h2></div>
            </div>
            <a class="card-footer bg-dark text-white clearfix small z-1 stretched-link" href="hospitaldept.php">
              <span class="float-left"><h4>4</h4></span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>

      <div class="row" style=" margin-top: 30px;">
        <div class="col-xl-3 col-sm-6">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-calendar-check"></i>
              </div>
              <div class="mr-5"><h2>Schedules</h2></div>
            </div>
            <a class="card-footer bg-dark text-white clearfix small z-1 stretched-link" href="hospitalsch.php">
              <span class="float-left"><h4>View Details</h4></span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-briefcase-medical"></i>
              </div>
              <div class="mr-5"><h2>Medicines</h2></div>
            </div>
            <a class="card-footer bg-dark text-white clearfix small z-1 stretched-link" href="hospitalmedicine.php">
              <span class="float-left"><h4>View Details</h4></span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-user-friends"></i>
              </div>
              <div class="mr-5"><h2>Donors</h2></div>
            </div>
            <a class="card-footer bg-dark text-white clearfix small z-1 stretched-link" href="hospitaldonor.php">
              <span class="float-left"><h4>View Details</h4></span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-bed"></i>
              </div>
              <div class="mr-5"><h2>Beds</h2></div>
            </div>
            <a class="card-footer bg-dark text-white clearfix small z-1 stretched-link" href="hospitalbedlist.php">
              <span class="float-left"><h4>View Details</h4></span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>

      <div class="row" style=" margin-top: 50px;">
        <div class="col-xl-3 col-sm-6 text-center">
          <button type="button" class="btn btn-outline-light btn-success btn-block btn-lg">Add Patients</button>
        </div>
        <div class="col-xl-3 col-sm-6 text-center">
          <button type="button" class="btn btn-outline-light btn-danger btn-block btn-lg">Add Donor</button>
        </div>
        <div class="col-xl-3 col-sm-6 text-center">
          <button type="button" class="btn btn-outline-light btn-warning btn-block btn-lg">Add Doctor</button>
        </div>
        <div class="col-xl-3 col-sm-6 text-center">
          <button type="button" class="btn btn-outline-light btn-secondary btn-block btn-lg">Add Appointment</button>
        </div>

      </div>

    </div>
  </div>

  <div>
          <!-- Sticky Footer -->
    <footer class="sticky-footer">
      <div class="footer-copyright py-3 text-center">
      <span>Copyright © HMS 2019</span>
      </div>
    </footer>
  </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>    
    <script>
        $(document).ready(function() {
        // executes when HTML-Document is loaded and DOM is ready
        console.log("document is ready");
          

          $( ".card" ).hover(
          function() {
            $(this).addClass('shadow').css('cursor', 'pointer'); 
          }, function() {
            $(this).removeClass('shadow');
          }
        );
            
        });
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
          })(jQuery); // End of use strict
    </script>
</body>
</html>