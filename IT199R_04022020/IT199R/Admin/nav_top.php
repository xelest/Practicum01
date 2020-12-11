<?php //include 'phpcore/session_core.php' ?>
<nav class="navbar navbar-inverse navbar-global navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">College of Computer and Information Science</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-user navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo "admin" ?></a></li>
            <li id="btn-confirm" data-toggle="modal" data-target="#exampleModalCenter"><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>