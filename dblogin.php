<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>

	</body>
</html>

<?php
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		if($name!="" && $email!="")
		{
			include('dbconnect.php');
			$sql = "SELECT * FROM student WHERE name = '".$name."' && email = '".$email."'";
			$result = $conn->query($sql);
			if($result->num_rows > 0)
			{
				?>
				<script>
        			$(function()
        			{
         				$('#myModal').modal('show');
        			});
        		</script>

        		<div class="modal fade" id="myModal" role="dialog">
			        <div class="modal-dialog" role="document">
			            <div class="modal-content">
			                <div class="modal-header">
			                    <button type="button" class="close" data-dismiss="modal">&times;</button>
			                    <h4 class="modal-title">Edit Data</h4>
			                    
			                </div>
			                <div class="modal-body">
			                    <div class="fetched-data">
			                    	<h3>You have successfully logged in</h3>
			                    </div> 
			                </div>
			                <div class="modal-footer">
			                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			                </div>
			            </div>
			        </div>
		    	</div>
			<?php }
			else
			{
				?>
				<script>
        			$(function()
        			{
         				$('#myModal').modal('show');
        			});
        		</script>

        		<div class="modal fade" id="myModal" role="dialog">
			        <div class="modal-dialog" role="document">
			            <div class="modal-content">
			                <div class="modal-header">
			                    <button type="button" class="close" data-dismiss="modal">&times;</button>
			                    <h4 class="modal-title">Edit Data</h4>
			                    
			                </div>
			                <div class="modal-body">
			                    <div class="fetched-data">
			                    	<h3>Wrong user name or email address</h3>
			                    </div> 
			                </div>
			                <div class="modal-footer">
			                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			                </div>
			            </div>
			        </div>
		    	</div>
			<?php }
			$conn->close();
		}
		else
		{
			echo "please fill up all field";
		}
		
	}
	else
	{
		echo "conection with database failed";
	}

?>