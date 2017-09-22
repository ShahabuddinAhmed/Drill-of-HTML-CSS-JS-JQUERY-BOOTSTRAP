

<!DOCTYPE html>
<html>
	<head>
		<title>login</title>
		<meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	        <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	        <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
		<style type="text/css">
			input
			{
				border: 4px solid red;
				padding: 5px;
				background-color: pink;
				font-size: 25px;
			}
			button
			{
				border: 4px solid red;
				padding: 5px;
				background-color: pink;
				width: 65px;
			}
			body
			{
				background-color: gray;
			}
			form
			{
				padding-left: 100px;
				padding-right: 45px;
				padding-top: 100px;
				padding-bottom: 200px;
				background-color: skyblue;
				border: 3px solid green;
			}
			div
			{
				padding-left: 400px;
				padding-right: 400px;
				padding-top: 75px;
				padding-bottom: 75px;
			}
		</style>


	<body>
		<div>
			<form action="jsLogin.php" method="post">
				<h2 style="text-align: center">Login Form</h2>
				<br>
				<br>
				<p id="nameerr" style="display: none;"> The name is not correct </p>
				<br>
				<input type="text" name="name" placeholder="enter name...">
				<br>
				<p id="emailerr" style="display: none;"> The email is not correct </p>
				<br>
				<input type="email" name="email" placeholder="enter email...">
				<br>
				<br>
				<button type="submit" name="submit">submit</button>
			</form>
		</div>
	</body>
</html>

<?php
	
	if(isset($_POST["submit"])) {
		$name = $_POST["name"];
		$email = $_POST["email"];
		if($name != "Shahabuddin") {
			?>
			<script type="text/javascript">	
				document.getElementById('nameerr').style.display = "block";
			</script>
			<?php
		}
		else
		{
			header("location:index.php");
		}

		if($email != "shahabuddin.cse.u@gmail.com") {
			?>
			<script type="text/javascript">	
				document.getElementById('emailerr').style.display = "block";
			</script>
			<?php
		}
	}

?>