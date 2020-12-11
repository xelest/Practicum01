<? php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">

  <style>
  body{
  /* Safari 4-5, Chrome 1-9 */
    background: -webkit-gradient(radial, center center, 0, center center, 5000, from(#1a82f7), to(#2F2727));

  /* Safari 5.1+, Chrome 10+ */
    background: -webkit-radial-gradient(circle, #1a82f7, #2F2727);

  /* Firefox 3.6+ */
    background: -moz-radial-gradient(circle, #1a82f7, #2F2727);

  /* IE 10 */
    background: -ms-radial-gradient(circle, #1a82f7, #2F2727);
    height:600px;
}

.centered-form{
	margin-top: 60px;
}

.centered-form .panel{
	background: rgba(255, 255, 255, 0.8);
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}

label.label-floatlabel {
    font-weight: bold;
    color: #46b8da;
    font-size: 11px;
}
  
  </style>

</head>
<body>

  <!--=============================Top nav======================== -->
<nav class="navbar navbar-inverse navbar-global navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">ID System</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-user navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Place Admin Name here</a></li>
            <li id="btn-confirm"><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>     
    </nav>

<img src="avatar.png" alt="Avatar" style="width: 600px; height: 600px; border-radius: 50%; align: center;">

<button class="btn btn-default" id="btn-confirm">Confirm</button>


<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="mi-modal" style="float: right; margin: 20px;">
  <div class="modal-dialog modal-m" style="float: right;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Are you sure you want to Logout?</h4>
      </div>
      <div class="modal-footer">    
        <button type="button" class="btn btn-default" id="modal-btn-si">YES</button>
        <button type="button" class="btn btn-primary" id="modal-btn-no">NO</button>
      </div>
    </div>
  </div>
</div>

<div class="alert" role="alert" id="result"></div>

<script> 
var modalConfirm = function(callback){
  
  $("#btn-confirm").on("click", function(){
    $("#mi-modal").modal('show');
  });

  $("#modal-btn-si").on("click", function(){
    callback(true);
    $("#mi-modal").modal('hide');
  });
  
  $("#modal-btn-no").on("click", function(){
    callback(false);
    $("#mi-modal").modal('hide');
  });
};

modalConfirm(function(confirm){
  if(confirm){
    //Acciones si el usuario confirma
    $("#result").html("CONFIRMED");
  }else{
    //Acciones si el usuario no confirma
    $("#result").html("NO");
  }
});
</script>


</body>
</html>
