<!DOCTYPE html>
<html lang="en">
	<head>
	  	<title>Bootstrap Example</title>
	  	<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	<style type="text/css">
		div .md
		{
			background-color: yellow;
		}
		input
		{
			padding: 5px;
			border: 4px solid red;
			font-size: 20px;
			font-style: 

		}
		form
		{
			
		}
	</style>
	<body>

		<div class="container">
	  		<h2>Modal Example</h2>
	  		<!-- Trigger the modal with a button -->
	  		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

	  		<!-- Modal -->
	  		<div  class="modal fade" id="myModal" role="dialog">
		    	<div class="modal-dialog">
		    
			      	<!-- Modal content-->
			      	<div class="md" class="modal-content">
				        <div class="modal-header">
				          	<button type="button" class="close" data-dismiss="modal">&times;</button>
				          	<h4 class="modal-title">Please Login</h4>
				        </div>
				        <div class="modal-body">
				          	<form method="post" action="dblogin.php">
				          		<input type="text" name="name" placeholder="enter name">
				          		<br>
				          		<br>
				          		<input type="email" name="email" placeholder="enter email">
				          		<br>
				          		<button type="submit" name="submit">submit</button>

				          	</form>
				        </div>
				        <div class="modal-footer">
				          	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        </div>
			      	</div>
		    	</div>
  			</div>
		</div>
	</body>
</html>
