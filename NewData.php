<?php
session_start();

$email = $_SESSION["email"];
$password = $_SESSION["password"];
?>

<html>
	<body>
		<p>
		<?php
		$command = "start /B python myo_access.py record 7 ".$email."";
		pclose(popen( $command, 'r' ));

		echo("<script type='text/javascript'> alert('Could you do it for us once more? The thing is, we like your typing!!');</script>");

		echo("<script type='text/javascript'> window.location.replace('Registration2.html');</script>");
		?>
		<p>
	</body>
</html> 
