
<!doctype html>
<html>
	<head>
		<title>Delete Account</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css"/>	
	</head>
	<body>
		<div class="fix main">
			<div class="fix header">
				<img src="images/BLOOD-BANK.gif" alt=""/>	
			</div>
			<div class="fix maincontent">
				<?php
					/*
					Projct Work
					Name:Prashanta Kumar Dey
					
					*/
					session_start();
					$userName=$_SESSION['userName'];
					$con = mysqli_connect("localhost", "root", "");
					// Check connection is established
					if (!$con) {
						die('Connection Failed');
					}
					// Check if database exist
					if (!mysqli_select_db($con, 'bloodbank')) {
						die('Database not found');
					}
					// Run the query
					echo"$userName"."'s account deleted!";
					$result = mysqli_query($con, "DELETE FROM users WHERE user_name='$userName'");
					header"Location:index.php";
					mysqli_close($con);
				?>

			</div>
			<div class="fix footer">
				<p>&copy; Comilla University Blood Bank,2016</p>
			</div>
		</div>
		
	</body>
</html>

