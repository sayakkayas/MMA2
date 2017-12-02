<?php
session_start();

$email = $_SESSION["email"];
$password = $_SESSION["password"];
?>
<html>
	<body>

		<?php
		$alert = "Email: ".$email.", Password: ".$password;
		echo("<script type='text/javascript'> alert('".$alert."');</script>");

		echo("<script type='text/javascript'> alert('Steady your hands, things are going to be calm');</script>");

		echo("<script type='text/javascript'> window.location.replace('Registration.html');</script>");
		
		sleep(2);

		$command = "nohup python myo_access.py record 7 ".$email;
		exec( $command, $status );

		?>
	</body>
</html> 
