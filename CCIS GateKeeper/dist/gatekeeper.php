<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CCIS | Internal Systems </title>
        <link rel="icon" href="img/MCL LOGO.png">
        <link href="css/styles.css" rel="stylesheet" />
       

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
                                   <a class="nav-link" href="Messaging.php" target="abc_frame"><div class="sb-nav-link-icon"><i class="fas fa-Message"></i></div> Messages</a>
                                   <a class="nav-link" href="csv_upload.php" target="abc_frame"><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div> CSV Uploader</a>
                                </li>   

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Reports
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                   <a class="nav-link" href="reports_shs.php" target="abc_frame"> SHS</a>
                                   <a class="nav-link" href="reports_college.php" target="abc_frame"> College</a>
                                   <a class="nav-link" href="reports_faculty.php" target="abc_frame"> Faculty</a>
                                   <a class="nav-link" href="reports_admins.php" target="abc_frame"> Admins</a>
                         </li>
                                </nav>
                            </div>


                            <div class="sb-sidenav-menu-heading">Page Simulation Demo Only</div>
                            <li>
                                   <a class="nav-link" href=".php" id="btn-confirm" data-toggle="modal" data-target="#tapin"><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div> Tap In</a>
                                   <a class="nav-link" href=".php" id="btn-confirm" data-toggle="modal" data-target="#tapout"><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div> Tap Out</a>
                                   <a class="nav-link" href=".php" ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div> Quick Password Reset</a>
                            </li>                         

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
                            <div class="text-muted">Copyright &copy; CCIS College of Computer and Information Science 2020</div>
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
        <script src="js/scripts.js"></script>        
    </body>
</html>
