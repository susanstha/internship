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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Medicine List</title>
</head>
<body>
          <!-- navbar -->
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
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="hospitaladmin.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item active">
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
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-8">
                        <h3>List of Medicines</h3>
                    </div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addmed">Add new</button>
                        <div class="modal fade bd-example-modal-lg" id="addmed" tabindex="-1" role="dialog" aria-labelledby="deptModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deptModalLabel">Add Medicine</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div>
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group ">
                                                            <label for="medname">Name</label>
                                                            <input type="text" id="medname" name="medname" placeholder="Medicine Name" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="medcategory">Category</label>
                                                            <select class="form-control" id="medcategory" name="medcategory">
                                                                <option>Antipyretics</option>
                                                                <option>Antimalarial</option>
                                                                <option>Analgesics</option>
                                                                <option>Antibiotics</option>
                                                                <option>Antiseptics</option>
                                                                <option>Mood Stabilizers</option>
                                                                <option>Hormone replacements</option>
                                                                <option>Stimulants</option>
                                                                <option>Tranquilizers</option>
                                                                <option>Statins</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="medstorebox">Store Box</label>
                                                            <input type="text" id="medstorebox" name="medstorebox" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="medpurchase">Purchase Price</label>
                                                            <input type="text" id="medpurchase" name="medpurchase" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="medsales">Sales Price</label>
                                                            <input type="text" id="medsales" name="medsales" class="form-control">                                                
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="medquantity">Quantity</label>
                                                            <input type="text" id="medquantity" name="medquantity" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="medcompany">Company</label>
                                                            <input type="text" id="medcompany" name="medcompany" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="medgname">Generic Name</label>
                                                            <input type="text" id="medgname" name="medgname" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="medeffects">Effects</label>
                                                            <textarea class="form-control" id="medeffects" rows="3" rows="10"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="medexpire">Expiry Date</label>
                                                            <input type="date" id="medexpire" name="medexpire" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary mr-auto">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <table id="med_list" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Store Box</th>
                                    <th>Purchase Price</th>
                                    <th>Sales Price</th>
                                    <th>Quantity</th>
                                    <th>Company</th>
                                    <th>Generic Name</th>
                                    <th>Effects</th>
                                    <th>Expiry Date</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>____ __ __</td>
                                    <td>_____</td>
                                    <td>_____</td>
                                    <td>____ __ __</td>
                                    <td>_____</td>
                                    <td>_____</td>
                                    <td>_____</td>
                                    <td>_____</td>
                                    <td>____ __ __</td>
                                    <td>_____</td>
                                    <td>_____</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addmed"><i class="fas fa-edit fa-xs"></i></button>
                                        <div class="modal fade bd-example-modal-lg" id="addmed" tabindex="-1" role="dialog" aria-labelledby="deptModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deptModalLabel">Edit Medicine</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div>
                                                    <form action="" method="POST" enctype="multipart/form-data">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div class="form-group ">
                                                                    <label for="medname">Name</label>
                                                                    <input type="text" id="medname" name="medname" placeholder="Medicine Name" class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="medcategory">Category</label>
                                                                    <select class="form-control" id="medcategory" name="medcategory">
                                                                        <option>Antipyretics</option>
                                                                        <option>Antimalarial</option>
                                                                        <option>Analgesics</option>
                                                                        <option>Antibiotics</option>
                                                                        <option>Antiseptics</option>
                                                                        <option>Mood Stabilizers</option>
                                                                        <option>Hormone replacements</option>
                                                                        <option>Stimulants</option>
                                                                        <option>Tranquilizers</option>
                                                                        <option>Statins</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="medstorebox">Store Box</label>
                                                                    <input type="text" id="medstorebox" name="medstorebox" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="medpurchase">Purchase Price</label>
                                                                    <input type="text" id="medpurchase" name="medpurchase" class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="medsales">Sales Price</label>
                                                                    <input type="text" id="medsales" name="medsales" class="form-control">                                                
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="medquantity">Quantity</label>
                                                                    <input type="text" id="medquantity" name="medquantity" class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="medcompany">Company</label>
                                                                    <input type="text" id="medcompany" name="medcompany" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="medgname">Generic Name</label>
                                                                    <input type="text" id="medgname" name="medgname" class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="medeffects">Effects</label>
                                                                    <textarea class="form-control" id="medeffects" rows="3" rows="10"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="medexpire">Expiry Date</label>
                                                                    <input type="date" id="medexpire" name="medexpire" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary mr-auto">Submit</button>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash fa-xs"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>____ __ __</td>
                                    <td>_____</td>
                                    <td>_____</td>
                                    <td>____ __ __</td>
                                    <td>_____</td>
                                    <td>_____</td>
                                    <td>_____</td>
                                    <td>_____</td>
                                    <td>____ __ __</td>
                                    <td>_____</td>
                                    <td>_____</td>
                                    <td>
                                    <button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-edit fa-xs"></i></button>
                                    <button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-trash fa-xs"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Store Box</th>
                                    <th>Purchase Price</th>
                                    <th>Sales Price</th>
                                    <th>Quantity</th>
                                    <th>Company</th>
                                    <th>Generic Name</th>
                                    <th>Effects</th>
                                    <th>Expiry Date</th>
                                    <th>Options</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
        <!-- Sticky Footer -->
  <footer class="sticky-footer">
    <div class="footer-copyright py-3 text-center">
    <span>Copyright © HMS 2019</span>
    </div>
  </footer>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>    
    <script>
      $(document).ready(function() {
    $('#med_list').DataTable({     
      "scrollY": "200px",
      "scrollCollapse": true,
      "paging": false,
      "scrollX": true
                      });
                        } );
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