<!DOCTYPE html>
<html>
<head>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <meta charset="utf-8">
  	  <meta name="viewport" content="width=device-width, initial-scale=1">
  	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	  <link rel="stylesheet" type="text/css" href="tapping.css">
</head>
<body>
	<!-- ===================================MODAL WITH TEST BUTTON================================= -->
					<div class="container">
					  <br>
					  <!-- Trigger the modal with a button -->
					  <button type="button" class="btn btn-default btn-lg" id="myBtn">Test Message</button>

					  <!-- Modal -->
					  	<div class="modal fade" id="myModal" role="dialog">
						    <div class="modal-dialog">
						      <!-- Modal content-->
						      	<div class="modal-content">
							        <div class="modal-header" style="padding:35px 50px;">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4><span class="glyphicon glyphicon-comment"></span> Message</h4>
							        </div><!--End of header -->
							        <div class="modal-body" style="padding:40px 50px;">
							            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
							        </div><!--End of body -->
							        <div class="modal-footer">
							           <button type="submit" class="btn  btn-default pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
							        </div> <!--End of footer -->
						     	</div><!--End of modal content -->
						    </div><!--End of modal dialog -->
						</div> <!--End of modal fade -->
					</div> <!--End of container -->
	<!--=============================================================================================== -->
	<div class="slantrow">
		    <div class="container slant-inner">
		        <div class="flex-container">
		            <div class="slant-left">
		            	<div class="logo">
		            		<center><a id="logo">In</a> </center>
		            	</div>
		            	<div class="imgcontainer">
		            		<img src="placeholder.jpg" class="img-circle"  > 
		            	</div>
		                <br>
		            </div>
		            <div class="slant-right"></div>
		        </div><!-- END of Flex-->
		    </div>
	</div>

<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>
	    
</body>
</html>