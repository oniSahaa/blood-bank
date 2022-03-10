				<?php
					/*
					Projct Work
					Name:Prashanta Kumar Dey
					*/
					
					$userName=$_POST['user_name'];
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
					$result = mysqli_query($con, "DELETE FROM users WHERE user_name='$userName'");
					mysqli_close($con);
					header("Location:users.php");

				?>

