<?php
session_start();

$email = $_GET["preferred_email"];
$password = $_GET["password_1"];
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;

?>

<html>
	<body>
		<?php
		// Check if user exists
		$email = $_GET["preferred_email"];
		$password = $_GET["password_1"];
		$command = "python myo_access.py check_user ".$email." 2>&1";
		$status = shell_exec( $command );

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
			$status = shell_exec( $command );
			print_r( $status );

			echo("<script type='text/javascript'> window.location.replace('RegistrationDummy.html');</script>");
		}

		?>
	</body>
</html> 
