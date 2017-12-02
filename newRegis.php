<?php
session_start();

$email = $_GET["preferred_email"];
$password = $_GET["password_1"];
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;

?>

<html>
	<body>

		<!-- Preferred Email: <?php echo $_GET["password_1"];?><br>
			 Preferred password: <?php echo $_GET["password_1"]; ?> -->
		<?php
		// Check if user exists
		$email = $_GET["preferred_email"];
		$password = $_GET["password_1"];
		$command = "python myo_access.py check_user ".$email." 2>&1";
		exec( $command, $status );

		$user_exists=(int)$status[0];
		print_r( $status );
		echo "<br>";
		print_r( $user_exists );

		if($user_exists)
		{
			echo("<script type='text/javascript'> alert('Email already in use');</script>");
			echo("<script type='text/javascript'>window.location.replace('MMA.html');</script>");
		}
		else
		{
			$command = "python myo_access.py register ".$email." ".$password." 2>&1";
			$out = exec( $command, $status );
			echo("<script type='text/javascript'> alert('".$out."');</script>");
			echo( "<br><br><br><br><br><br><br><br><br><br><br><br>" );
			print_r( $status );
			echo( $out );
			echo("<script type='text/javascript'> window.location.replace('RegistrationDummy.php');</script>");
		}

		?>
	</body>
</html> 
