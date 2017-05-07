<!DOCTYPE html>
<html>
	<head>
		<title>Send Email</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<style>
		body
		{
			background-color: #c1bdba;
		}
		div.body
		{

		}
		form
		{
			border: 3px solid blue;
			padding: 40px 25px 40px 25px;
		}
		form input
		{
			border: 2px solid red;
			align-self: center;
			width: 220px;
			height: 40px;
		}
		form textarea
		{
			border: 2px solid red;
			width: 550px;
			height: 250px;
		}
	</style>
	<body>
		<br>
		<br>
		<br>
		<div class="continer">
			<div class="row">
				<div class="col-sm-3">
					
				</div>
				<div class="col-sm-6">
					<form action="Email.php" method="post">
						<div class="form-group">
							<lavel>Email:</lavel>
							<br>
							<input type="email" name="email" placeholder="Enter your Email...">
							<br>
							<lavel>Subject:</lavel>
							<br>
							<input type="text" name="sub" placeholder="Enter your Sub...">
							<br>
							<lavel>Message:</lavel>
							<br>
							<textarea type = "text" name="message"></textarea>
							<br>
							 <button type="submit" class="btn btn-default">Submit</button>
						</div>
					</form>
				</div>
				<div class="col-sm-3">
					
				</div>
			</div>
		</div>
	</body>
</html>