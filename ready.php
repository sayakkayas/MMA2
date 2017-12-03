<?php
session_start();

$email = $_SESSION["email"];
$password = $_SESSION["password"];
?>
<html>
	<body>

		<?php
		$command = "start /B python myo_access.py record 7 ".$email."";
		pclose(popen( $command, 'r' ));

		echo("<script type='text/javascript'> alert('Steady your hands, things are going to be calm');</script>");

		echo("<script type='text/javascript'> window.location.replace('Registration.html');</script>");

		?>
	</body>
</html> 
