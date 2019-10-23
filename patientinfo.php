<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="static/css/portfolio.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <title>Patient Info</title>
    <style>
            /* Style the tab */
            .tab {
              overflow: hidden;
              border: 1px solid #ccc;
              background-color: #f1f1f1;
            }
            
            /* Style the buttons inside the tab */
            .tab button {
              background-color: inherit;
              float: left;
              border: none;
              outline: none;
              cursor: pointer;
              padding: 14px 16px;
              transition: 0.3s;
              font-size: 17px;
            }
            
            /* Change background color of buttons on hover */
            .tab button:hover {
              background-color: #ddd;
            }
            
            /* Create an active/current tablink class */
            .tab button.active {
              background-color: #ccc;
            }
            
            /* Style the tab content */
            .tabcontent {
              display: none;
              padding: 6px 12px;
              border: 1px solid #ccc;
              border-top: none;
            }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="#">
                Logo
        </a>
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
    <div>
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h1>Patient Id: XXXXX</h1>
                <div class="row">
                    <div class="col-sm-4">
                        <h3>Full Name: FN MN LN</h3>
                        <h3>DOB: ____ __ __</h3>
                        <h3>SEX: _</h3>
                        <h3>Blood Group: ___</h3>
                        <h3>Address: __________</h3>
                        <h3>Contact No.: __________</h3>
                        <h3>Email: _________________</h3>
                    </div>
                    <div class="col-sm-4">
                        <h3>Date Of Entry: ____ __ __</h3>
                        <h3>Cause Of Entry: __________</h3>
                        <h3>Department Assigned: ________</h3>
                        <h3>Doctor Assigned: __________</h3>
                        <h3>Patient Type: __________</h3>
                        <h3>Assigned Bed No.: _________</h3>
                    </div>
                    <div class="col-sm-4">
                        <img src="static/images/op2.jpg" class="img-fluid rounded-circle responsive" width="200" height="200" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <div>
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                            <a class="nav-item nav-link" id="nav-appointment-tab" data-toggle="tab" href="#nav-appointment" role="tab" aria-controls="nav-appointment" aria-selected="false">Appointment</a>
                            <a class="nav-item nav-link" id="nav-history-tab" data-toggle="tab" href="#nav-history" role="tab" aria-controls="nav-history" aria-selected="false">History</a>
                            <a class="nav-item nav-link" id="nav-diagnosis-tab" data-toggle="tab" href="#nav-diagnosis" role="tab" aria-controls="nav-diagnosis" aria-selected="false">Diagnosis</a>
                            <a class="nav-item nav-link" id="nav-medication-tab" data-toggle="tab" href="#nav-medication" role="tab" aria-controls="nav-medication" aria-selected="false">Medication</a>
                            <a class="nav-item nav-link" id="nav-billings-tab" data-toggle="tab" href="#nav-billings" role="tab" aria-controls="nav-billings" aria-selected="false">Billings</a>
                        </div>
                    </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <h5>Here you can find physical detail of patients</h5>
                                    <table id="physical_det" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Height</th>
                                                <th>Weight</th>
                                                <th>Blood Pressure</th>
                                                <th>Pulse</th>
                                                <th>Temperature</th>
                                                <th>Allergy</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                            </tr>
                                            <tr>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                            </tr>
                                            <tr>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                            </tr>
                                            <tr>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                            </tr>
                                            <tr>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                            </tr>
                                            <tr>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                            </tr>
                                            <tr>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                            </tr>
                                            <tr>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                            </tr>
                                            <tr>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                            </tr>
                                            <tr>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Date</th>
                                                <th>Height</th>
                                                <th>Weight</th>
                                                <th>Blood Pressure</th>
                                                <th>Pulse</th>
                                                <th>Temperature</th>
                                                <th>Allergy</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                            </div>
                            <div class="tab-pane fade" id="nav-appointment" role="tabpanel" aria-labelledby="nav-appointment-tab">
                                <h5>Here you can find list of your appointments</h5>
                                <table id="appoint" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>S.N</th>
                                                <th>Appointment Date</th>
                                                <th>Department name</th>
                                                <th>Doctor name</th>
                                                <th>Follow up By</th>
                                                <th>Follow up on</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>S.N</th>
                                                <th>Appointment Date</th>
                                                <th>Department name</th>
                                                <th>Doctor name</th>
                                                <th>Follow up By</th>
                                                <th>Follow up on</th>
                                            </tr>
                                        </tfoot>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-history" role="tabpanel" aria-labelledby="nav-history-tab">
                                <h5>Here are your previous history</h5>
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-opthalmology-tab" data-toggle="tab" href="#nav-opthalmology" role="tab" aria-controls="nav-opthalmology" aria-selected="true">Opthalmology</a>
                                        <a class="nav-item nav-link" id="nav-gynaecology-tab" data-toggle="tab" href="#nav-gynaecology" role="tab" aria-controls="nav-gynaecology" aria-selected="false">Gynaecology</a>
                                        <a class="nav-item nav-link" id="nav-neurology-tab" data-toggle="tab" href="#nav-neurology" role="tab" aria-controls="nav-neurology" aria-selected="false">Neurology</a>
                                        <a class="nav-item nav-link" id="nav-radiology-tab" data-toggle="tab" href="#nav-radiology" role="tab" aria-controls="nav-radiology" aria-selected="false">Radiology</a>
                                        <a class="nav-item nav-link" id="nav-pathology-tab" data-toggle="tab" href="#nav-pathology" role="tab" aria-controls="nav-pathology" aria-selected="false">Pathology</a>
                                        <a class="nav-item nav-link" id="nav-cardiology-tab" data-toggle="tab" href="#nav-cardiology" role="tab" aria-controls="nav-cardiology" aria-selected="false">Cardiology</a>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-opthalmology" role="tabpanel" aria-labelledby="nav-opthalmology-tab">
                                            <h5>Your opthalmological history are here</h5>
                                            <table id="h-opthalmology" class="display" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>S.N</th>
                                                            <th>Date</th>
                                                            <th>Doctor name</th>
                                                            <th>Investigation</th>
                                                            <th>Diagnosis</th>
                                                            <th>Remarks</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>S.N</th>
                                                            <th>Date</th>
                                                            <th>Doctor name</th>
                                                            <th>Investigation</th>
                                                            <th>Diagnosis</th>
                                                            <th>Remarks</th>
                                                        </tr>
                                                    </tfoot>
                                            </table>
                                    </div>
                                    <div class="tab-pane fade" id="nav-gynaecology" role="tabpanel" aria-labelledby="nav-gynaecology-tab">
                                            <h5>Your gynaecological history are here</h5>
                                            <table id="h-gynaecology" class="display" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>S.N</th>
                                                            <th>Date</th>
                                                            <th>Doctor name</th>
                                                            <th>Investigation</th>
                                                            <th>Diagnosis</th>
                                                            <th>Remarks</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>S.N</th>
                                                            <th>Date</th>
                                                            <th>Doctor name</th>
                                                            <th>Investigation</th>
                                                            <th>Diagnosis</th>
                                                            <th>Remarks</th>
                                                        </tr>
                                                    </tfoot>
                                            </table>
                                    </div>
                                    <div class="tab-pane fade" id="nav-neurology" role="tabpanel" aria-labelledby="nav-neurology-tab">
                                            <h5>Your neurological history are here</h5>
                                            <table id="h-neurology" class="display" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>S.N</th>
                                                            <th>Date</th>
                                                            <th>Doctor name</th>
                                                            <th>Investigation</th>
                                                            <th>Diagnosis</th>
                                                            <th>Remarks</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>S.N</th>
                                                            <th>Date</th>
                                                            <th>Doctor name</th>
                                                            <th>Investigation</th>
                                                            <th>Diagnosis</th>
                                                            <th>Remarks</th>
                                                        </tr>
                                                    </tfoot>
                                            </table>
                                    </div>
                                    <div class="tab-pane fade" id="nav-radiology" role="tabpanel" aria-labelledby="nav-radiology-tab">
                                            <h5>Your radiological history are here</h5>
                                            <table id="h-radiology" class="display" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>S.N</th>
                                                            <th>Date</th>
                                                            <th>Doctor name</th>
                                                            <th>Investigation</th>
                                                            <th>Diagnosis</th>
                                                            <th>Remarks</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>S.N</th>
                                                            <th>Date</th>
                                                            <th>Doctor name</th>
                                                            <th>Investigation</th>
                                                            <th>Diagnosis</th>
                                                            <th>Remarks</th>
                                                        </tr>
                                                    </tfoot>
                                            </table>
                                    </div>
                                    <div class="tab-pane fade" id="nav-pathology" role="tabpanel" aria-labelledby="nav-pathology-tab">
                                            <h5>Your pathological history are here</h5>
                                            <table id="h-pathology" class="display" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>S.N</th>
                                                            <th>Date</th>
                                                            <th>Doctor name</th>
                                                            <th>Investigation</th>
                                                            <th>Diagnosis</th>
                                                            <th>Remarks</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>S.N</th>
                                                            <th>Date</th>
                                                            <th>Doctor name</th>
                                                            <th>Investigation</th>
                                                            <th>Diagnosis</th>
                                                            <th>Remarks</th>
                                                        </tr>
                                                    </tfoot>
                                            </table>
                                    </div>
                                    <div class="tab-pane fade" id="nav-cardiology" role="tabpanel" aria-labelledby="nav-cardiology-tab">
                                            <h5>Your cardiological history are here</h5>
                                            <table id="h-cardiology" class="display" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>S.N</th>
                                                            <th>Date</th>
                                                            <th>Doctor name</th>
                                                            <th>Investigation</th>
                                                            <th>Diagnosis</th>
                                                            <th>Remarks</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                        <tr>
                                                            <td>____ __ __</td>
                                                            <td>_____</td>
                                                            <td>_____</td>
                                                            <td>_______</td>
                                                            <td>_______</td>
                                                            <td>____ __ __</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>S.N</th>
                                                            <th>Date</th>
                                                            <th>Doctor name</th>
                                                            <th>Investigation</th>
                                                            <th>Diagnosis</th>
                                                            <th>Remarks</th>
                                                        </tr>
                                                    </tfoot>
                                            </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-diagnosis" role="tabpanel" aria-labelledby="nav-diagnosis-tab">
                                <h5>Current Diagnosis are recorded here</h5>
                                <table id="diag" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Diagnosis Id</th>
                                                <th>Date</th>
                                                <th>Department name</th>
                                                <th>Doctor name</th>
                                                <th>Investigation</th>
                                                <th>Diagnosis</th>
                                                <th>Remarks</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Diagnosis Id</th>
                                                <th>Date</th>
                                                <th>Department name</th>
                                                <th>Doctor name</th>
                                                <th>Investigation</th>
                                                <th>Diagnosis</th>
                                                <th>Advices</th>
                                            </tr>
                                        </tfoot>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-medication" role="tabpanel" aria-labelledby="nav-medication-tab">
                                <h5>Here are the list of your medications</h5>
                                <table id="medicine" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Diagnosis Id</th>
                                                <th>Date</th>
                                                <th>Department name</th>
                                                <th>Doctor name</th>
                                                <th>Medicine Name</th>
                                                <th>Quantity</th>
                                                <th>Remarks</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                            <tr>
                                                <td>___</td>
                                                <td>____ __ __</td>
                                                <td>_____</td>
                                                <td>_____</td>
                                                <td>_______</td>
                                                <td>_______</td>
                                                <td>____ __ __</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Diagnosis Id</th>
                                                <th>Date</th>
                                                <th>Department name</th>
                                                <th>Doctor name</th>
                                                <th>Medicine Name</th>
                                                <th>Quantity</th>
                                                <th>Remarks</th>
                                            </tr>
                                        </tfoot>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-billings" role="tabpanel" aria-labelledby="nav-billings-tab">
                                    <h5>Your Billing informations are recorded here</h5>
                                    <table id="bill" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>S.N</th>
                                                    <th>Date</th>
                                                    <th>Particular</th>
                                                    <th>Net Amount</th>
                                                    <th>Advance Payment</th>
                                                    <th>Balance Remain</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>___</td>
                                                    <td>____ __ __</td>
                                                    <td>_____</td>
                                                    <td>_____</td>
                                                    <td>_______</td>
                                                    <td>_______</td>
                                                    <td>____ __ __</td>
                                                </tr>
                                                <tr>
                                                    <td>___</td>
                                                    <td>____ __ __</td>
                                                    <td>_____</td>
                                                    <td>_____</td>
                                                    <td>_______</td>
                                                    <td>_______</td>
                                                    <td>____ __ __</td>
                                                </tr>
                                                <tr>
                                                    <td>___</td>
                                                    <td>____ __ __</td>
                                                    <td>_____</td>
                                                    <td>_____</td>
                                                    <td>_______</td>
                                                    <td>_______</td>
                                                    <td>____ __ __</td>
                                                </tr>
                                                <tr>
                                                    <td>___</td>
                                                    <td>____ __ __</td>
                                                    <td>_____</td>
                                                    <td>_____</td>
                                                    <td>_______</td>
                                                    <td>_______</td>
                                                    <td>____ __ __</td>
                                                </tr>
                                                <tr>
                                                    <td>___</td>
                                                    <td>____ __ __</td>
                                                    <td>_____</td>
                                                    <td>_____</td>
                                                    <td>_______</td>
                                                    <td>_______</td>
                                                    <td>____ __ __</td>
                                                </tr>
                                                <tr>
                                                    <td>___</td>
                                                    <td>____ __ __</td>
                                                    <td>_____</td>
                                                    <td>_____</td>
                                                    <td>_______</td>
                                                    <td>_______</td>
                                                    <td>____ __ __</td>
                                                </tr>
                                                <tr>
                                                    <td>___</td>
                                                    <td>____ __ __</td>
                                                    <td>_____</td>
                                                    <td>_____</td>
                                                    <td>_______</td>
                                                    <td>_______</td>
                                                    <td>____ __ __</td>
                                                </tr>
                                                <tr>
                                                    <td>___</td>
                                                    <td>____ __ __</td>
                                                    <td>_____</td>
                                                    <td>_____</td>
                                                    <td>_______</td>
                                                    <td>_______</td>
                                                    <td>____ __ __</td>
                                                </tr>
                                                <tr>
                                                    <td>___</td>
                                                    <td>____ __ __</td>
                                                    <td>_____</td>
                                                    <td>_____</td>
                                                    <td>_______</td>
                                                    <td>_______</td>
                                                    <td>____ __ __</td>
                                                </tr>
                                                <tr>
                                                    <td>___</td>
                                                    <td>____ __ __</td>
                                                    <td>_____</td>
                                                    <td>_____</td>
                                                    <td>_______</td>
                                                    <td>_______</td>
                                                    <td>____ __ __</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>S.N</th>
                                                    <th>Date</th>
                                                    <th>Particular</th>
                                                    <th>Net Amount</th>
                                                    <th>Advance Payment</th>
                                                    <th>Balance Remain</th>
                                                    <th>Total</th>
                                                </tr>
                                            </tfoot>
                                    </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h5>If you have any feedback feel free to post them.</h5>
                <h5>Your details will be kept on discretion.</h5>
                <h4>Patient Id: XXXX</h4>
                <form action="">
                    <div class="form-group">
                        <textarea class="form-control" rows="3" placeholder="Input Your Feedback Here" rows="10"></textarea>
                    </div>
                    <div class="wrapper">
                        <button id="sub" type="button" name="">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h5 style="text-align: right;">Copy right: &copy; susanshrestha | All rights reserved</h5>

            </div>

        </div>
    </div>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
            $(document).ready(function() {
                 $('#physical_det').DataTable({     
                    "scrollY": "200px",
                    "scrollCollapse": true,
                    "paging": false,
                    "scrollX": true
                                        });
            } );
            $(document).ready(function() {
                 $('#appoint').DataTable({     
                    "scrollY": "200px",
                    "scrollCollapse": true,
                    "paging": false,
                    "scrollX": true
                                        });
            } );
            $(document).ready(function() {
                 $('#h-opthalmology').DataTable({     
                    "scrollY": "200px",
                    "scrollCollapse": true,
                    "paging": false,
                    "scrollX": true
                                        });
            } );
            $(document).ready(function() {
                 $('#h-gynaecology').DataTable({     
                    "scrollY": "200px",
                    "scrollCollapse": true,
                    "paging": false,
                    "scrollX": true
                                        });
            } );
            $(document).ready(function() {
                 $('#h-neurology').DataTable({     
                    "scrollY": "200px",
                    "scrollCollapse": true,
                    "paging": false,
                    "scrollX": true
                                        });
            } );
            $(document).ready(function() {
                 $('#h-radiology').DataTable({     
                    "scrollY": "200px",
                    "scrollCollapse": true,
                    "paging": false,
                    "scrollX": true
                                        });
            } );
            $(document).ready(function() {
                 $('#h-pathology').DataTable({     
                    "scrollY": "200px",
                    "scrollCollapse": true,
                    "paging": false,
                    "scrollX": true
                                        });
            } );
            $(document).ready(function() {
                 $('#h-cardiology').DataTable({     
                    "scrollY": "200px",
                    "scrollCollapse": true,
                    "paging": false,
                    "scrollX": true
                                        });
            } );
            $(document).ready(function() {
                 $('#diag').DataTable({     
                    "scrollY": "200px",
                    "scrollCollapse": true,
                    "paging": false,
                    "scrollX": true
                                        });
            } );
            $(document).ready(function() {
                 $('#medicine').DataTable({     
                    "scrollY": "200px",
                    "scrollCollapse": true,
                    "paging": false,
                    "scrollX": true
                                        });
            } );
            $(document).ready(function() {
                 $('#bill').DataTable({     
                    "scrollY": "200px",
                    "scrollCollapse": true,
                    "paging": false,
                    "scrollX": true
                                        });
            } );
    </script>
</body>
</html>