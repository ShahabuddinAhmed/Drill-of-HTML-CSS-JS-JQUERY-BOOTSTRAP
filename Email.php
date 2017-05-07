<!DOCTYPE html>
<html>
	<head>
		<title>Send Email</title>
	</head>
	<style type="text/css">
		body
		{
			background-color: #c1bdba;
		}
	</style>
	<body>
		<?php  
			$Email = $_POST["email"];
			$Sub = $_POST["sub"];
			$Message = $_POST["message"];

			if($Email!= "" && $Message!="")
			{
				$Message = wordwrap($Message, 70);
				mail($Email, $Sub, $Message);
				echo  "<h1> You have successfuly send email </h1>";
			}
			else
			{
				if($Email =="" && $Message =="")
				{
					echo "<h1> Please Enter Your Email Adress and Message<br> </h1>";
				}
				else if($Email =="")
				{
					echo "<h1> Please Enter Your Email Adress <br> </h1>";
				}
				else if($Message=="")
				{
					echo "<h1> Please Enter Your Message <br> </H1>";
				}
			}

		?>
	</body>
</html>