<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CCIS | Internal Systems </title>
        <link rel="icon" href="img/LOGO.png">
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

         <style>
          body{
              background-color: #E2E2E2 !important;
              color: #2F333D !important;
            }

            .mcl-blue{
              background-color: #095779 !important;
              color: #CCCC !important;
            }

            .mcl-darkgray{
              background-color: #2F333D !important;
              color: #CCCC !important;
            }

            .mcl-a-dark{
              background-color: #2F333D !important;
              color: #CCCC !important;
            }
            .mcl-a-dark:hover{
              background-color: #195387 !important;
              color: #white !important;
            }

  </style>

  <link href="css/mycss.css" rel="stylesheet">
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand mcl-blue">
            <a class="navbar-brand" href="gatekeeper.php" style="color: white;">
              <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-person-bounding-box" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg> Gatekeeper</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars" style="color: white;"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <div class="input-group-append">
                    
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0" style="color: white;">
                <li class="nav-item dropdown" style="color: white;">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;"><i class="fas fa-user fa-fw" style="color: white;"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="about.html" target="abc_frame" class="dropdown-item"> About</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php" class="dropdown-item" id="btn-confirm" data-toggle="modal" data-target="#exampleModalCenter"> Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu mcl-darkgray">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Navigation</div>
                                  <a class="nav-link" href="gatekeeper.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Home
                            </a>                         
                            <div class="sb-sidenav-menu-heading">Featured Pages</div>
                            <li>
                                   <a class="nav-link" href=".php" target="abc_frame"><div class="sb-nav-link-icon"><i class="fas fa-search"></i></div> Search</a>
                                   <a class="nav-link" href="search_logs.php" target="abc_frame"><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div> Tap Logs</a>
                                   <a class="nav-link" href="reports.php" target="abc_frame"><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div> Reports</a>
                                   <a class="nav-link" href="messaging.php" target="abc_frame"><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div> Messaging</a>
                                </li>   

                            <div class="sb-sidenav-menu-heading">Page Simulation</div>
                            <li>
                                   <a class="nav-link" href=".php" id="btn-confirm" data-toggle="modal" data-target="#tapin"><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div> Tap In</a>
                                   <a class="nav-link" href=".php" id="btn-confirm" data-toggle="modal" data-target="#tapout"><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div> Tap Out</a>
                                   <a class="nav-link" href=".php" id="btn-confirm" data-toggle="modal" data-target="#rstpwd" ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div> Quick Password Reset</a>
                                   <a class="nav-link" href=".php" id="btn-confirm" data-toggle="modal" data-target="#regnew" ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div> Register New User</a>

                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        ROLE
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                 <iframe src="dashboard.php" id="abc_frame" name="abc_frame" style="width: 100%; height: 100%; border: 0px;"></iframe>
                <footer class="py-4 bg-light mt-auto ">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; isGatekeeper | Internal Systems 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <!-- LOGOUT MODAL FORM -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="false">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Are you sure you want to Logout?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="window.location.href = 'logout.php';">Yes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>       
              </div>
            </div>
          </div>
        </div>
        <!-- MODAL FORM -->

        <!-- LOGOUT MODAL FORM -->
        <div class="modal fade" id="tapin" tabindex="-1" role="dialog" aria-labelledby="tapin" aria-hidden="false">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header mcl-green">
                <h5 class="modal-title" id="tapin">Simulate Tap In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body mcl-gray">
                
                  <!-- TAP IN -->
                <form action="tap-in-new.php" method="POST">
                                             <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">ID Number</label>
                                                <input class="form-control py-4" id="tap_in" name="tap_in" type="text" placeholder="id no.." required="required" />
                                            </div>
              </div>
              <div class="modal-footer mcl-gray">
                <input class="btn btn-secondary" type="submit" name="submit_tapin" class="fadeIn fourth" value="TAP IN" >
            </form>
              </div>
            </div>
          </div>
        </div>
        <!-- MODAL FORM -->

        <!-- LOGOUT MODAL FORM -->
        <div class="modal fade" id="tapout" tabindex="-1" role="dialog" aria-labelledby="tapout" aria-hidden="false">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header mcl-red">
                <h5 class="modal-title" id="tapout">Simulate Tap Out</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body mcl-gray">
                
                  <!-- TAP IN -->
                <form action="tap-out-new.php" method="POST">
                                             <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">ID Number</label>
                                                <input class="form-control py-4" id="tapout" name="tapout" type="text" placeholder="id no.." required="required" />
                                            </div>
              </div>
              <div class="modal-footer mcl-gray">
                <input class="btn btn-secondary" type="submit" name="submit_tapout" class="fadeIn fourth" value="TAP OUT" >
            </form>
              </div>
            </div>
          </div>
        </div>
        <!-- MODAL FORM -->

                <!-- RST MODAL FORM -->
        <div class="modal fade" id="rstpwd" tabindex="-1" role="dialog" aria-labelledby="rstpwd" aria-hidden="false">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="width: 90%;">
                            <div class="col-md-12 col-lg-12" style="height: 100% !important; width: 100% !important; padding: 0px; margin: 0px;;">
                                <div class="card shadow-lg border-0 rounded-lg">
                                    <div class="card-header mcl-blue"><h3 class="text-center font-weight-light my-3">Quick Password Reset</h3></div>
                                    <div class="card-body mcl-blue">
                                        <form>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Identification Number</label>
                                                <input class="form-control name="uid" py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter valid ID No." />
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href=""></a>
                                                <button type="submit"class="btn mcl-yellow" name='pwdreset' class="btn btn-primary btn-block">Reset Password</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center mcl-blue">
                                        <div class="small">Internal Systems | Gatekeeper</div>
                                    </div>
                                </div>
                            </div>


            </div>
          </div>
        </div>
        <!-- MODAL FORM -->

        <!-- REGISTER MODAL FORM -->
        <div class="modal fade" id="regnew" tabindex="-1" role="dialog" aria-labelledby="regnew" aria-hidden="false">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                        

            <div class="col-md-12 col-lg-12" style="height: 100% !important; width: 100% !important; padding: 0px; margin: 0px;">
                                <div class="card shadow-lg border-0 rounded-lg">
                                    <div class="card-header mcl-blue"><h3 class="text-center font-weight-light my-3" style="color: white; letter-spacing: 5px;">NEW USER</h3></div>
                                    <div class="card-body mcl-blue">
                                        <form>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName" autocomplete="off">First Name</label>
                                                        <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter first name" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName" autocomplete="off">Last Name</label>
                                                        <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter last name" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="" autocomplete="off">Identification Number</label>
                                                        <input class="form-control py-4" id="" type="text" placeholder="Enter ID Number" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="">Account Role</label>
                                                        <select name="state" class="form-control" required="" id="myOption">
                                                            <option value="" selected="">Choose...</option>
                                                            <option value="Admin">Admin</option>
                                                            <option value="User">User</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword" autocomplete="off">Password</label>
                                                        <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword" autocomplete="off">Confirm Password</label>
                                                        <input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0"><a class="btn btn-success btn-block" href="">Register</a></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center mcl-blue">
                                        <div class="small">Internal Systems | Gatekeeper</div>
                                    </div>
                                </div>
                            </div>


            </div>
          </div>
        </div>
        <!-- MODAL FORM -->


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>        
    </body>
</html>
